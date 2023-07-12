<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Impressora Controller
 *
 * @property \App\Model\Table\ImpressoraTable $Impressora
 * @method \App\Model\Entity\Impressora[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImpressoraController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $impressora = $this->paginate($this->Impressora);

        $this->set(compact('impressora'));
    }

    /**
     * View method
     *
     * @param string|null $id Impressora id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $impressora = $this->Impressora->get($id, [
            'contain' => ['Impressao'],
        ]);

        $this->set(compact('impressora'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $impressora = $this->Impressora->newEmptyEntity();
        if ($this->request->is('post')) {
            $impressora = $this->Impressora->patchEntity($impressora, $this->request->getData());
            if ($this->Impressora->save($impressora)) {
                $this->Flash->success(__('The impressora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The impressora could not be saved. Please, try again.'));
        }
        $this->set(compact('impressora'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Impressora id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $impressora = $this->Impressora->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $impressora = $this->Impressora->patchEntity($impressora, $this->request->getData());
            if ($this->Impressora->save($impressora)) {
                $this->Flash->success(__('The impressora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The impressora could not be saved. Please, try again.'));
        }
        $this->set(compact('impressora'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Impressora id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $impressora = $this->Impressora->get($id);
        if ($this->Impressora->delete($impressora)) {
            $this->Flash->success(__('The impressora has been deleted.'));
        } else {
            $this->Flash->error(__('The impressora could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
