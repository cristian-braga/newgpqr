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
        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            $existe_permissao = $this->Permissoes->existePermissao($dados['matricula']);

            if (!$existe_permissao) {
                $permissao = $this->Permissoes->newEmptyEntity();
                $permissao = $this->Permissoes->patchEntity($permissao, $dados);
            } else {
                $permissao = $this->Permissoes->patchEntity($existe_permissao, $dados);
            }

            if ($this->Permissoes->save($permissao)) {
                $this->Flash->success(__('Permissão concedida com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            
            $this->Flash->error(__('Falha ao cadastrar permissão. Tente novamente.'));
        }
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $permisso = $this->Permissoes->get($id);

        if ($this->Permissoes->delete($permisso)) {
            $this->Flash->success(__('Permissão removida com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao remover permissão. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
