<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class ImpressaoController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Impressao.status_atividade_id' => 3],
            'sortableFields' => ['Atividade.data_cadastro'],
            'order' => ['Atividade.data_cadastro' => 'desc']
        ];

        $impressao = $this->paginate($this->Impressao);

        // -------------------------------- BALANÇO DAS IMPRESSORAS ----------------------------------
        // Consulta na ImpressaoTable dos valores para o cálculo do balanceamento
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

        // Consulta na ImpressaoTable dos valores para o ranking
        $ranking_mensal = $this->Impressao->dadosImpressoes()->toArray();

        $this->set(compact('impressao', 'balanco_mensal', 'nuv_1', 'nuv_2', 'ranking_mensal'));
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
        $atividadeController = new AtividadeController();
        $atividadeTable = $this->getTableLocator()->get('Atividade');
        $atividade = $atividadeTable->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $dados = $this->request->getData();

            $folhas_paginas = $atividadeController->calculaFolhasPaginas($dados['servico_id'], intval($dados['quantidade_documentos']));

            $dados['quantidade_folhas'] = $folhas_paginas['folhas'];
            $dados['quantidade_paginas'] = $folhas_paginas['paginas'];

            $atividade = $atividadeTable->patchEntity($atividade, $dados);

            if ($atividadeTable->save($atividade)) {
                $this->Flash->success(__('Atividade editada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            
            $this->Flash->error(__('Falha ao editar atividade. Tente novamente.'));
        }

        $servico = $atividadeTable->Servico
            ->find('list', ['keyField' => 'id', 'valueField' => 'nome_servico'])
            ->where(['ativo' => 'Sim'])
            ->order(['nome_servico' => 'asc'])
            ->all();

        $this->set(compact('atividade', 'servico'));
    }

    public function selecionaImpressora()
    {
        if ($this->request->is('post')) {
            $selecionados = $this->request->getData('selecionados');
            $servicos = [];
    
            foreach ($selecionados as $id) {
                $query = $this->Impressao->get($id, [
                    'contain' => ['Atividade' => ['Servico'], 'StatusAtividade', 'Impressora']
                ]);

                $servicos[] = $query;
            }
        }

        $impressora = $this->Impressao->Impressora
            ->find('list', ['keyField' => 'id', 'valueField' => 'nome_impressora'])
            ->where(['id IN' => [1, 2, 3]])
            ->all();

        $this->set(compact('servicos', 'impressora'));
    }

    public function atualizaImpressao()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            for ($i = 0; $i < count($dados['servico_id']); $i++) {
                $registroImpressao = $this->Impressao->get($dados['servico_id'][$i]);

                $registroImpressao->funcionario = 'CristianImp';
                $registroImpressao->data_impressao = date('Y-m-d H:i:s');
                $registroImpressao->status_atividade_id = 4;  // Impresso
                $registroImpressao->impressora_id = $dados['impressora'][$i];
                
                $this->Impressao->save($registroImpressao);

                $this->novaConferencia($registroImpressao); 
            }
    
            $this->Flash->success('Registro(s) lançado(s) com sucesso!');

            return $this->redirect(['action' => 'index']);
        }
    }

    public function novaConferencia($registroImpressao)
    {
        $conferenciaTable = $this->getTableLocator()->get('Conferencia');
        $conferencia = $conferenciaTable->newEmptyEntity();

        $nova_conferencia = [
            'funcionario' => 'CristianImp',
            'atividade_id' => $registroImpressao->atividade_id,
            'status_atividade_id' => 13  // Aguardando Conferência
        ];

        $conferencia = $conferenciaTable->patchEntity($conferencia, $nova_conferencia);
        $conferenciaTable->save($conferencia); 
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

    /* Esse método altera os campos 'data_impressao', 'status_atividade_id', 'impressora_id' para que o serviço seja
    novamente acessível na index e possa ser refeito */
    public function voltarEtapa($id = null)
    {
        $impressao = $this->Impressao->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $dados['data_impressao'] = NULL;
            $dados['status_atividade_id'] = 3;  // Aguardando Impressão
            $dados['impressora_id'] = 5;  // Não Impresso

            $impressao = $this->Impressao->patchEntity($impressao, $dados);

            if ($this->Impressao->save($impressao)) {
                $this->Flash->success(__('Registro alterado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao alterar registro. Tente novamente.'));
        }
    }
}
