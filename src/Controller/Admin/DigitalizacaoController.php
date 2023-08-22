<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Digitalizacao Controller
 *
 * @property \App\Model\Table\DigitalizacaoTable $Digitalizacao
 * @method \App\Model\Entity\Digitalizacao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DigitalizacaoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => ['Servico'],
        ];
        $digitalizacao = $this->paginate($this->Digitalizacao);

        $this->set(compact('digitalizacao'));
    }

    /**
     * View method
     *
     * @param string|null $id Digitalizacao id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $digitalizacao = $this->Digitalizacao->get($id, [
            'contain' => ['Servico', 'StatusDigitalizacao'],
        ]);

        $this->set(compact('digitalizacao'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $digitalizacao = $this->Digitalizacao->newEmptyEntity();

        $servicos = $this->Digitalizacao->Servico
         ->find('list', ['keyField' => 'id', 'valueField' => 'nome_servico'])
         ->order(['nome_servico' => 'asc'])
         ->all();
         
        if ($this->request->is('post')) {
            $digitalizacao = $this->Digitalizacao->patchEntity($digitalizacao, $this->request->getData());
            if ($this->Digitalizacao->save($digitalizacao)) {
                $this->Flash->success(__('The digitalizacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The digitalizacao could not be saved. Please, try again.'));
        }


        $this->set(compact('digitalizacao', 'servicos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Digitalizacao id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $digitalizacao = $this->Digitalizacao->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $digitalizacao = $this->Digitalizacao->patchEntity($digitalizacao, $this->request->getData());
            if ($this->Digitalizacao->save($digitalizacao)) {
                $this->Flash->success(__('The digitalizacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The digitalizacao could not be saved. Please, try again.'));
        }
        $servico = $this->Digitalizacao->Servico->find('list', ['limit' => 200])->all();
        $this->set(compact('digitalizacao', 'servico'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Digitalizacao id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $digitalizacao = $this->Digitalizacao->get($id);
        if ($this->Digitalizacao->delete($digitalizacao)) {
            $this->Flash->success(__('The digitalizacao has been deleted.'));
        } else {
            $this->Flash->error(__('The digitalizacao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
