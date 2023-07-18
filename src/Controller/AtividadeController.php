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
            'contain' => ['Servico', 'StatusAtividade'],
            'conditions' => ['status_atividade_id' => 1],
            'order' => ['data_cadastro' => 'desc']
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

            $jobs = $dados['job'];
            $datas = $dados['data_postagem'];
            $remessas = $dados['remessa_atividade'];
            $documentos = $dados['quantidade_documentos'];
            $recibos = $dados['recibo_postagem'];
            $servico_ids = $dados['servico_id'];

            $atividades = [];

            for ($i = 0; $i < count($servico_ids); $i++) {
                $atividade = $this->Atividade->newEmptyEntity();

                $nova_atividade = [
                    'job' => $jobs[$i],
                    'data_atividade' => date('Y-m-d H:i:s'),
                    'data_postagem' => $datas[$i],
                    'data_cadastro' => date('Y-m-d'),
                    'funcionario' => 'Cristian',
                    'remessa_atividade' => $remessas[$i],
                    'quantidade_documentos' => $documentos[$i],
                    'quantidade_folhas' => 50,
                    'quantidade_paginas' => 50,
                    'recibo_postagem' => $recibos[$i],
                    'servico_id' => $servico_ids[$i],
                    'status_atividade_id' => 1
                ];

                $atividade = $this->Atividade->patchEntity($atividade, $nova_atividade);

                $atividades[] = $atividade;
            }

            if ($this->Atividade->saveMany($atividades)) {
                $this->Flash->success(__('Atividade cadastrada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao cadastrar atividade. Tente novamente.'));
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
                $this->Flash->success(__('Atividade editada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao editar atividade. Tente novamente.'));
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
        $this->request->allowMethod(['get', 'post', 'delete']);
        $atividade = $this->Atividade->get($id);
        if ($this->Atividade->delete($atividade)) {
            $this->Flash->success(__('Atividade excluída com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir atividade. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function calculaFolhas($documentos) {

    }

    public function calculaPaginas($folhas) {
        
    }

    public function confirmaAtividade()
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

    public function atualizaAtividade()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            for ($i = 0; $i < count($dados['servico_id']); $i++) {
                $registroAtividade = $this->Atividade->get($dados['servico_id'][$i]);

                $registroAtividade->status_atividade_id = 2;

                $this->Atividade->save($registroAtividade);

                $this->salvaOutraTabela($dados['impresso'][$i], $registroAtividade);               
            }
    
            $this->Flash->success('Atividade lançada com sucesso!');
            return $this->redirect(['action' => 'index']);
        }
    }

    public function salvaOutraTabela($dados_impresso, $registroAtividade)
    {
        if ($dados_impresso == 1) {
            $impressaoTable = $this->getTableLocator()->get('Impressao');
            $impressao = $impressaoTable->newEmptyEntity();

            $nova_impressao = [
                'funcionario' => 'Cristian',
                'atividade_id' => $registroAtividade->id,
                'servico_id' => $registroAtividade->servico_id,
                'status_atividade_id' => 3,
                'impressora_id' => 5
            ];

            $impressao = $impressaoTable->patchEntity($impressao, $nova_impressao);
            $impressaoTable->save($impressao);
        } else {
            $triagemTable = $this->getTableLocator()->get('Triagem');
            $triagem = $triagemTable->newEmptyEntity();

            $nova_triagem = [
                'funcionario' => 'Cristian',
                'atividade_id' => $registroAtividade->id,
                'servico_id' => $registroAtividade->servico_id,
                'status_atividade_id' => 7
            ];

            $triagem = $triagemTable->patchEntity($triagem, $nova_triagem);
            $triagemTable->save($triagem);
        } 
    }
}
