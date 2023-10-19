<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class UsersController extends AppController
{
    public function login()
    {
        if ($this->request->is('post')) {
            $dadosUsuario = $this->Auth->identify();
            $dadosUsuario = true;

            if ($dadosUsuario) {
                $Permissoes = TableRegistry::getTableLocator()->get('Permissoes');

                $usuario['matricula']     = @$dadosUsuario['cn'][0];
                $usuario['nomeCompleto']  = @$dadosUsuario['displayName'][0];
                $usuario['primeiroNome']  = @$dadosUsuario['givenName'][0];
                $usuario['sobrenome']     = @$dadosUsuario['sn'][0];
                $usuario['setor']         = @$dadosUsuario['department'][0];
                $usuario['permissao']     = $Permissoes->obterPermissao($usuario['matricula']);

                if ($usuario['setor'] == 'PRODEMGE-DTE/SSR/GIM') {
                    $this->Auth->setUser($usuario);
                    return $this->redirect($this->Auth->redirectUrl());
                } else {
                    $this->Flash->error('Usuário não tem permissão!');
                }
            } else {
                $this->Flash->error(__('Login inválido! Matrícula ou senha incorreta!'));
            }
        }
    }

    public function logout()
    {
        $this->Flash->success(__('Deslogado com sucesso!'));
        return $this->redirect($this->Auth->logout());
    }
}
