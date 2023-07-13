<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Atividade Controller
 *
 * @property \App\Model\Table\AtividadeTable $Atividade
 * @method \App\Model\Entity\Atividade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AtividadeController extends AppController
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
            'contain' => ['Servico', 'StatusAtividade']
        ];

        $atividade = $this->paginate($this->Atividade);

        $this->set(compact('atividade'));
    }

    /**
     * View method
     *
     * @param string|null $id Atividade id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $atividade = $this->Atividade->get($id, [
            'contain' => ['Servico', 'StatusAtividade', 'Envelopamento', 'Expedicao', 'Impressao', 'Triagem'],
        ]);

        $this->set(compact('atividade'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $atividade = $this->Atividade->newEmptyEntity();

        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            for ($i = 0; $i < count($dados['servico_id']); $i++) {
                $dados['data_atividade'][$i] = date('Y-m-d H:i:s');
                $dados['data_cadastro'][$i] = date('Y-m-d');
                $dados['funcionario'][$i] = 'Cristian';
                $dados['quantidade_folhas'][$i] = 50;
                $dados['quantidade_paginas'][$i] = 50;
                $dados['status_atividade_id'][$i] = 1;

                $atividade = $this->Atividade->patchEntity($atividade, $dados);

                if ($this->Atividade->save($atividade)) {
                    $this->Flash->success(__('The atividade has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The atividade could not be saved. Please, try again.'));
            }
        }

        $servico = $this->Atividade->Servico->find('list', ['keyField' => 'id', 'valueField' => 'nome_servico'])->all();
        $statusAtividade = $this->Atividade->StatusAtividade->find('list', ['keyField' => 'id', 'valueField' => 'status_atual'])->all();

        $this->set(compact('atividade', 'servico', 'statusAtividade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Atividade id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $atividade = $this->Atividade->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $atividade = $this->Atividade->patchEntity($atividade, $this->request->getData());
            if ($this->Atividade->save($atividade)) {
                $this->Flash->success(__('The atividade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atividade could not be saved. Please, try again.'));
        }
        $servico = $this->Atividade->Servico->find('list', ['limit' => 200])->all();
        $statusAtividade = $this->Atividade->StatusAtividade->find('list', ['limit' => 200])->all();
        $this->set(compact('atividade', 'servico', 'statusAtividade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Atividade id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $atividade = $this->Atividade->get($id);
        if ($this->Atividade->delete($atividade)) {
            $this->Flash->success(__('The atividade has been deleted.'));
        } else {
            $this->Flash->error(__('The atividade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function confirmaStatus()
    {
        if ($this->request->is('post')) {
            $selecionados = $this->request->getData('selecionados');
            $servicos = [];
    
            foreach ($selecionados as $id) {
                $query = $this->Atividade->get($id, ['contain' => 'Servico']);
                $servicos[] = $query;
            }
        }

        $this->set(compact('servicos'));
    }

    public function atualizaStatus()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            for ($i = 0; $i < count($dados['servico_id']); $i++) {
                $registro = $this->Atividade->get($dados['servico_id'][$i]);

                if ($dados['impresso'][$i] == 1) {
                    $registro->status_atividade_id = 2;
                } else {
                    $registro->status_atividade_id = 7;
                }
    
                $this->Atividade->save($registro);
            }
    
            $this->Flash->success('Registros atualizados com sucesso.');
            return $this->redirect(['action' => 'index']);
        }
    }
}
