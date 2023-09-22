<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class ContratosController extends AppController
{
    public function index()
    {
        $contratos = $this->paginate($this->Contratos);

        $this->set(compact('contratos'));
    }

    public function view($id = null)
    {
        $contrato = $this->Contratos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('contrato'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contrato = $this->Contratos->newEmptyEntity();
        if ($this->request->is('post')) {
            $contrato = $this->Contratos->patchEntity($contrato, $this->request->getData());
            if ($this->Contratos->save($contrato)) {
                $this->Flash->success(__('O Contrato foi lançada com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O contrato não pode ser salva. Tente novamente.'));
        }
        $this->set(compact('contrato'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contrato = $this->Contratos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contrato = $this->Contratos->patchEntity($contrato, $this->request->getData());
            if ($this->Contratos->save($contrato)) {
                $this->Flash->success(__('O Contrato foi Editado com Sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O contrato não pode ser Editado. Tente novamente.'));
        }
        $this->set(compact('contrato'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contrato = $this->Contratos->get($id);
        if ($this->Contratos->delete($contrato)) {
            $this->Flash->success(__('O Contrato foi Apagado.'));
        } else {
            $this->Flash->error(__('O Contrato não foi Apagado. Tente Novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
