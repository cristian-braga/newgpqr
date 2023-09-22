<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;


class EscalaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $escala = $this->paginate($this->Escala);

        $this->set(compact('escala'));
    }

    /**
     * View method
     *
     * @param string|null $id Escala id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $escala = $this->Escala->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('escala'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $escala = $this->Escala->newEmptyEntity();
        if ($this->request->is('post')) {
            $escala = $this->Escala->patchEntity($escala, $this->request->getData());
            if ($this->Escala->save($escala)) {
                $this->Flash->success(__('The escala has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The escala could not be saved. Please, try again.'));
        }
        $this->set(compact('escala'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Escala id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $escala = $this->Escala->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $escala = $this->Escala->patchEntity($escala, $this->request->getData());
            if ($this->Escala->save($escala)) {
                $this->Flash->success(__('The escala has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The escala could not be saved. Please, try again.'));
        }
        $this->set(compact('escala'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Escala id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $escala = $this->Escala->get($id);
        if ($this->Escala->delete($escala)) {
            $this->Flash->success(__('The escala has been deleted.'));
        } else {
            $this->Flash->error(__('The escala could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
