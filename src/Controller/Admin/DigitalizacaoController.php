<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\DigitalizacaoService;

class DigitalizacaoController extends AppController
{
    protected $DigitalizacaoService;

    public function initialize(): void
    {
        parent::initialize();
        $this->DigitalizacaoService = new DigitalizacaoService();
    }

    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => ['Servico'],
            'conditions' => ['status_digitalizacao' => 'Aguardando Digitalização'],
            'order' => ['data_cadastro' => 'desc']
        ];

        $digitalizacao = $this->paginate($this->Digitalizacao);

        $this->set(compact('digitalizacao'));
    }

    public function view($id = null)
    {
        $digitalizacao = $this->Digitalizacao->get($id, [
            'contain' => [
                'DigitQualidade',
                'DigitLancamento',
                'DigitConferencia',
                'Servico'
            ]
        ]);

        $this->set(compact('digitalizacao'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            $datas = $dados['data_postagem'];
            $remessas = $dados['remessa'];
            $documentos = $dados['quantidade_documentos'];
            $servico_ids = $dados['servico_id'];

            $digitalizacoes = [];

            for ($i = 0; $i < count($servico_ids); $i++) {
                $digitalizacao = $this->Digitalizacao->newEmptyEntity();

                $nova_digitalizacao = [
                    'data_digitalizacao' => date('Y-m-d H:i:s'),
                    'funcionario' => 'Funcionario',
                    'data_cadastro' => date('Y-m-d'),
                    'data_postagem' => $datas[$i],
                    'remessa' => $remessas[$i],
                    'quantidade_documentos' => $documentos[$i],
                    'status_digitalizacao' => 'Aguardando Digitalização',
                    'digitalizado' => 'Não',
                    'servico_id' => $servico_ids[$i]
                ];

                $digitalizacao = $this->Digitalizacao->patchEntity($digitalizacao, $nova_digitalizacao);

                $digitalizacoes[] = $digitalizacao;
            }

            if ($this->Digitalizacao->saveMany($digitalizacoes)) {

                $this->Flash->success(__('Serviço(s) cadastrados com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao cadastrar serviço(s). Tente novamente.'));
        }

        $servicos = $this->Digitalizacao->selectServicos()->toArray();

        $this->set(compact('servicos'));
    }

    public function edit($id = null)
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

        $servicos = $this->Digitalizacao->selectServicos()->toArray();

        $this->set(compact('digitalizacao', 'servicos'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $digitalizacao = $this->Digitalizacao->get($id);

        if ($this->Digitalizacao->delete($digitalizacao)) {
            $this->Flash->success(__('Serviço excluído com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir serviço.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function atualizaDigitalizacao()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData('selecionados');

            foreach ($dados as $id) {
                $this->DigitalizacaoService->atualizaStatus($id, 'Aguardando Cont. Qualidade', 'Sim');
            }
    
            $this->Flash->success('Serviço(s) lançado(s) com sucesso!');
            
            return $this->redirect(['action' => 'index']);
        }
    }

    // TELA DE SERVIÇOS DIGITALIZADOS
    public function servicosDigitalizados()
    {
        $servico = $this->request->getQuery('servico');
        $funcionario = $this->request->getQuery('funcionario');
        $data_inicio = $this->request->getQuery('data_inicio');
        $data_fim = $this->request->getQuery('data_fim');

        $this->paginate = [
            'limit' => 20,
            'contain' => ['Servico'],
            'conditions' => ['digitalizado' => 'Sim'],
            'order' => ['data_digitalizacao' => 'desc']
        ];

        $query =  $this->Digitalizacao->find();

        if (isset($servico) && $servico != '') {
            $query->where([
                'Digitalizacao.servico_id =' => $servico
            ]);
        }

        if (isset($funcionario) && $funcionario != '') {
            $query->where([
                'Digitalizacao.funcionario' => $funcionario
            ]);
        }

        if (isset($data_inicio) && $data_inicio != '') {
            $query->where([
                'Digitalizacao.data_cadastro >=' => $data_inicio
            ]);
        }

        if (isset($data_fim) && $data_fim != '') {
            $query->where([
                'Digitalizacao.data_cadastro <=' => $data_fim
            ]);
        }

        $digitalizacao = $this->paginate($query);

        $servicos = $this->Digitalizacao->servicosFiltro()->toArray();
        $funcionarios = $this->Digitalizacao->funcionarioFiltro()->toArray();

        $this->set(compact('digitalizacao', 'servicos', 'funcionarios'));
    }

    /* Esse método altera o campo 'status_digitalizacao' na tabela 'digitalizacao' para que o serviço seja
    novamente acessível na index e possa ser refeito */
    public function voltarEtapa($id)
    {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sucesso = $this->DigitalizacaoService->atualizaStatus($id, 'Aguardando Digitalização', 'Não');

            if ($sucesso) {
                $this->Flash->success(__('Serviço alterado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao alterar serviço. Tente novamente.'));
        }
    }
}
