<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\DigitalizacaoService;

class DigitQualidadeController extends AppController
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
            'conditions' => ['status_digitalizacao' => 'Aguardando Cont. Qualidade'],
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
                $nova_digitQualidade = [
                    'funcionario' => 'FuncionarioQualid',
                    'data_qualidade' => date('Y-m-d H:i:s'),
                    'data_cadastro' => date('Y-m-d'),
                    'status_digitalizacao' => 'Conferido',
                    'digitalizacao_id' => $dados[$i]
                ];

                $existe_registro = $this->DigitQualidade->existeDado($dados[$i]);

                if (!$existe_registro) {
                    $digitQualidade = $this->DigitQualidade->newEmptyEntity();
                    $digitQualidade = $this->DigitQualidade->patchEntity($digitQualidade, $nova_digitQualidade);
                } else {
                    $digitQualidade = $this->DigitQualidade->patchEntity($existe_registro, $nova_digitQualidade);
                }
                
                $digitalizacoes[] = $digitQualidade;

                $this->DigitalizacaoService->atualizaStatus($dados[$i], 'Aguardando Lançamento');
            }

            if ($this->DigitQualidade->saveMany($digitalizacoes)) {
                $this->Flash->success(__('Serviço(s) lançado(s) com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao lançar serviço(s). Tente novamente.'));
        }
    }

    public function edit($id = null)
    {
        $digitQualidade = $this->DigitQualidade->get($id, [
            'contain' => ['Digitalizacao' => ['Servico']],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $digitQualidade = $this->DigitQualidade->patchEntity($digitQualidade, $this->request->getData());

            if ($this->DigitQualidade->save($digitQualidade)) {
                $this->Flash->success(__('Serviço editado com sucesso!'));

                return $this->redirect(['action' => 'servicosConferidos']);
            }

            $this->Flash->error(__('Falha ao editar serviço. Tente novamente.'));
        }

        $this->set(compact('digitQualidade'));
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

    // TELA DE SERVIÇOS CONFERIDOS
    public function servicosConferidos()
    {
        $data_inicio = $this->request->getQuery('data_inicio');
        $data_fim = $this->request->getQuery('data_fim');
        $servico = $this->request->getQuery('servico');

        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Digitalizacao' => ['Servico']
            ],
            'conditions' => ['DigitQualidade.status_digitalizacao' => 'Conferido'],
            'order' => ['data_qualidade' => 'desc']
        ];

        $query = $this->DigitQualidade->find();

        if (isset($data_inicio) && $data_inicio != '') {
            $query->where([
                'DigitQualidade.data_cadastro >=' => $data_inicio
            ]);
        }

        if (isset($data_fim) && $data_fim != '') {
            $query->where([
                'DigitQualidade.data_cadastro <=' => $data_fim
            ]);
        }

        if (isset($servico) && $servico != '') {
            $query->where([
                'Servico.id =' => $servico
            ]);
        }

        $servicos = $this->DigitQualidade->servicosFiltro()->toArray();
        
        $digitQualidade = $this->paginate($query);

        $this->set(compact('digitQualidade', 'servicos'));
    }

    /* Esse método altera o campo 'status_digitalizacao' na tabela 'digitalizacao' para que o serviço seja
    novamente acessível na index e possa ser refeito */
    public function voltarEtapa($digitalizacao_id)
    {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sucesso = $this->DigitalizacaoService->atualizaStatus($digitalizacao_id, 'Aguardando Cont. Qualidade');

            if ($sucesso) {
                $digitalizacao = $this->Digitalizacao->existeDado($digitalizacao_id);

                $this->Digitalizacao->delete($digitalizacao);

                $this->Flash->success(__('Registro alterado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao alterar registro. Tente novamente.'));
        }
    }
}
