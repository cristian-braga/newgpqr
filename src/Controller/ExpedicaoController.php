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
            'order' => ['data_cadastro' => 'desc']
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
                $query = $this->Expedicao->get($id, [
                    'contain' => ['Atividade' => ['Servico']]
                ]);

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
            $datas_expedicoes = $dados['data_expedicao'];
            $horas = $dados['hora'];
            $responsaveis_coletas = $dados['responsavel_coleta'];

            $expedicoes = [];

            for ($i = 0; $i < count($expedicao_ids); $i++) {
                $expedicao = $this->Expedicao->get($expedicao_ids[$i], ['contain' => ['Atividade']]);

                $dados_expedicao = [
                    'capas' => $capas[$i],
                    'solicitante' => $solicitantes[$i],
                    'responsavel_remessa' => $responsaveis_remessas[$i],
                    'data_expedicao' => $datas_expedicoes[$i],
                    'hora' => $horas[$i],
                    'responsavel_coleta' => $responsaveis_coletas[$i],
                    'ocorrencia' => $expedicao->atividade->remessa_atividade,
                    'data_lancamento' => date('Y-m-d H:i:s'),
                    'responsavel_expedicao' => 'CristianExp',
                    'funcionario' => 'CristianExp',
                    'status_atividade_id' => 10
                ];

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

    // TELA DE SERVIÇOS EXPEDIDOS
    public function servicosExpedidos()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Expedicao.status_atividade_id' => 10],
            'order' => ['data_expedicao' => 'desc']
        ];
        
        $expedicao = $this->paginate($this->Expedicao);

        $this->set(compact('expedicao'));
    }
}
