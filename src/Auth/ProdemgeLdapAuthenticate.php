<?php
/**
 * Baseado na classe https://github.com/jeffersonsimaogoncalves/cakephp-ldap
 * 
 * @link          http://git.prodemge.gov.br/prodemge/cakephp-ldap-authenticate LDAP Plugin
 * @since         1.0.0
 */

namespace App\Auth;

use Cake\Auth\BaseAuthenticate;
use Cake\Controller\ComponentRegistry;
use Cake\Log\LogTrait;
use Cake\Network\Exception\InternalErrorException;
use Cake\Network\Request;
use Cake\Network\Response;
use ErrorException;

/**
 * Description of LdapAuthenticate
 *
 * @author p061429
 */
class ProdemgeLdapAuthenticate extends BaseAuthenticate
{
	use LogTrait;

	/**
	 * LDAP Object
	 *
	 * @var object
	 */
	private $ldapConnection;

	/**
	 * Log Errors
	 *
	 * @var boolean
	 */
	public $logErrors = false;

	/**
	 * Constructor
	 *
	 * @param \Cake\Controller\ComponentRegistry $registry The Component registry used on this request.
	 * @param array $config Array of config to use.
	 */
	public function __construct(ComponentRegistry $registry, array $config = [])
	{
		parent::__construct($registry, $config);

		if (!defined('LDAP_OPT_DIAGNOSTIC_MESSAGE')) {
			define('LDAP_OPT_DIAGNOSTIC_MESSAGE', 0x0032);
		}

		if (isset($config['host']) && is_object($config['host']) && ($config['host'] instanceof \Closure)) {
			$config['host'] = $config['host']();
		}

		if (empty($config['host'])) {
			throw new InternalErrorException('LDAP Server not specified!');
		}

		if (empty($config['port'])) {
			$config['port'] = null;
		}

		if (isset($config['logErrors']) && $config['logErrors'] === true) {
			$this->logErrors = true;
		}

		try {
			$this->ldapConnection = ldap_connect($config['host'], $config['port']);
			if (isset($config['options']) && is_array($config['options'])) {
				foreach ($config['options'] as $option => $value) {
					ldap_set_option($this->ldapConnection, $option, $value);
				}
			} else {
				ldap_set_option($this->ldapConnection, LDAP_OPT_NETWORK_TIMEOUT, 30);
			}
		} catch (Exception $e) {
			throw new InternalErrorException('Unable to connect to specified LDAP Server(s)!');
		}
	}

	/**
	 * Destructor
	 */
	public function __destruct()
	{
		set_error_handler(
			function ($errorNumber, $errorText, $errorFile, $errorLine) {
				throw new ErrorException($errorText, 0, $errorNumber, $errorFile, $errorLine);
			},
			E_ALL
		);

		try {
			ldap_unbind($this->ldapConnection);
		} catch (ErrorException $e) {
			// Do Nothing
		}

		restore_error_handler();
	}

	/**
	 * Authenticate a user based on the request information.
	 *
	 * @param \Cake\Network\Request $request The request to authenticate with.
	 * @param \Cake\Network\Response $response The response to add headers to.
	 * @return mixed Either false on failure, or an array of user data on success.
	 */
	public function authenticate(Request $request, Response $response)
	{
		if (!isset($request->data['username']) || !isset($request->data['password'])) {
			return false;
		}

		return $this->_findUser($request->data['username'], $request->data['password']);
	}

	/**
	 * Find a user record using the username and password provided.
	 *
	 * @param string $username The username/identifier.
	 * @param string|null $password The password
	 * @return bool|array Either false on failure, or an array of user data.
	 */
	protected function _findUser($username, $password = null)
	{
		set_error_handler(
			function ($errorNumber, $errorText, $errorFile, $errorLine) {
				throw new ErrorException($errorText, 0, $errorNumber, $errorFile, $errorLine);
			},
			E_ALL
		);

		try {
			$ldapBind = ldap_bind($this->ldapConnection, isset($this->_config['bindDN']) ? $this->_config['bindDN']($username, $this->_config['domain']) : $username, $password);

			if ($ldapBind === true) {
				$searchResults	 = ldap_search($this->ldapConnection, $this->_config['baseDN']($username, $this->_config['domain']), $this->_config['search']($username));
				$entry		 = ldap_first_entry($this->ldapConnection, $searchResults);

				return ldap_get_attributes($this->ldapConnection, $entry);
			}
		} catch (ErrorException $e) {
			if ($this->logErrors === true) {
				$this->log($e->getMessage());
			}

			if (ldap_get_option($this->ldapConnection, LDAP_OPT_DIAGNOSTIC_MESSAGE, $extendedError)) {
				if (!empty($extendedError)) {
					foreach ($this->_config['errors'] as $error => $errorMessage) {
						if (strpos($extendedError, $error) !== false) {
							$messages[] = [
								'message'	 => $errorMessage,
								'key'		 => $this->_config['flash']['key'],
								'element'	 => $this->_config['flash']['element'],
								'params'	 => $this->_config['flash']['params'],
							];
						}
					}
				}
			}
		}
		restore_error_handler();

		if (!empty($messages)) {
			$controller = $this->_registry->getController();
			$controller->request->session()->write('Flash.' . $this->_config['flash']['key'], $messages);
		}

		return false;
	}
}
