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
                'Servico',
                'StatusAtividade'
            ]
        ]);

        $nome_servico = $atividade->servico->nome_servico;

        $this->set(compact('atividade', 'nome_servico'));
    }

    public function add()
    {
        $atividade = $this->Atividade->newEmptyEntity();

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
                    'funcionario' => 'Cristian',
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

        $this->set(compact('atividade', 'servicos'));
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
                $registroAtividade = $this->Atividade->get($dados['servico_id'][$i]);

                $registroAtividade->status_atividade_id = 2;  // Confirmado

                $this->Atividade->save($registroAtividade);

                $this->salvaProximaEtapa($dados['impresso'][$i], $registroAtividade);               
            }
    
            $this->Flash->success('Atividade(s) lançada(s) com sucesso!');
            
            return $this->redirect(['action' => 'index']);
        }
    }

    public function salvaProximaEtapa($dados_impresso, $registroAtividade)
    {
        if ($dados_impresso == 1) {
            $impressaoTable = $this->getTableLocator()->get('Impressao');
            $impressao = $impressaoTable->newEmptyEntity();

            $nova_impressao = [
                'funcionario' => 'Cristian',
                'atividade_id' => $registroAtividade->id,
                'status_atividade_id' => 3,  // Aguardando Impressão
                'impressora_id' => 5
            ];

            $impressao = $impressaoTable->patchEntity($impressao, $nova_impressao);
            $impressaoTable->save($impressao);
        } else {
            $triagemTable = $this->getTableLocator()->get('Triagem');
            $triagem = $triagemTable->newEmptyEntity();

            $nova_triagem = [
                'funcionario' => 'Cristian',
                'atividade_id' => $registroAtividade->id,
                'status_atividade_id' => 7  // Aguardando Triagem
            ];

            $triagem = $triagemTable->patchEntity($triagem, $nova_triagem);
            $triagemTable->save($triagem);
        }
    }
}
