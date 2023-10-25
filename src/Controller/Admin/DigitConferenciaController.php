<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\DigitalizacaoService;

class DigitConferenciaController extends AppController
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
            'conditions' => ['status_digitalizacao' => 'Aguardando Conferência'],
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
                $nova_digitConferencia = [
                    'funcionario' => 'FuncionarioConfAlf',
                    'data_conferencia' => date('Y-m-d H:i:s'),
                    'data_cadastro' => date('Y-m-d'),
                    'status_digitalizacao' => 'Concluído',
                    'digitalizacao_id' => $dados[$i]
                ];

                $existe_registro = $this->DigitConferencia->existeDado($dados[$i]);

                if (!$existe_registro) {
                    $digitConferencia = $this->DigitConferencia->newEmptyEntity();
                    $digitConferencia = $this->DigitConferencia->patchEntity($digitConferencia, $nova_digitConferencia);
                } else {
                    $digitConferencia = $this->DigitConferencia->patchEntity($existe_registro, $nova_digitConferencia);
                }
                
                $digitalizacoes[] = $digitConferencia;

                $this->DigitalizacaoService->atualizaStatus($dados[$i], 'Concluído');
            }

            if ($this->DigitConferencia->saveMany($digitalizacoes)) {
                $this->Flash->success(__('Serviço(s) lançado(s) com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao lançar serviço(s). Tente novamente.'));
        }
    }

    public function edit($id = null)
    {
        $digitConferencia = $this->DigitConferencia->get($id, [
            'contain' => ['Digitalizacao' => ['Servico']],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $digitConferencia = $this->DigitConferencia->patchEntity($digitConferencia, $this->request->getData());

            if ($this->DigitConferencia->save($digitConferencia)) {
                $this->Flash->success(__('Serviço editado com sucesso!'));

                return $this->redirect(['action' => 'servicosConcluidos']);
            }

            $this->Flash->error(__('Falha ao editar serviço. Tente novamente.'));
        }

        $this->set(compact('digitConferencia'));
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

    // TELA DE SERVIÇOS CONFERIDOS ALFRESCO
    public function servicosConcluidos()
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
            'conditions' => ['DigitConferencia.status_digitalizacao' => 'Concluído'],
            'order' => ['data_lancamento' => 'desc']
        ];

        $query = $this->DigitConferencia->find();

        if (isset($servico) && $servico != '') {
            $query->where([
                'Digitalizacao.servico_id =' => $servico
            ]);
        }

        if (isset($funcionario) && $funcionario != '') {
            $query->where([
                'DigitConferencia.funcionario' => $funcionario
            ]);
        }

        if (isset($data_inicio) && $data_inicio != '') {
            $query->where([
                'DigitConferencia.data_cadastro >=' => $data_inicio
            ]);
        }

        if (isset($data_fim) && $data_fim != '') {
            $query->where([
                'DigitConferencia.data_cadastro <=' => $data_fim
            ]);
        }

        $digitConferencia = $this->paginate($query);

        $servicos = $this->DigitConferencia->servicosFiltro()->toArray();
        $funcionarios = $this->DigitConferencia->funcionarioFiltro()->toArray();
        
        $this->set(compact('digitConferencia', 'servicos', 'funcionarios'));
    }

    /* Esse método altera o campo 'status_digitalizacao' na tabela 'digit_conferencia' para que o serviço seja
    novamente acessível na index e possa ser refeito */
    public function voltarEtapa($digitalizacao_id)
    {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sucesso = $this->DigitalizacaoService->atualizaStatus($digitalizacao_id, 'Aguardando Conferência');

            if ($sucesso) {
                $digitalizacao = $this->DigitConferencia->existeDado($digitalizacao_id);

                $this->DigitConferencia->delete($digitalizacao);

                $this->Flash->success(__('Registro alterado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao alterar registro. Tente novamente.'));
        }
    }
}
