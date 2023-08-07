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

        // CONSULTA NA ImpressaoTable DOS VALORES PARA O CÁLCULO DO BALANCEAMENTO DAS IMPRESSORAS
        $balanco = $this->Impressao->dadosImpressoras()->toArray();

        $nuv_1['nome'] = $balanco[0]->nome_impressora;
        $nuv_1['total'] = $balanco[0]->total_paginas + $balanco[0]->total_recibo + $balanco[0]->total_folha_rosto;

        $nuv_2['nome'] = $balanco[1]->nome_impressora;
        $nuv_2['total'] = $balanco[1]->total_paginas + $balanco[1]->total_recibo + $balanco[1]->total_folha_rosto;

        $this->set(compact('impressao', 'nuv_1', 'nuv_2'));
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

    public function delete($id = null)
    {
        $this->request->allowMethod(['get', 'post', 'delete']);
        $impressao = $this->Impressao->get($id);
        
        if ($this->Impressao->delete($impressao)) {
            $this->Flash->success(__('Registro excluído com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir registro. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
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
}
