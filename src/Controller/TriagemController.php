<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Triagem Controller
 *
 * @property \App\Model\Table\TriagemTable $Triagem
 * @method \App\Model\Entity\Triagem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TriagemController extends AppController
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
        $triagem = $this->paginate($this->Triagem);

        $this->set(compact('triagem'));
    }

    /**
     * View method
     *
     * @param string|null $id Triagem id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $triagem = $this->Triagem->get($id, [
            'contain' => ['Atividade', 'Servico', 'StatusAtividade'],
        ]);

        $this->set(compact('triagem'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $triagem = $this->Triagem->newEmptyEntity();
        if ($this->request->is('post')) {
            $triagem = $this->Triagem->patchEntity($triagem, $this->request->getData());
            if ($this->Triagem->save($triagem)) {
                $this->Flash->success(__('The triagem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The triagem could not be saved. Please, try again.'));
        }
        $atividade = $this->Triagem->Atividade->find('list', ['limit' => 200])->all();
        $servico = $this->Triagem->Servico->find('list', ['limit' => 200])->all();
        $statusAtividade = $this->Triagem->StatusAtividade->find('list', ['limit' => 200])->all();
        $this->set(compact('triagem', 'atividade', 'servico', 'statusAtividade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Triagem id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $triagem = $this->Triagem->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $triagem = $this->Triagem->patchEntity($triagem, $this->request->getData());
            if ($this->Triagem->save($triagem)) {
                $this->Flash->success(__('The triagem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The triagem could not be saved. Please, try again.'));
        }
        $atividade = $this->Triagem->Atividade->find('list', ['limit' => 200])->all();
        $servico = $this->Triagem->Servico->find('list', ['limit' => 200])->all();
        $statusAtividade = $this->Triagem->StatusAtividade->find('list', ['limit' => 200])->all();
        $this->set(compact('triagem', 'atividade', 'servico', 'statusAtividade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Triagem id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $triagem = $this->Triagem->get($id);
        if ($this->Triagem->delete($triagem)) {
            $this->Flash->success(__('The triagem has been deleted.'));
        } else {
            $this->Flash->error(__('The triagem could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
