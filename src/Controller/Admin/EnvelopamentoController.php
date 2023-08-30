<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class EnvelopamentoController extends AppController
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
            'conditions' => ['status_atividade_id' => 5],
            'order' => ['data_cadastro' => 'desc']
        ];

        $atividade = $this->paginate($this->AtividadeTable);

        $this->set(compact('atividade'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData('selecionados');

            $envelopamentos = [];

            for ($i = 0; $i < count($dados); $i++) {
                $novo_envelopamento = [
                    'funcionario' => 'CristianEnv',
                    'data_envelopamento' => date('Y-m-d H:i:s'),
                    'data_cadastro' => date('Y-m-d'),
                    'atividade_id' => $dados[$i],
                    'status_atividade_id' => 6  // Envelopado
                ];

                $existe_registro = $this->Envelopamento->existeDado($dados[$i]);

                if (!$existe_registro) {
                    $envelopamento = $this->Envelopamento->newEmptyEntity();
                    $envelopamento = $this->Envelopamento->patchEntity($envelopamento, $novo_envelopamento);
                } else {
                    $envelopamento = $this->Envelopamento->patchEntity($existe_registro, $novo_envelopamento);
                }
                
                $envelopamentos[] = $envelopamento;

                $this->AtividadeService->atualizaStatus($dados[$i], 7);  // Aguardando Triagem
            }

            if ($this->Envelopamento->saveMany($envelopamentos)) {
                $this->Flash->success(__('Registro(s) lançado(s) com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao lançar registro(s). Tente novamente.'));
        }
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

    /* Esse método altera o campo 'status_atividade_id' na tabela 'atividade' para que o serviço seja
    novamente acessível na index e possa ser refeito */
    public function voltarEtapa($atividade_id)
    {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sucesso = $this->AtividadeService->atualizaStatus($atividade_id, 5);  // Aguardando Envelopamento

            if ($sucesso) {
                $envelopamento = $this->Envelopamento->existeDado($atividade_id);

                $this->Envelopamento->delete($envelopamento);

                $this->Flash->success(__('Registro alterado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao alterar registro. Tente novamente.'));
        }
    }
}
