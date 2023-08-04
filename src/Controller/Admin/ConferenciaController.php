<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class ConferenciaController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Conferencia.status_atividade_id' => 13],
            'sortableFields' => ['Atividade.data_cadastro'],
            'order' => ['Atividade.data_cadastro' => 'desc']
        ];

        $conferencia = $this->paginate($this->Conferencia);

        $this->set(compact('conferencia'));
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
        $conferencia = $this->Conferencia->get($id);
        if ($this->Conferencia->delete($conferencia)) {
            $this->Flash->success(__('Registro excluído com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir registro. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function atualizaConferencia()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData('selecionados');

            for ($i = 0; $i < count($dados); $i++) {
                $registroConferencia = $this->Conferencia->get($dados[$i]);

                $registroConferencia->funcionario = 'CristianConf';
                $registroConferencia->data_conferencia = date('Y-m-d H:i:s');
                $registroConferencia->status_atividade_id = 14;  // Conferido
                
                $this->Conferencia->save($registroConferencia); 

                $this->novoEnvelopamento($registroConferencia);
            }
    
            $this->Flash->success('Registro(s) lançado(s) com sucesso!');

            return $this->redirect(['action' => 'index']);
        }
    }

    public function novoEnvelopamento($registroConferencia)
    {
        $envelopamentoTable = $this->getTableLocator()->get('Envelopamento');
        $envelopamento = $envelopamentoTable->newEmptyEntity();

        $novo_envelopamento = [
            'funcionario' => 'CristianImp',
            'atividade_id' => $registroConferencia->atividade_id,
            'status_atividade_id' => 5  // Aguardando Envelopamento
        ];

        $envelopamento = $envelopamentoTable->patchEntity($envelopamento, $novo_envelopamento);
        $envelopamentoTable->save($envelopamento); 
    }

    // TELA DE SERVIÇOS CONFERIDOS
    public function servicosConferidos()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Conferencia.status_atividade_id' => 14],
            'order' => ['data_conferencia' => 'desc']
        ];
        
        $conferencia = $this->paginate($this->Conferencia);

        $this->set(compact('conferencia'));
    }
}
