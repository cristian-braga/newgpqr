<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class EnvelopamentoController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Envelopamento.status_atividade_id' => 5],
            'sortableFields' => ['Atividade.data_cadastro'],
            'order' => ['Atividade.data_cadastro' => 'desc']
        ];
        
        $envelopamento = $this->paginate($this->Envelopamento);

        $this->set(compact('envelopamento'));
    }

    public function edit($id = null)
    {
        $envelopamento = $this->Envelopamento->get($id, [
            'contain' => ['Atividade' => ['Servico']],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $envelopamento = $this->Envelopamento->patchEntity($envelopamento, $this->request->getData());

            if ($this->Envelopamento->save($envelopamento)) {
                $this->Flash->success(__('Envelopamento editado com sucesso!'));

                return $this->redirect(['action' => 'servicosEnvelopados']);
            }

            $this->Flash->error(__('Falha ao editar envelopamento. Tente novamente.'));
        }

        $this->set(compact('envelopamento'));
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
        $envelopamento = $this->Envelopamento->get($id);
        if ($this->Envelopamento->delete($envelopamento)) {
            $this->Flash->success(__('Registro excluído com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir registro. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function atualizaEnvelopamento()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData('selecionados');

            for ($i = 0; $i < count($dados); $i++) {
                $registroEnvelopamento = $this->Envelopamento->get($dados[$i]);

                $registroEnvelopamento->funcionario = 'CristianEnv';
                $registroEnvelopamento->data_envelopamento = date('Y-m-d H:i:s');
                $registroEnvelopamento->status_atividade_id = 6;  // Envelopado
                
                $this->Envelopamento->save($registroEnvelopamento); 

                $this->novaTriagem($registroEnvelopamento);
            }
    
            $this->Flash->success('Registro(s) lançado(s) com sucesso!');

            return $this->redirect(['action' => 'index']);
        }
    }

    public function novaTriagem($registroEnvelopamento)
    {
        $triagemTable = $this->getTableLocator()->get('Triagem');
        $triagem = $triagemTable->newEmptyEntity();

        $nova_triagem = [
            'funcionario' => 'CristianEnv',
            'atividade_id' => $registroEnvelopamento->atividade_id,
            'status_atividade_id' => 7  // Aguardando Triagem
        ];

        $triagem = $triagemTable->patchEntity($triagem, $nova_triagem);
        $triagemTable->save($triagem); 
    }

    // TELA DE SERVIÇOS ENVELOPADOS
    public function servicosEnvelopados()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Envelopamento.status_atividade_id' => 6],
            'order' => ['data_envelopamento' => 'desc']
        ];
        
        $envelopamento = $this->paginate($this->Envelopamento);

        $this->set(compact('envelopamento'));
    }
}