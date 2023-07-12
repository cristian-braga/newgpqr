<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Expedicao Controller
 *
 * @property \App\Model\Table\ExpedicaoTable $Expedicao
 * @method \App\Model\Entity\Expedicao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExpedicaoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Atividade', 'Servico', 'StatusAtividade'],
        ];
        $expedicao = $this->paginate($this->Expedicao);

        $this->set(compact('expedicao'));
    }

    /**
     * View method
     *
     * @param string|null $id Expedicao id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $expedicao = $this->Expedicao->get($id, [
            'contain' => ['Atividade', 'Servico', 'StatusAtividade'],
        ]);

        $this->set(compact('expedicao'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $expedicao = $this->Expedicao->newEmptyEntity();
        if ($this->request->is('post')) {
            $expedicao = $this->Expedicao->patchEntity($expedicao, $this->request->getData());
            if ($this->Expedicao->save($expedicao)) {
                $this->Flash->success(__('The expedicao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expedicao could not be saved. Please, try again.'));
        }
        $atividade = $this->Expedicao->Atividade->find('list', ['limit' => 200])->all();
        $servico = $this->Expedicao->Servico->find('list', ['limit' => 200])->all();
        $statusAtividade = $this->Expedicao->StatusAtividade->find('list', ['limit' => 200])->all();
        $this->set(compact('expedicao', 'atividade', 'servico', 'statusAtividade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Expedicao id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $expedicao = $this->Expedicao->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $expedicao = $this->Expedicao->patchEntity($expedicao, $this->request->getData());
            if ($this->Expedicao->save($expedicao)) {
                $this->Flash->success(__('The expedicao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expedicao could not be saved. Please, try again.'));
        }
        $atividade = $this->Expedicao->Atividade->find('list', ['limit' => 200])->all();
        $servico = $this->Expedicao->Servico->find('list', ['limit' => 200])->all();
        $statusAtividade = $this->Expedicao->StatusAtividade->find('list', ['limit' => 200])->all();
        $this->set(compact('expedicao', 'atividade', 'servico', 'statusAtividade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Expedicao id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $expedicao = $this->Expedicao->get($id);
        if ($this->Expedicao->delete($expedicao)) {
            $this->Flash->success(__('The expedicao has been deleted.'));
        } else {
            $this->Flash->error(__('The expedicao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
