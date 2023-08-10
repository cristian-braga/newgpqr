<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class AtividadeController extends AppController
{
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

                $folhas_paginas = $this->calculaFolhasPaginas($servico_ids[$i], intval($documentos[$i]));

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

        $servico = $this->Atividade->Servico
            ->find('list', ['keyField' => 'id', 'valueField' => 'nome_servico'])
            ->where(['ativo' => 'Sim'])
            ->order(['nome_servico' => 'asc'])
            ->all();

        $this->set(compact('atividade', 'servico'));
    }

    public function edit($id = null)
    {
        $atividade = $this->Atividade->get($id, [
            'contain' => [],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $dados = $this->request->getData();

            $folhas_paginas = $this->calculaFolhasPaginas($dados['servico_id'], intval($dados['quantidade_documentos']));

            $dados['quantidade_folhas'] = $folhas_paginas['folhas'];
            $dados['quantidade_paginas'] = $folhas_paginas['paginas'];

            $atividade = $this->Atividade->patchEntity($atividade, $dados);

            if ($this->Atividade->save($atividade)) {
                $this->Flash->success(__('Atividade editada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao editar atividade. Tente novamente.'));
        }

        $servico = $this->Atividade->Servico
            ->find('list', ['keyField' => 'id', 'valueField' => 'nome_servico'])
            ->where(['ativo' => 'Sim'])
            ->order(['nome_servico' => 'asc'])
            ->all();

        $this->set(compact('atividade', 'servico'));
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

        return $this->redirect($this->referer());  // Redireciona para a página solicitante
    }

    public function calculaFolhasPaginas($servico_id, $documentos)
    {
        $servico = $this->Atividade->Servico->get($servico_id);
        $tipo_env = $servico->envelopamento_servico;

        switch ($tipo_env) {
            case 'A4':
            case 'Sem Envelopamento':
            case 'Sem Envelopamento FV':
                $folhas = $documentos;
                $paginas = $folhas * 2;
                break;
            case 'CD':
            case 'Encadernação':
                $folhas = 0;
                $paginas = 0;
                break;
            case 'A5':
                if ($documentos % 2 == 1) {
                    $folhas = ($documentos + 1) / 2;
                } else {
                    $folhas = $documentos / 2;
                }
                $paginas = $folhas * 2;
                break;
            case 'Etiqueta':
                $folhas = ceil($documentos / 21);
                $paginas = $folhas;
                break;
            case 'Sem Envelopamento F':
                $folhas = $documentos;
                $paginas = $folhas;
        }

        $folhas_paginas = [];

        $folhas_paginas['folhas'] = intval($folhas);
        $folhas_paginas['paginas'] = intval($paginas);

        return $folhas_paginas;
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
