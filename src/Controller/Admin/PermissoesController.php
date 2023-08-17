<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class PermissoesController extends AppController
{
    public function index()
    {
        $queryAdmins = $this->Permissoes->obterAdmins();

        $queryFuncionarios = $this->Permissoes->obterFuncionarios();

        $opcoes = [
            'Administrador' => 'Administrador',
            'Funcionário' => 'Funcionário'
        ];

        $this->set(compact('opcoes', 'queryAdmins', 'queryFuncionarios'));
    }

    public function add()
    {
        $permissao = $this->Permissoes->newEmptyEntity();
        if ($this->request->is('post')) {
            $permissao = $this->Permissoes->patchEntity($permissao, $this->request->getData());

            if ($this->Permissoes->save($permissao)) {
                $this->Flash->success(__('Permissão concedida com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            
            $this->Flash->error(__('Falha ao cadastrar permissão. Tente novamente.'));
        }
    }

    public function edit($id = null)
    {
        $permisso = $this->Permissoes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $permisso = $this->Permissoes->patchEntity($permisso, $this->request->getData());
            if ($this->Permissoes->save($permisso)) {
                $this->Flash->success(__('The permisso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The permisso could not be saved. Please, try again.'));
        }
        $this->set(compact('permisso'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $permisso = $this->Permissoes->get($id);
        if ($this->Permissoes->delete($permisso)) {
            $this->Flash->success(__('The permisso has been deleted.'));
        } else {
            $this->Flash->error(__('The permisso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
