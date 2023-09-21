<?php
declare(strict_types=1);


namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * FuncionarioFerias Controller
 *
 * @property \App\Model\Table\FuncionarioFeriasTable $FuncionarioFerias
 * @method \App\Model\Entity\FuncionarioFeria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FuncionarioFeriasController extends AppController
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
            'order' => ['data_inicio' => 'desc']
        ];
        
        $funcionarioFerias = $this->paginate($this->FuncionarioFerias);

        $this->set(compact('funcionarioFerias'));
    }

    /**
     * View method
     *
     * @param string|null $id Funcionario Feria id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $funcionarioFeria = $this->FuncionarioFerias->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('funcionarioFeria'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $funcionarioFeria = $this->FuncionarioFerias->newEmptyEntity();
        if ($this->request->is('post')) {
            $funcionarioFeria = $this->FuncionarioFerias->patchEntity($funcionarioFeria, $this->request->getData());
            if ($this->FuncionarioFerias->save($funcionarioFeria)) {
                $this->Flash->success(__('The funcionario feria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funcionario feria could not be saved. Please, try again.'));
        }
        $this->set(compact('funcionarioFeria'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Funcionario Feria id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funcionarioFeria = $this->FuncionarioFerias->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcionarioFeria = $this->FuncionarioFerias->patchEntity($funcionarioFeria, $this->request->getData());
            if ($this->FuncionarioFerias->save($funcionarioFeria)) {
                $this->Flash->success(__('The funcionario feria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funcionario feria could not be saved. Please, try again.'));
        }
        $this->set(compact('funcionarioFeria'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Funcionario Feria id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcionarioFeria = $this->FuncionarioFerias->get($id);
        if ($this->FuncionarioFerias->delete($funcionarioFeria)) {
            $this->Flash->success(__('The funcionario feria has been deleted.'));
        } else {
            $this->Flash->error(__('The funcionario feria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
