<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class UsersController extends AppController
{
    public function login()
    {
        if ($this->request->is('post')) {
            if ($dadosUser = $this->Auth->identify()) {
                $this->fetchTable('Permissoes');

                $usuario = $this->Auth->user();

                $usuario['matricula']     = @$dadosUser['cn'][0];
                $usuario['nomeCompleto']  = @$dadosUser['displayName'][0];
                $usuario['primeiroNome']  = @$dadosUser['givenName'][0];
                $usuario['sobrenome']     = @$dadosUser['sn'][0];
                $usuario['Setor']         = @$dadosUser['department'][0];
                $usuario['permissao']     = $this->Permissoes->obterPermissoes($usuario['matricula']);

                $this->Auth->setUser($usuario);

                $this->set(compact('usuario'));

                if ($usuario['Setor'] == 'PRODEMGE-DTE/SSR/GIM') {
                    $this->redirect($this->Auth->redirectUrl());
                } else {
                    $this->Flash->error('Usuário não tem permissão!');
                    $this->redirect($this->Auth->logout());
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
