<?php
declare(strict_types=1);

namespace App\Controller;

class ExpedicaoController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Expedicao.status_atividade_id' => 9],
            'sortableFields' => ['Atividade.data_cadastro'],
            'order' => ['Atividade.data_cadastro' => 'desc']
        ];
        
        $expedicao = $this->paginate($this->Expedicao);

        $this->set(compact('expedicao'));
    }

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
        $servico = $this->Expedicao->Atividade->Servico->find('list', ['limit' => 200])->all();
        $statusAtividade = $this->Expedicao->StatusAtividade->find('list', ['limit' => 200])->all();
        $this->set(compact('expedicao', 'atividade', 'servico', 'statusAtividade'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $expedicao = $this->Expedicao->get($id);
        if ($this->Expedicao->delete($expedicao)) {
            $this->Flash->success(__('Registro excluído com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir registro. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function confirmaExpedicao()
    {
        if ($this->request->is('post')) {
            $selecionados = $this->request->getData('selecionados');
            $servicos = [];
    
            foreach ($selecionados as $id) {
                $query = $this->Expedicao->get($id, ['contain' => ['Atividade' => ['Servico']]]);

                $servicos[] = $query;
            }
        }

        $this->set(compact('servicos'));
    }

    public function atualizaExpedicao()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            $expedicao_ids = $dados['expedicao_id'];
            $capas = $dados['capas'];
            $solicitantes = $dados['solicitante'];
            $responsaveis_remessas = $dados['responsavel_remessa'];
            $observacoes = $dados['observacao'];

            $expedicoes = [];

            for ($i = 0; $i < count($expedicao_ids); $i++) {
                $expedicao = $this->Expedicao->get($expedicao_ids[$i], ['contain' => ['Atividade' => ['Servico']]]);

                $entrega_servico = $expedicao->atividade->servico->entrega_servico;

                $dados_expedicao = [
                    'funcionario' => 'CristianExp',
                    'data_lancamento' => date('Y-m-d H:i:s'),
                    'data_expedicao' => $dados['data_expedicao'],
                    'capas' => $capas[$i],
                    'solicitante' => $solicitantes[$i],
                    'responsavel_remessa' => $responsaveis_remessas[$i],
                    'responsavel_expedicao' => 'CristianExp',
                    'responsavel_coleta' => $dados['responsavel_coleta'],
                    'observacao' => $observacoes[$i],
                    'hora' => $dados['hora']
                ];

                if ($entrega_servico == 'Correios') {
                    $dados_expedicao['status_atividade_id'] = 10;  // Expedido
                } else {
                    $dados_expedicao['status_atividade_id'] = 12;  // Liberado
                }

                $expedicao = $this->Expedicao->patchEntity($expedicao, $dados_expedicao);

                $expedicoes[] = $expedicao;
            }

            if ($this->Expedicao->saveMany($expedicoes)) {
                $this->Flash->success(__('Registro(s) lançado(s) com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao lançar registro(s). Tente novamente.'));
        }
    }

    // TELA DE SERVIÇOS AGUARDANDO LIBERAÇÃO
    public function aguardandoLiberacao()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Expedicao.status_atividade_id' => 11],
            'sortableFields' => ['Atividade.data_cadastro'],
            'order' => ['Atividade.data_cadastro' => 'desc']
        ];
        
        $expedicao = $this->paginate($this->Expedicao);

        $this->set(compact('expedicao'));
    }

    // TELA DE SERVIÇOS EXPEDIDOS
    public function servicosExpedidos()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => [
                'Expedicao.status_atividade_id IN' => [10, 12]
            ],
            'order' => ['data_expedicao' => 'desc']
        ];
        
        $expedicao = $this->paginate($this->Expedicao);

        $this->set(compact('expedicao'));
    }
}
