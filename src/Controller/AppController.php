<?php

declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\EventInterface;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');

        $this->loadComponent('Flash');

        // $this->loadComponent('Auth', [
            // 'loginRedirect' => [
            //         'controller' => 'Menu',
            //         'action' => 'index'],
            // 'logoutRedirect' => [
            //         'controller' => 'Users',
            //         'action' => 'login'
            //     ],
            // 'authError' => false,
            // 'authenticate' => [
            //     'ProdemgeLdap' => [
            //         'fields' => [
            //             'username' => 'username',
            //             'password' => 'password'
            //         ],
            //         'port' => \Cake\Core\Configure::read('Ldap.port'),
            //         'host' => \Cake\Core\Configure::read('Ldap.host'),
            //         'domain' => \Cake\Core\Configure::read('Ldap.domain'),
            //         'baseDN' => function ($username, $domain) {
            //             $baseDN = \Cake\Core\Configure::read('Ldap.baseDN');
            //             return $baseDN;
            //         },
            //         'bindDN' => function ($username, $domain) {
            //             if (strpos($username, $domain) !== false) {
            //                 $bindDN = $username;
            //             } else {
            //                 $bindDN = $username . '@' . $domain;
            //             }
            //             return $bindDN;
            //         },
            //         'search' => function ($username) {
            //             $search = '(&(objectClass=user)(objectCategory=person)(samaccountname=' . $username . '))';
            //             return $search;
            //         },
            //         'logErrors' => true,
            //         'options' => \Cake\Core\Configure::read('Ldap.options'),
            //         'flash' => [
            //             'key' => 'ldap',
            //             'element' => 'Flash/error',
            //         ]
            //     ]
            // ]
        // ]);

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }

    public function beforeRender(EventInterface $event)
    {
        $prefix = null;

        if ($this->request->getParam('prefix') != null) {
            $prefix = $this->request->getParam('prefix');
        }

        if ($prefix == 'admin') {
            if (($this->request->getParam('action') != null) && ($this->request->getParam('action') == 'login')) {
                $this->viewBuilder()->setLayout('login');
            } 
            // else {
            //     $this->set('usuario', $this->Auth->user());

            //     $this->viewBuilder()->setLayout('default');
            // }
        }
    }
}
