<?php
declare(strict_types=1);


namespace App\Controller\Admin;

use App\Controller\AppController;


class FuncionariosGimController extends AppController
{
  
    public function index()
    {
        $funcionariosGim = $this->paginate($this->FuncionariosGim);

        $this->set(compact('funcionariosGim'));
    }

    /**
     * View method
     *
     * @param string|null $id Funcionarios Gim id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $funcionariosGim = $this->FuncionariosGim->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('funcionariosGim'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $funcionariosGim = $this->FuncionariosGim->newEmptyEntity();
        if ($this->request->is('post')) {
            $funcionariosGim = $this->FuncionariosGim->patchEntity($funcionariosGim, $this->request->getData());
            if ($this->FuncionariosGim->save($funcionariosGim)) {
                $this->Flash->success(__('The funcionarios gim has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funcionarios gim could not be saved. Please, try again.'));
        }
        $this->set(compact('funcionariosGim'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Funcionarios Gim id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funcionariosGim = $this->FuncionariosGim->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcionariosGim = $this->FuncionariosGim->patchEntity($funcionariosGim, $this->request->getData());
            if ($this->FuncionariosGim->save($funcionariosGim)) {
                $this->Flash->success(__('The funcionarios gim has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funcionarios gim could not be saved. Please, try again.'));
        }
        $this->set(compact('funcionariosGim'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Funcionarios Gim id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcionariosGim = $this->FuncionariosGim->get($id);
        if ($this->FuncionariosGim->delete($funcionariosGim)) {
            $this->Flash->success(__('The funcionarios gim has been deleted.'));
        } else {
            $this->Flash->error(__('The funcionarios gim could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
