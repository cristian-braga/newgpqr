<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class ExpedicaoController extends AppController
{
    protected $AtividadeService;

    public function initialize(): void
    {
        parent::initialize();
        $this->AtividadeService = new AtividadeService();
    }

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
            'contain' => ['Atividade' => ['Servico']],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $expedicao = $this->Expedicao->patchEntity($expedicao, $this->request->getData());

            if ($this->Expedicao->save($expedicao)) {
                $this->Flash->success(__('Expedição editada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            
            $this->Flash->error(__('Falha ao editar expedição. Tente novamente.'));
        }

        $this->set(compact('expedicao'));
    }

    public function editAtividade($id = null)
    {
        $atividade = $this->AtividadeService->buscaRegistro($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $dados = $this->request->getData();

            $edicaoSucesso = $this->AtividadeService->edit($id, $dados);

            if ($edicaoSucesso) {
                $this->Flash->success(__('Atividade editada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao editar atividade. Tente novamente.'));
        }

        $servicos = $this->AtividadeService->servicos_opcoes();

        $this->set(compact('atividade', 'servicos'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['get', 'post', 'delete']);
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

    /* Esse método altera os campos 'data_expedicao', 'data_lancamento', 'capas', 'solicitante', 'responsavel_remessa', 'responsavel_expedicao', 'responsavel_coleta',
    'observacao', 'hora' e 'status_atividade_id' para que o serviço seja novamente acessível na index e possa ser refeito */
    public function voltarEtapa($id = null)
    {
        $expedicao = $this->Expedicao->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $dados['data_expedicao'] = null;
            $dados['data_lancamento'] = null;
            $dados['capas'] = null;
            $dados['solicitante'] = null;
            $dados['responsavel_remessa'] = null;
            $dados['responsavel_expedicao'] = null;
            $dados['responsavel_coleta'] = null;
            $dados['observacao'] = null;
            $dados['hora'] = null;

            if ($dados['status_atividade_id'] = 10) {
                $dados['status_atividade_id'] = 9;  // Aguardando Expedição
            } else {
                $dados['status_atividade_id'] = 11;  // Aguardando Liberação
            }

            $expedicao = $this->Expedicao->patchEntity($expedicao, $dados);

            if ($this->Expedicao->save($expedicao)) {
                $this->Flash->success(__('Registro alterado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao alterar registro. Tente novamente.'));
        }
    }
}
