<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class ExpedicaoController extends AppController
{
    protected $AtividadeService;
    protected $AtividadeTable;

    public function initialize(): void
    {
        parent::initialize();
        $this->AtividadeService = new AtividadeService();
        $this->AtividadeTable = $this->getTableLocator()->get('Atividade');
    }
    
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => ['Servico', 'StatusAtividade'],
            'conditions' => ['status_atividade_id' => 9],
            'order' => ['data_cadastro' => 'desc']
        ];

        $atividade = $this->paginate($this->AtividadeTable);

        $this->set(compact('atividade'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            $servico_ids = $dados['servico_id'];
            $capas = $dados['capas'];
            $solicitantes = $dados['solicitante'];
            $responsaveis_remessas = $dados['responsavel_remessa'];
            $observacoes = $dados['observacao'];

            $expedicoes = [];

            for ($i = 0; $i < count($servico_ids); $i++) {
                $atividade = $this->AtividadeService->buscaRegistro($servico_ids[$i]);

                $status_atual = $atividade->status_atividade_id;

                if ($status_atual == 9) {
                    $status = 10;  // Expedido
                } else {
                    $status = 12;  // Liberado
                }

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
                    'hora' => $dados['hora'],
                    'atividade_id' => $servico_ids[$i],
                    'status_atividade_id' => $status
                ];

                $existe_registro = $this->Expedicao->existeDado($servico_ids[$i]);

                if (!$existe_registro) {
                    $expedicao = $this->Expedicao->newEmptyEntity();
                    $expedicao = $this->Expedicao->patchEntity($expedicao, $dados_expedicao);
                } else {
                    $expedicao = $this->Expedicao->patchEntity($existe_registro, $dados_expedicao);
                }

                $expedicoes[] = $expedicao;

                $this->AtividadeService->atualizaStatus($servico_ids[$i], $status);
            }

            if ($this->Expedicao->saveMany($expedicoes)) {
                $this->Flash->success(__('Registro(s) lançado(s) com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao lançar registro(s). Tente novamente.'));
        }
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

    public function confirmaExpedicao()
    {
        if ($this->request->is('post')) {
            $selecionados = $this->request->getData('selecionados');
            $servicos = [];
    
            foreach ($selecionados as $id) {
                $query = $this->AtividadeTable->get($id, [
                    'contain' => ['Servico', 'StatusAtividade']
                ]);

                $servicos[] = $query;
            }
        }

        $this->set(compact('servicos'));
    }

    // TELA DE SERVIÇOS AGUARDANDO LIBERAÇÃO
    public function aguardandoLiberacao()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => ['Servico', 'StatusAtividade'],
            'conditions' => ['status_atividade_id' => 11],
            'order' => ['data_cadastro' => 'desc']
        ];

        $atividade = $this->paginate($this->AtividadeTable);

        $this->set(compact('atividade'));
    }

    // TELA DE SERVIÇOS EXPEDIDOS
    public function servicosExpedidos()
    {
        $data_inicio = $this->request->getQuery('data_inicio');
        $data_fim = $this->request->getQuery('data_fim');
        $servico = $this->request->getQuery('servico');

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

        $query = $this->Expedicao->find();

        if (isset($data_inicio) && $data_inicio != '') {
            $query->where([
                'Expedicao.data_expedicao >=' => $data_inicio
            ]);
        }

        if (isset($data_fim) && $data_fim != '') {
            $query->where([
                'Expedicao.data_expedicao <=' => $data_fim
            ]);
        }

        if (isset($servico) && $servico != '') {
            $query->where([
                'Servico.id =' => $servico
            ]);
        }

        $servicos = $this->Expedicao->servicos()->toArray();
        
        $expedicao = $this->paginate($query);

        $this->set(compact('expedicao', 'servicos'));
    }

    /* Esse método altera o campo 'status_atividade_id' na tabela 'atividade' para que o serviço seja
    novamente acessível na index e possa ser refeito */
    public function voltarEtapa($atividade_id)
    {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $atividade = $this->AtividadeService->buscaRegistro($atividade_id);

            $status_atual = $atividade->status_atividade_id;

            if ($status_atual == 10) {
                $status = 9;  // Aguardando Expedição
            } else {
                $status = 11;  // Aguardando Liberação
            }

            $sucesso = $this->AtividadeService->atualizaStatus($atividade_id, $status);

            if ($sucesso) {
                $expedicao = $this->Expedicao->existeDado($atividade_id);

                $this->Expedicao->delete($expedicao);

                $this->Flash->success(__('Registro alterado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao alterar registro. Tente novamente.'));
        }
    }
}
