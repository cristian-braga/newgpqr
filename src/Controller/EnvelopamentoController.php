<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Envelopamento Controller
 *
 * @property \App\Model\Table\EnvelopamentoTable $Envelopamento
 * @method \App\Model\Entity\Envelopamento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnvelopamentoController extends AppController
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
        $envelopamento = $this->paginate($this->Envelopamento);

        $this->set(compact('envelopamento'));
    }

    /**
     * View method
     *
     * @param string|null $id Envelopamento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $envelopamento = $this->Envelopamento->get($id, [
            'contain' => ['Atividade', 'Servico', 'StatusAtividade'],
        ]);

        $this->set(compact('envelopamento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $envelopamento = $this->Envelopamento->newEmptyEntity();
        if ($this->request->is('post')) {
            $envelopamento = $this->Envelopamento->patchEntity($envelopamento, $this->request->getData());
            if ($this->Envelopamento->save($envelopamento)) {
                $this->Flash->success(__('The envelopamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The envelopamento could not be saved. Please, try again.'));
        }
        $atividade = $this->Envelopamento->Atividade->find('list', ['limit' => 200])->all();
        $servico = $this->Envelopamento->Servico->find('list', ['limit' => 200])->all();
        $statusAtividade = $this->Envelopamento->StatusAtividade->find('list', ['limit' => 200])->all();
        $this->set(compact('envelopamento', 'atividade', 'servico', 'statusAtividade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Envelopamento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $envelopamento = $this->Envelopamento->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $envelopamento = $this->Envelopamento->patchEntity($envelopamento, $this->request->getData());
            if ($this->Envelopamento->save($envelopamento)) {
                $this->Flash->success(__('The envelopamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The envelopamento could not be saved. Please, try again.'));
        }
        $atividade = $this->Envelopamento->Atividade->find('list', ['limit' => 200])->all();
        $servico = $this->Envelopamento->Servico->find('list', ['limit' => 200])->all();
        $statusAtividade = $this->Envelopamento->StatusAtividade->find('list', ['limit' => 200])->all();
        $this->set(compact('envelopamento', 'atividade', 'servico', 'statusAtividade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Envelopamento id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $envelopamento = $this->Envelopamento->get($id);
        if ($this->Envelopamento->delete($envelopamento)) {
            $this->Flash->success(__('The envelopamento has been deleted.'));
        } else {
            $this->Flash->error(__('The envelopamento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
