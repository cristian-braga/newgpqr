<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\DigitalizacaoService;

class DigitLancamentoController extends AppController
{
    protected $DigitalizacaoService;
    protected $DigitalizacaoTable;

    public function initialize(): void
    {
        parent::initialize();
        $this->DigitalizacaoService = new DigitalizacaoService();
        $this->DigitalizacaoTable = $this->getTableLocator()->get('Digitalizacao');
    }
    
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => ['Servico'],
            'conditions' => ['status_digitalizacao' => 'Aguardando Lançamento'],
            'order' => ['data_cadastro' => 'desc']
        ];

        $digitalizacao = $this->paginate($this->DigitalizacaoTable);

        $this->set(compact('digitalizacao'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData('selecionados');

            $digitalizacoes = [];

            for ($i = 0; $i < count($dados); $i++) {
                $nova_digitLancamento = [
                    'funcionario' => 'FuncionarioLançam',
                    'data_lancamento' => date('Y-m-d H:i:s'),
                    'data_cadastro' => date('Y-m-d'),
                    'status_digitalizacao' => 'Lançado',
                    'digitalizacao_id' => $dados[$i]
                ];

                $existe_registro = $this->DigitLancamento->existeDado($dados[$i]);

                if (!$existe_registro) {
                    $digitLancamento = $this->DigitLancamento->newEmptyEntity();
                    $digitLancamento = $this->DigitLancamento->patchEntity($digitLancamento, $nova_digitLancamento);
                } else {
                    $digitLancamento = $this->DigitLancamento->patchEntity($existe_registro, $nova_digitLancamento);
                }
                
                $digitalizacoes[] = $digitLancamento;

                $this->DigitalizacaoService->atualizaStatus($dados[$i], 'Aguardando Conferência');
            }

            if ($this->DigitLancamento->saveMany($digitalizacoes)) {
                $this->Flash->success(__('Serviço(s) lançado(s) com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao lançar serviço(s). Tente novamente.'));
        }
    }

    public function edit($id = null)
    {
        $digitLancamento = $this->DigitLancamento->get($id, [
            'contain' => ['Digitalizacao' => ['Servico']],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $digitLancamento = $this->DigitLancamento->patchEntity($digitLancamento, $this->request->getData());

            if ($this->DigitLancamento->save($digitLancamento)) {
                $this->Flash->success(__('Serviço editado com sucesso!'));

                return $this->redirect(['action' => 'servicosLancados']);
            }

            $this->Flash->error(__('Falha ao editar serviço. Tente novamente.'));
        }

        $this->set(compact('digitLancamento'));
    }

    public function editDigitalizacao($id = null)
    {
        $digitalizacao = $this->DigitalizacaoService->buscaRegistro($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $dados = $this->request->getData();

            $edicaoSucesso = $this->DigitalizacaoService->edit($id, $dados);

            if ($edicaoSucesso) {
                $this->Flash->success(__('Digitalização editada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao editar digitalização. Tente novamente.'));
        }

        $servicos = $this->DigitalizacaoTable->selectServicos();

        $this->set(compact('digitalizacao', 'servicos'));
    }

    // TELA DE SERVIÇOS LANÇADOS
    public function servicosLancados()
    {
        $servico = $this->request->getQuery('servico');
        $funcionario = $this->request->getQuery('funcionario');
        $data_inicio = $this->request->getQuery('data_inicio');
        $data_fim = $this->request->getQuery('data_fim');

        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Digitalizacao' => ['Servico']
            ],
            'conditions' => ['DigitLancamento.status_digitalizacao' => 'Lançado'],
            'order' => ['data_lancamento' => 'desc']
        ];

        $query = $this->DigitLancamento->find();

        if (isset($servico) && $servico != '') {
            $query->where([
                'Digitalizacao.servico_id =' => $servico
            ]);
        }

        if (isset($funcionario) && $funcionario != '') {
            $query->where([
                'DigitLancamento.funcionario' => $funcionario
            ]);
        }

        if (isset($data_inicio) && $data_inicio != '') {
            $query->where([
                'DigitLancamento.data_cadastro >=' => $data_inicio
            ]);
        }

        if (isset($data_fim) && $data_fim != '') {
            $query->where([
                'DigitLancamento.data_cadastro <=' => $data_fim
            ]);
        }

        $digitLancamento = $this->paginate($query);

        $servicos = $this->DigitLancamento->servicosFiltro()->toArray();
        $funcionarios = $this->DigitLancamento->funcionarioFiltro()->toArray();
        
        $this->set(compact('digitLancamento', 'servicos', 'funcionarios'));
    }

    /* Esse método altera o campo 'status_digitalizacao' na tabela 'digit_lancamento' para que o serviço seja
    novamente acessível na index e possa ser refeito */
    public function voltarEtapa($digitalizacao_id)
    {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sucesso = $this->DigitalizacaoService->atualizaStatus($digitalizacao_id, 'Aguardando Lançamento');

            if ($sucesso) {
                $digitalizacao = $this->DigitLancamento->existeDado($digitalizacao_id);

                $this->DigitLancamento->delete($digitalizacao);

                $this->Flash->success(__('Registro alterado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao alterar registro. Tente novamente.'));
        }
    }
}
