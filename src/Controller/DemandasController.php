<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\I18n\FrozenTime;

/**
 * Demandas Controller
 *
 * @property \App\Model\Table\DemandasTable $Demandas
 * @method \App\Model\Entity\Demanda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DemandasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $demandas = $this->paginate($this->Demandas);

        $this->set(compact('demandas'));
    }

    /**
     * View method
     *
     * @param string|null $id Demanda id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $demanda = $this->Demandas->get($id, [
            'contain' => [],
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $demanda = $this->Demandas->newEmptyEntity();
        if ($this->request->is('post')) {
            $dados = $this->request->getData();
            $dados['status'] = 'Em aberto';
            $demanda = $this->Demandas->patchEntity($demanda, $dados);
            $demanda->data_abertura = FrozenTime::now();
            if ($this->Demandas->save($demanda)) {
                $this->Flash->success(__('The demanda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demanda could not be saved. Please, try again.'));
        }

        $this->set(compact('demanda'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Demanda id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $demanda = $this->Demandas->get($id, [
            'contain' => [],
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $demanda = $this->Demandas->patchEntity($demanda, $this->request->getData());
            if ($this->Demandas->save($demanda)) {
                $this->Flash->success(__('The demanda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demanda could not be saved. Please, try again.'));
        }
        $this->set(compact('demanda'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Demanda id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $demanda = $this->Demandas->get($id);
        if ($this->Demandas->delete($demanda)) {
            $this->Flash->success(__('The demanda has been deleted.'));
        } else {
            $this->Flash->error(__('The demanda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function confirmarDemanda($id = null)
    {

        $demanda = $this->Demandas->get($id, []);

        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['status'] = 'Em desenvolvimento';
            $responsavel = "testeLaura";
            $data['demanda_responsavel'] = $responsavel;

            $this->Demandas->patchEntity($demanda, $data);

            if ($this->Demandas->save($demanda)) {
                $this->Flash->success(__('Designado como Responsável'));
                return $this->redirect(['action' => 'index']);
            }
            else {
                $data['status'] = 'Em aberto';
            }
        }

        $this->set(compact('demanda', 'demanda_responsavel'));
    }

    public function dispensarDemanda($id = null)
    {
        $demanda = $this->Demandas->get($id, []);

        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data = ['demanda_responsavel' => null];
            $this->Demandas->patchEntity($demanda, $data);

            if ($this->Demandas->save($demanda)) {
                $this->Flash->success(__('Demanda dispensada com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possível dispensar a demanda. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('demanda'));
    }

    // public function relatorio($id = null) {

    //     $demanda = $this->Demandas->get($id, []);
        
    //     if($this->request->is('post')) {
    //         $data = $this->request->getData();
    //         $this->Demandas->patchEntity($demanda, $data);

    //     if($this->Demandas->save($demanda)) {
    //         return $this->redirect(['controller' => 'DemandasLog', 'action' => 'index']);
    //     }
        
    //     }
        
    // }
}