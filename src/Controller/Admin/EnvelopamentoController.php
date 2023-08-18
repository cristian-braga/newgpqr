<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class EnvelopamentoController extends AppController
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

    /* Esse método altera os campos 'data_envelopamento' e 'status_atividade_id' para que o serviço seja
    novamente acessível na index e possa ser refeito */
    public function voltarEtapa($id = null)
    {
        $envelopamento = $this->Envelopamento->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $dados['data_envelopamento'] = null;
            $dados['status_atividade_id'] = 5;  // Aguardando Envelopamento

            $envelopamento = $this->Envelopamento->patchEntity($envelopamento, $dados);

            if ($this->Envelopamento->save($envelopamento)) {
                $this->Flash->success(__('Registro alterado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao alterar registro. Tente novamente.'));
        }
    }
}
