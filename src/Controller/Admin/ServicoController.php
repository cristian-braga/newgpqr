<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Servico Controller
 *
 * @property \App\Model\Table\ServicoTable $Servico
 * @method \App\Model\Entity\Servico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServicoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $servico = $this->paginate($this->Servico);

        $this->set(compact('servico'));
    }

    /**
     * View method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $servico = $this->Servico->get($id, [
            'contain' => ['Atividade', 'Envelopamento', 'Expedicao', 'Impressao', 'Triagem'],
        ]);

        $this->set(compact('servico'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $servico = $this->Servico->newEmptyEntity();
        if ($this->request->is('post')) {
            $servico = $this->Servico->patchEntity($servico, $this->request->getData());
            if ($this->Servico->save($servico)) {
                $this->Flash->success(__('The servico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servico could not be saved. Please, try again.'));
        }
        $this->set(compact('servico'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servico = $this->Servico->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servico = $this->Servico->patchEntity($servico, $this->request->getData());
            if ($this->Servico->save($servico)) {
                $this->Flash->success(__('The servico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servico could not be saved. Please, try again.'));
        }
        $this->set(compact('servico'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $servico = $this->Servico->get($id);
        if ($this->Servico->delete($servico)) {
            $this->Flash->success(__('The servico has been deleted.'));
        } else {
            $this->Flash->error(__('The servico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
