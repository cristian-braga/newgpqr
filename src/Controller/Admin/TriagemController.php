<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class TriagemController extends AppController
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
            'conditions' => ['status_atividade_id' => 7],
            'order' => ['data_cadastro' => 'desc']
        ];

        $atividade = $this->paginate($this->AtividadeTable);

        $this->set(compact('atividade'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData('selecionados');

            $triagens = [];

            for ($i = 0; $i < count($dados); $i++) {
                $nova_triagem = [
                    'funcionario' => 'CristianTri',
                    'data_triagem' => date('Y-m-d H:i:s'),
                    'data_cadastro' => date('Y-m-d'),
                    'atividade_id' => $dados[$i],
                    'status_atividade_id' => 8  // Triado
                ];

                $existe_registro = $this->Triagem->existeDado($dados[$i]);

                if (!$existe_registro) {
                    $triagem = $this->Triagem->newEmptyEntity();
                    $triagem = $this->Triagem->patchEntity($triagem, $nova_triagem);
                } else {
                    $triagem = $this->Triagem->patchEntity($existe_registro, $nova_triagem);
                }
                
                $triagens[] = $triagem;

                // Busca o campo 'entrega_servico' do registro na tabela 'atividade' antes de atualizar o 'status_atividade_id'
                $atividade = $this->AtividadeService->buscaRegistro($dados[$i]);

                $entrega_servico = $atividade->servico->entrega_servico;

                if ($entrega_servico == 'Correios') {
                    $status = 9;  // Aguardando Expedição
                } else {
                    $status = 11;  // Aguardando Liberação
                }

                $this->AtividadeService->atualizaStatus($dados[$i], $status);
            }

            if ($this->Triagem->saveMany($triagens)) {
                $this->Flash->success(__('Registro(s) lançado(s) com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao lançar registro(s). Tente novamente.'));
        }
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

    // TELA DE SERVIÇOS TRIADOS
    public function servicosTriados()
    {
        $data_inicio = $this->request->getQuery('data_inicio');
        $data_fim = $this->request->getQuery('data_fim');
        $servico = $this->request->getQuery('servico');

        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Triagem.status_atividade_id' => 8],
            'order' => ['data_triagem' => 'desc']
        ];

        $query = $this->Triagem->find();

        if (isset($data_inicio) && $data_inicio != '') {
            $query->where([
                'Triagem.data_cadastro >=' => $data_inicio
            ]);
        }

        if (isset($data_fim) && $data_fim != '') {
            $query->where([
                'Triagem.data_cadastro <=' => $data_fim
            ]);
        }

        if (isset($servico) && $servico != '') {
            $query->where([
                'Servico.id =' => $servico
            ]);
        }

        $servicos = $this->Triagem->servicos()->toArray();

        $triagem = $this->paginate($query);

        $this->set(compact('triagem', 'servicos'));
    }

    /* Esse método altera o campo 'status_atividade_id' na tabela 'atividade' para que o serviço seja
    novamente acessível na index e possa ser refeito */
    public function voltarEtapa($atividade_id)
    {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sucesso = $this->AtividadeService->atualizaStatus($atividade_id, 7);  // Aguardando Triagem

            if ($sucesso) {
                $triagem = $this->Triagem->existeDado($atividade_id);

                $this->Triagem->delete($triagem);

                $this->Flash->success(__('Registro alterado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao alterar registro. Tente novamente.'));
        }
    }
}
