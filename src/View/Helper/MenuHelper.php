<?php
namespace App\View\Helper;

use Cake\View\Helper;

class MenuHelper extends Helper
{
    function validaPermissao($user, $permissao)
    {
        for ($i = 0; $i < count($user['permissao']); $i++) {

            if ($user['permissao'][$i] == $permissao) {
                return true;
            }
        }
        return false;
    }
}
