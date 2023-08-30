<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class ServicosAnuladosController extends AppController
{
    protected $AtividadeService;

    public function initialize(): void
    {
        parent::initialize();
        $this->AtividadeService = new AtividadeService();
    }

    public function index()
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
            'order' => ['ServicosAnulados.data_cadastro' => 'desc']
        ];

        $query = $this->ServicosAnulados->find();

        if (isset($data_inicio) && $data_inicio != '') {
            $query->where([
                'ServicosAnulados.data_cadastro >=' => $data_inicio
            ]);
        }

        if (isset($data_fim) && $data_fim != '') {
            $query->where([
                'ServicosAnulados.data_cadastro <=' => $data_fim
            ]);
        }

        if (isset($servico) && $servico != '') {
            $query->where([
                'Servico.id =' => $servico
            ]);
        }

        $servicos = $this->ServicosAnulados->servicos()->toArray();

        $servicosAnulados = $this->paginate($query);

        $this->set(compact('servicosAnulados', 'servicos'));
    }

    public function view($id = null)
    {
        $servicoAnulado = $this->ServicosAnulados->get($id, [
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ]
        ]);

        $this->set(compact('servicoAnulado'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            $dados['funcionario'] = 'CristianErro';
            $dados['data_cadastro'] = date('Y-m-d');

            $existe_registro = $this->ServicosAnulados->existeDado($dados['atividade_id']);

            if (!$existe_registro) {
                $servicoAnulado = $this->ServicosAnulados->newEmptyEntity();
                $servicoAnulado = $this->ServicosAnulados->patchEntity($servicoAnulado, $dados);
            } else {
                $servicoAnulado = $this->ServicosAnulados->patchEntity($existe_registro, $dados);
            }

            $this->AtividadeService->atualizaStatus($dados['atividade_id'], $dados['status_atividade_id']);

            if ($this->ServicosAnulados->save($servicoAnulado)) {
                $this->Flash->success(__('Registro lançado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao lançar registro. Tente novamente.'));
        }
    }

    public function edit($id = null)
    {
        $servicoAnulado = $this->ServicosAnulados->get($id, [
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ]
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $servicosAnulados = $this->ServicosAnulados->patchEntity($servicoAnulado, $this->request->getData());

            if ($this->ServicosAnulados->save($servicoAnulado)) {
                $this->Flash->success(__('Registro editado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao editar registro. Tente novamente.'));
        }

        $etapas = [
            'Impressão' => 'Impressão',
            'Conferência' => 'Conferência',
            'Envelopamento' => 'Envelopamento',
            'Triagem' => 'Triagem',
            'Expedição' => 'Expedição'
        ];

        $erros = $this->ServicosAnulados->StatusAtividade
            ->find('list', ['keyField' => 'id', 'valueField' => 'status_atual'])
            ->where(['StatusAtividade.id IN' => [15, 16, 17]])
            ->orderDesc('status_atual')
            ->all();

        $this->set(compact('servicoAnulado', 'etapas', 'erros'));
    }

    public function voltarEtapa($id)
    {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servicoAnulado = $this->ServicosAnulados->get($id);

            $atividade_id = $servicoAnulado->atividade_id;
            $status = $servicoAnulado->status_anterior;

            $sucesso = $this->AtividadeService->atualizaStatus($atividade_id, $status);  // Status que o serviço estava antes do erro ser reportado

            if ($sucesso) {
                $this->ServicosAnulados->delete($servicoAnulado);

                $this->Flash->success(__('Registro alterado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao alterar registro. Tente novamente.'));
        }
    }
}
