<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Impressao Controller
 *
 * @property \App\Model\Table\ImpressaoTable $Impressao
 * @method \App\Model\Entity\Impressao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImpressaoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Atividade', 'Servico', 'StatusAtividade', 'Impressora'],
        ];
        $impressao = $this->paginate($this->Impressao);

        $this->set(compact('impressao'));
    }

    /**
     * View method
     *
     * @param string|null $id Impressao id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $impressao = $this->Impressao->get($id, [
            'contain' => ['Atividade', 'Servico', 'StatusAtividade', 'Impressora'],
        ]);

        $this->set(compact('impressao'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $impressao = $this->Impressao->newEmptyEntity();
        if ($this->request->is('post')) {
            $impressao = $this->Impressao->patchEntity($impressao, $this->request->getData());
            if ($this->Impressao->save($impressao)) {
                $this->Flash->success(__('The impressao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The impressao could not be saved. Please, try again.'));
        }
        $atividade = $this->Impressao->Atividade->find('list', ['limit' => 200])->all();
        $servico = $this->Impressao->Servico->find('list', ['limit' => 200])->all();
        $statusAtividade = $this->Impressao->StatusAtividade->find('list', ['limit' => 200])->all();
        $impressora = $this->Impressao->Impressora->find('list', ['limit' => 200])->all();
        $this->set(compact('impressao', 'atividade', 'servico', 'statusAtividade', 'impressora'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Impressao id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $impressao = $this->Impressao->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $impressao = $this->Impressao->patchEntity($impressao, $this->request->getData());
            if ($this->Impressao->save($impressao)) {
                $this->Flash->success(__('The impressao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The impressao could not be saved. Please, try again.'));
        }
        $atividade = $this->Impressao->Atividade->find('list', ['limit' => 200])->all();
        $servico = $this->Impressao->Servico->find('list', ['limit' => 200])->all();
        $statusAtividade = $this->Impressao->StatusAtividade->find('list', ['limit' => 200])->all();
        $impressora = $this->Impressao->Impressora->find('list', ['limit' => 200])->all();
        $this->set(compact('impressao', 'atividade', 'servico', 'statusAtividade', 'impressora'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Impressao id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $impressao = $this->Impressao->get($id);
        if ($this->Impressao->delete($impressao)) {
            $this->Flash->success(__('The impressao has been deleted.'));
        } else {
            $this->Flash->error(__('The impressao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
