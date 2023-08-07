<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class TriagemController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Triagem.status_atividade_id' => 7],
            'sortableFields' => ['Atividade.data_cadastro'],
            'order' => ['Atividade.data_cadastro' => 'desc']
        ];

        $triagem = $this->paginate($this->Triagem);

        $this->set(compact('triagem'));
    }

    public function edit($id = null)
    {
        $triagem = $this->Triagem->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $triagem = $this->Triagem->patchEntity($triagem, $this->request->getData());
            if ($this->Triagem->save($triagem)) {
                $this->Flash->success(__('The triagem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The triagem could not be saved. Please, try again.'));
        }
        $atividade = $this->Triagem->Atividade->find('list', ['limit' => 200])->all();
        $servico = $this->Triagem->Servico->find('list', ['limit' => 200])->all();
        $statusAtividade = $this->Triagem->StatusAtividade->find('list', ['limit' => 200])->all();
        $this->set(compact('triagem', 'atividade', 'servico', 'statusAtividade'));
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
        $triagem = $this->Triagem->get($id);
        if ($this->Triagem->delete($triagem)) {
            $this->Flash->success(__('Registro excluído com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir registro. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function atualizaTriagem()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData('selecionados');

            for ($i = 0; $i < count($dados); $i++) {
                $registroTriagem = $this->Triagem->get($dados[$i], ['contain' => ['Atividade' => ['Servico']]]);

                $registroTriagem->funcionario = 'CristianTri';
                $registroTriagem->data_triagem = date('Y-m-d H:i:s');
                $registroTriagem->status_atividade_id = 8;  // Triado

                $this->Triagem->save($registroTriagem);

                $this->novaExpedicao($registroTriagem);
            }
    
            $this->Flash->success('Registro(s) lançado(s) com sucesso!');
            return $this->redirect(['action' => 'index']);
        }
    }

    public function novaExpedicao($registroTriagem)
    {
        $expedicaoTable = $this->getTableLocator()->get('Expedicao');
        $expedicao = $expedicaoTable->newEmptyEntity();
                
        $entrega_servico = $registroTriagem->atividade->servico->entrega_servico;

        $nova_expedicao = [
            'funcionario' => 'CristianTri',
            'atividade_id' => $registroTriagem->atividade_id
        ];

        if ($entrega_servico == 'Correios') {
            $nova_expedicao['status_atividade_id'] = 9;  // Aguardando Expedição
        } else {
            $nova_expedicao['status_atividade_id'] = 11;  // Aguardando Liberação
        }

        $expedicao = $expedicaoTable->patchEntity($expedicao, $nova_expedicao);
        $expedicaoTable->save($expedicao);
    }

    // TELA DE SERVIÇOS TRIADOS
    public function servicosTriados()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Triagem.status_atividade_id' => 8],
            'order' => ['data_triagem' => 'desc']
        ];

        $triagem = $this->paginate($this->Triagem);

        $this->set(compact('triagem'));
    }
}
