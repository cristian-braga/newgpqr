<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class PermissoesController extends AppController
{
    public function index()
    {
        $permissoes = $this->paginate($this->Permissoes);

        $opcoes = [
            'Administrador' => 'Administrador',
            'Digitalização' => 'Digitalização',
            'Atividade' => 'Atividade',
            'Impressão' => 'Impressão',
            'Conferência' => 'Conferência',
            'Envelopamento' => 'Envelopamento',
            'Triagem' => 'Triagem',
            'Expedição' => 'Expedição'
        ];

        $this->set(compact('permissoes', 'opcoes'));
    }

    public function add()
    {
        $permisso = $this->Permissoes->newEmptyEntity();
        if ($this->request->is('post')) {
            $permisso = $this->Permissoes->patchEntity($permisso, $this->request->getData());
            if ($this->Permissoes->save($permisso)) {
                $this->Flash->success(__('The permisso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The permisso could not be saved. Please, try again.'));
        }
        $this->set(compact('permisso'));
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
