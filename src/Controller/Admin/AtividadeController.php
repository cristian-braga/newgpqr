<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class AtividadeController extends AppController
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
            'contain' => ['Servico', 'StatusAtividade'],
            'conditions' => ['status_atividade_id' => 1],
            'order' => ['data_cadastro' => 'desc']
        ];

        $atividade = $this->paginate($this->Atividade);

        $this->set(compact('atividade'));
    }

    public function view($id = null)
    {
        $atividade = $this->Atividade->get($id, [
            'contain' => [
                'Impressao' => ['Impressora', 'StatusAtividade'],
                'Conferencia' => ['StatusAtividade'],
                'Envelopamento' => ['StatusAtividade'],
                'Triagem' => ['StatusAtividade'],
                'Expedicao' => ['StatusAtividade'],
                'ServicosAnulados',
                'Servico',
                'StatusAtividade'
            ]
        ]);

        $status = $atividade->status_atividade_id;

        if (in_array($status, [15, 16, 17])) {
            $servico_com_erro = true;
        } else {
            $servico_com_erro = false;
        }

        $etapas = [
            'Impressão' => 'Impressão',
            'Conferência' => 'Conferência',
            'Envelopamento' => 'Envelopamento',
            'Triagem' => 'Triagem',
            'Expedição' => 'Expedição'
        ];

        $erros = $this->Atividade->StatusAtividade
            ->find('list', ['keyField' => 'id', 'valueField' => 'status_atual'])
            ->where(['StatusAtividade.id IN' => [15, 16, 17]])
            ->orderDesc('status_atual')
            ->all();

        $this->set(compact('atividade', 'servico_com_erro', 'etapas', 'erros'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            $jobs = $dados['job'];
            $datas = $dados['data_postagem'];
            $remessas = $dados['remessa_atividade'];
            $documentos = $dados['quantidade_documentos'];
            $recibos = $dados['recibo_postagem'];
            $servico_ids = $dados['servico_id'];

            $atividades = [];

            for ($i = 0; $i < count($servico_ids); $i++) {
                $atividade = $this->Atividade->newEmptyEntity();

                $folhas_paginas = $this->AtividadeService->calculaFolhasPaginas($servico_ids[$i], intval($documentos[$i]));

                $nova_atividade = [
                    'job' => $jobs[$i],
                    'data_atividade' => date('Y-m-d H:i:s'),
                    'data_postagem' => $datas[$i],
                    'data_cadastro' => date('Y-m-d'),
                    'funcionario' => 'Funcionário',
                    'remessa_atividade' => $remessas[$i],
                    'quantidade_documentos' => $documentos[$i],
                    'quantidade_folhas' => $folhas_paginas['folhas'],
                    'quantidade_paginas' => $folhas_paginas['paginas'],
                    'recibo_postagem' => $recibos[$i],
                    'servico_id' => $servico_ids[$i],
                    'status_atividade_id' => 1  // Aguardando Confirmação
                ];

                $atividade = $this->Atividade->patchEntity($atividade, $nova_atividade);

                $atividades[] = $atividade;
            }

            if ($this->Atividade->saveMany($atividades)) {
                $this->Flash->success(__('Atividade(s) cadastrada(s) com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao cadastrar atividade(s). Tente novamente.'));
        }

        $servicos = $this->AtividadeService->servicos_opcoes();

        $this->set(compact('servicos'));
    }

    public function edit($id = null)
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
        $atividade = $this->Atividade->get($id);

        if ($this->Atividade->delete($atividade)) {
            $this->Flash->success(__('Atividade excluída com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir atividade. Tente novamente.'));
        }

        return $this->redirect($this->referer());  // Redireciona para a página que fez a requisição
    }

    public function confirmaAtividade()
    {
        if ($this->request->is('post')) {
            $selecionados = $this->request->getData('selecionados');
            $servicos = [];
    
            foreach ($selecionados as $id) {
                $query = $this->Atividade->get($id, ['contain' => 'Servico']);
                $servicos[] = $query;
            }
        }

        $this->set(compact('servicos'));
    }

    public function atualizaAtividade()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            for ($i = 0; $i < count($dados['servico_id']); $i++) {
                if ($dados['impresso'][$i] == 1) {
                    $status = 3;  // Aguardando Impressão
                } else {
                    $status = 7;  // Aguardando Triagem
                }

                $this->AtividadeService->atualizaStatus($dados['servico_id'][$i], $status);
            }
    
            $this->Flash->success('Atividade(s) lançada(s) com sucesso!');
            
            return $this->redirect(['action' => 'index']);
        }
    }
}
