<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class ContratosEstagiariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $contratosEstagiarios = $this->paginate($this->ContratosEstagiarios);

        $this->set(compact('contratosEstagiarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Contratos Estagiario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contratosEstagiario = $this->ContratosEstagiarios->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('contratosEstagiario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contratosEstagiario = $this->ContratosEstagiarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $contratosEstagiario = $this->ContratosEstagiarios->patchEntity($contratosEstagiario, $this->request->getData());
            if ($this->ContratosEstagiarios->save($contratosEstagiario)) {
                $this->Flash->success(__('Estagiário salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Estagiário não pode ser salvo.'));
        }
        $this->set(compact('contratosEstagiario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contratos Estagiario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contratosEstagiario = $this->ContratosEstagiarios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contratosEstagiario = $this->ContratosEstagiarios->patchEntity($contratosEstagiario, $this->request->getData());
            if ($this->ContratosEstagiarios->save($contratosEstagiario)) {
                $this->Flash->success(__('Estagiário atualizado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Estagiário não pode atualizado.'));
        }
        $this->set(compact('contratosEstagiario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contratos Estagiario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contratosEstagiario = $this->ContratosEstagiarios->get($id);
        if ($this->ContratosEstagiarios->delete($contratosEstagiario)) {
            $this->Flash->success(__('Estagiário deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Estagiário nã pode ser deletado.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
