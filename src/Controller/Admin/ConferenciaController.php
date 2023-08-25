<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class ConferenciaController extends AppController
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
            'conditions' => ['status_atividade_id' => 13],
            'order' => ['data_cadastro' => 'desc']
        ];

        $atividade = $this->paginate($this->AtividadeTable);

        $this->set(compact('atividade'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData('selecionados');

            $conferencias = [];

            for ($i = 0; $i < count($dados); $i++) {
                $nova_conferencia = [
                    'funcionario' => 'CristianConf',
                    'data_conferencia' => date('Y-m-d H:i:s'),
                    'atividade_id' => $dados[$i],
                    'status_atividade_id' => 14  // Conferido
                ];

                $existe_registro = $this->Conferencia->existeDado($dados[$i]);

                if (!$existe_registro) {
                    $conferencia = $this->Conferencia->newEmptyEntity();
                    $conferencia = $this->Conferencia->patchEntity($conferencia, $nova_conferencia);
                } else {
                    $conferencia = $this->Conferencia->patchEntity($existe_registro, $nova_conferencia);
                }
                
                $conferencias[] = $conferencia;

                // Busca o campo 'envelopamento_servico' do registro na tabela 'atividade' antes de atualizar o 'status_atividade_id'
                $atividade = $this->AtividadeService->buscaRegistro($dados[$i]);

                $tipo_env = $atividade->servico->envelopamento_servico;

                if ($tipo_env == 'A4' || $tipo_env == 'A5') {
                    $status = 5;  // Aguardando Envelopamento
                } else {
                    $status = 7;  // Aguardando Triagem
                }

                $this->AtividadeService->atualizaStatus($dados[$i], $status);
            }

            if ($this->Conferencia->saveMany($conferencias)) {
                $this->Flash->success(__('Registro(s) lançado(s) com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao lançar registro(s). Tente novamente.'));
        }
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

    /* Esse método altera o campo 'status_atividade_id' na tabela 'atividade' para que o serviço seja
    novamente acessível na index e possa ser refeito */
    public function voltarEtapa($atividade_id)
    {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sucesso = $this->AtividadeService->atualizaStatus($atividade_id, 13);  // Aguardando Conferência

            if ($sucesso) {
                $conferencia = $this->Conferencia->existeDado($atividade_id);

                $this->Conferencia->delete($conferencia);

                $this->Flash->success(__('Registro alterado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao alterar registro. Tente novamente.'));
        }
    }
}
