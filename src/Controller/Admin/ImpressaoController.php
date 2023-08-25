<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class ImpressaoController extends AppController
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
            'conditions' => ['status_atividade_id' => 3],
            'order' => ['data_cadastro' => 'desc']
        ];

        $atividade = $this->paginate($this->AtividadeTable);

        // -------------------------------- BALANÇO DAS IMPRESSORAS ----------------------------------
        // Método na ImpressaoTable dos valores para o cálculo do balanceamento
        $balanco_mensal = $this->Impressao->dadosImpressoras()->toArray();

        $nuv_1['nome'] = 'Nuvera 1 - Z8PB';
        if (isset($balanco_mensal[0])) {
            $nuv_1['total_mes'] = $balanco_mensal[0]->total_paginas + $balanco_mensal[0]->total_recibo + $balanco_mensal[0]->total_folha_rosto;
        } else {
            $nuv_1['total_mes'] = 0;
        }

        $nuv_2['nome'] = 'Nuvera 2 - Z7PK';
        if (isset($balanco_mensal[1])) {
            $nuv_2['total_mes'] = $balanco_mensal[1]->total_paginas + $balanco_mensal[1]->total_recibo + $balanco_mensal[1]->total_folha_rosto;
        } else {
            $nuv_2['total_mes'] = 0;
        }

        $total = $nuv_1['total_mes'] + $nuv_2['total_mes'];

        if ($total != 0) {
            $nuv_1['participacao'] = round(($nuv_1['total_mes'] / $total) * 100);
            $nuv_2['participacao'] = round(($nuv_2['total_mes'] / $total) * 100);
        } else {
            $nuv_1['participacao'] = 0;
            $nuv_2['participacao'] = 0;
        }
        // ------------------------------------------------------------------------------------------

        // Método na ImpressaoTable dos valores para o ranking
        $ranking_mensal = $this->Impressao->dadosImpressoes()->toArray();

        $this->set(compact('atividade', 'balanco_mensal', 'nuv_1', 'nuv_2', 'ranking_mensal'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            $servico_ids = $dados['servico_id'];
            $impressoras = $dados['impressora'];

            $impressoes = [];

            for ($i = 0; $i < count($servico_ids); $i++) {
                $nova_impressao = [
                    'funcionario' => 'CristianImp',
                    'data_impressao' => date('Y-m-d H:i:s'),
                    'atividade_id' => $servico_ids[$i],
                    'status_atividade_id' => 4,  // Impresso
                    'impressora_id' => $impressoras[$i]
                ];

                $existe_registro = $this->Impressao->existeDado($servico_ids[$i]);

                if (!$existe_registro) {
                    $impressao = $this->Impressao->newEmptyEntity();
                    $impressao = $this->Impressao->patchEntity($impressao, $nova_impressao);
                } else {
                    $impressao = $this->Impressao->patchEntity($existe_registro, $nova_impressao);
                }

                $impressoes[] = $impressao;

                $this->AtividadeService->atualizaStatus($servico_ids[$i], 13);  // Aguardando Conferência
            }

            if ($this->Impressao->saveMany($impressoes)) {
                $this->Flash->success(__('Registro(s) lançado(s) com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao lançar registro(s). Tente novamente.'));
        }
    }

    public function edit($id = null)
    {
        $impressao = $this->Impressao->get($id, [
            'contain' => ['Atividade' => ['Servico']],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $impressao = $this->Impressao->patchEntity($impressao, $this->request->getData());

            if ($this->Impressao->save($impressao)) {
                $this->Flash->success(__('Impressão editada com sucesso!'));

                return $this->redirect(['action' => 'servicosImpressos']);
            }

            $this->Flash->error(__('Falha ao editar impressão. Tente novamente.'));
        }

        $impressora = $this->Impressao->Impressora
            ->find('list', ['keyField' => 'id', 'valueField' => 'nome_impressora'])
            ->where(['id IN' => [1, 2, 3]])
            ->all();

        $this->set(compact('impressao', 'impressora'));
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

    public function selecionaImpressora()
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

        $impressoras = $this->Impressao->Impressora
            ->find('list', ['keyField' => 'id', 'valueField' => 'nome_impressora'])
            ->where(['id IN' => [1, 2, 3]])
            ->all();

        $this->set(compact('servicos', 'impressoras'));
    }

    // TELA DE SERVIÇOS IMPRESSOS
    public function servicosImpressos()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade',
                'Impressora'
            ],
            'conditions' => ['Impressao.status_atividade_id' => 4],
            'order' => ['data_impressao' => 'desc']
        ];

        $impressao = $this->paginate($this->Impressao);

        $this->set(compact('impressao'));
    }

    /* Esse método altera o campo 'status_atividade_id' na tabela 'atividade' para que o serviço seja
    novamente acessível na index e possa ser refeito */
    public function voltarEtapa($atividade_id)
    {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sucesso = $this->AtividadeService->atualizaStatus($atividade_id, 3);  // Aguardando Impressão

            if ($sucesso) {
                $impressao = $this->Impressao->existeDado($atividade_id);

                $this->Impressao->delete($impressao);

                $this->Flash->success(__('Registro alterado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao alterar registro. Tente novamente.'));
        }
    }
}
