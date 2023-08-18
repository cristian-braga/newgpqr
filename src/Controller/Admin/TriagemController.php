<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class TriagemController extends AppController
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
            'contain' => ['Atividade' => ['Servico']],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $triagem = $this->Triagem->patchEntity($triagem, $this->request->getData());

            if ($this->Triagem->save($triagem)) {
                $this->Flash->success(__('Triagem editada com sucesso!'));

                return $this->redirect(['action' => 'servicosTriados']);
            }

            $this->Flash->error(__('Falha ao editar triagem. Tente novamente.'));
        }

        $this->set(compact('triagem'));
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

    /* Esse método altera os campos 'data_triagem' e 'status_atividade_id' para que o serviço seja
    novamente acessível na index e possa ser refeito */
    public function voltarEtapa($id = null)
    {
        $triagem = $this->Triagem->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $dados['data_triagem'] = null;
            $dados['status_atividade_id'] = 7;  // Aguardando Triagem

            $triagem = $this->Triagem->patchEntity($triagem, $dados);

            if ($this->Triagem->save($triagem)) {
                $this->Flash->success(__('Registro alterado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao alterar registro. Tente novamente.'));
        }
    }
}
