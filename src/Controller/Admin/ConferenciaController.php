<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class ConferenciaController extends AppController
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
            'conditions' => ['Conferencia.status_atividade_id' => 13],
            'sortableFields' => ['Atividade.data_cadastro'],
            'order' => ['Atividade.data_cadastro' => 'desc']
        ];

        $conferencia = $this->paginate($this->Conferencia);

        $this->set(compact('conferencia'));
    }

    public function edit($id = null)
    {
        $conferencia = $this->Conferencia->get($id, [
            'contain' => ['Atividade' => ['Servico']],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $conferencia = $this->Conferencia->patchEntity($conferencia, $this->request->getData());

            if ($this->Conferencia->save($conferencia)) {
                $this->Flash->success(__('Conferência editada com sucesso!'));

                return $this->redirect(['action' => 'servicosConferidos']);
            }

            $this->Flash->error(__('Falha ao editar conferência. Tente novamente.'));
        }

        $this->set(compact('conferencia'));
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
                $registroConferencia = $this->Conferencia->get($dados[$i], [
                    'contain' => ['Atividade' => ['Servico']],
                ]);

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
        $tipo_env = $registroConferencia->atividade->servico->envelopamento_servico;

        if ($tipo_env == 'A4' || $tipo_env == 'A5') {
            $envelopamentoTable = $this->getTableLocator()->get('Envelopamento');
            $envelopamento = $envelopamentoTable->newEmptyEntity();
    
            $novo_envelopamento = [
                'funcionario' => 'CristianImp',
                'atividade_id' => $registroConferencia->atividade_id,
                'status_atividade_id' => 5  // Aguardando Envelopamento
            ];
    
            $envelopamento = $envelopamentoTable->patchEntity($envelopamento, $novo_envelopamento);
            $envelopamentoTable->save($envelopamento); 
        } else {
            $triagemTable = $this->getTableLocator()->get('Triagem');
            $triagem = $triagemTable->newEmptyEntity();

            $nova_triagem = [
                'funcionario' => 'Cristian',
                'atividade_id' => $registroConferencia->atividade_id,
                'status_atividade_id' => 7  // Aguardando Triagem
            ];

            $triagem = $triagemTable->patchEntity($triagem, $nova_triagem);
            $triagemTable->save($triagem);
        }
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

    /* Esse método altera os campos 'data_conferencia' e 'status_atividade_id' para que o serviço seja
    novamente acessível na index e possa ser refeito */
    public function voltarEtapa($id = null)
    {
        $conferencia = $this->Conferencia->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $dados['data_conferencia'] = null;
            $dados['status_atividade_id'] = 13;  // Aguardando Conferência

            $conferencia = $this->Conferencia->patchEntity($conferencia, $dados);

            if ($this->Conferencia->save($conferencia)) {
                $this->Flash->success(__('Registro alterado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao alterar registro. Tente novamente.'));
        }
    }
}
