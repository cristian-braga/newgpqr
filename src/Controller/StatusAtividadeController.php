<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * StatusAtividade Controller
 *
 * @property \App\Model\Table\StatusAtividadeTable $StatusAtividade
 * @method \App\Model\Entity\StatusAtividade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StatusAtividadeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $statusAtividade = $this->paginate($this->StatusAtividade);

        $this->set(compact('statusAtividade'));
    }

    /**
     * View method
     *
     * @param string|null $id Status Atividade id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statusAtividade = $this->StatusAtividade->get($id, [
            'contain' => ['Atividade', 'Envelopamento', 'Expedicao', 'Impressao', 'Triagem'],
        ]);

        $this->set(compact('statusAtividade'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statusAtividade = $this->StatusAtividade->newEmptyEntity();
        if ($this->request->is('post')) {
            $statusAtividade = $this->StatusAtividade->patchEntity($statusAtividade, $this->request->getData());
            if ($this->StatusAtividade->save($statusAtividade)) {
                $this->Flash->success(__('The status atividade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status atividade could not be saved. Please, try again.'));
        }
        $this->set(compact('statusAtividade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Status Atividade id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statusAtividade = $this->StatusAtividade->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statusAtividade = $this->StatusAtividade->patchEntity($statusAtividade, $this->request->getData());
            if ($this->StatusAtividade->save($statusAtividade)) {
                $this->Flash->success(__('The status atividade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status atividade could not be saved. Please, try again.'));
        }
        $this->set(compact('statusAtividade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Status Atividade id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statusAtividade = $this->StatusAtividade->get($id);
        if ($this->StatusAtividade->delete($statusAtividade)) {
            $this->Flash->success(__('The status atividade has been deleted.'));
        } else {
            $this->Flash->error(__('The status atividade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
