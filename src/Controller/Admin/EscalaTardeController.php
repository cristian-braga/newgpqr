<?php
declare(strict_types=1);


namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * EscalaTarde Controller
 *
 * @property \App\Model\Table\EscalaTardeTable $EscalaTarde
 * @method \App\Model\Entity\EscalaTarde[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EscalaTardeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $escalaTarde = $this->paginate($this->EscalaTarde);

        $this->set(compact('escalaTarde'));
    }

    /**
     * View method
     *
     * @param string|null $id Escala Tarde id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $escalaTarde = $this->EscalaTarde->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('escalaTarde'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $escalaTarde = $this->EscalaTarde->newEmptyEntity();
        if ($this->request->is('post')) {
            $escalaTarde = $this->EscalaTarde->patchEntity($escalaTarde, $this->request->getData());
            if ($this->EscalaTarde->save($escalaTarde)) {
                $this->Flash->success(__('The escala tarde has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The escala tarde could not be saved. Please, try again.'));
        }
        $this->set(compact('escalaTarde'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Escala Tarde id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $escalaTarde = $this->EscalaTarde->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $escalaTarde = $this->EscalaTarde->patchEntity($escalaTarde, $this->request->getData());
            if ($this->EscalaTarde->save($escalaTarde)) {
                $this->Flash->success(__('The escala tarde has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The escala tarde could not be saved. Please, try again.'));
        }
        $this->set(compact('escalaTarde'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Escala Tarde id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $escalaTarde = $this->EscalaTarde->get($id);
        if ($this->EscalaTarde->delete($escalaTarde)) {
            $this->Flash->success(__('The escala tarde has been deleted.'));
        } else {
            $this->Flash->error(__('The escala tarde could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
