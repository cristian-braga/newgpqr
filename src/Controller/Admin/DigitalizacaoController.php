<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class DigitalizacaoController extends AppController
{
    public function index()
    {
        $servico = $this->request->getQuery('servico');
        $periodo = $this->request->getQuery('periodo');
        $funcionario = $this->request->getQuery('funcionario');

        $this->paginate = [
            'limit' => 20,
            'contain' => ['Servico'],
            'order' => ['data_digitalizacao' => 'desc']
        ];

        $query =  $this->Digitalizacao->find();

        if (isset($servico) && $servico != '') {
            $query->where([
                'Digitalizacao.servico_id =' => $servico
            ]);
        }

        if (isset($periodo) && $periodo != '') {
            $periodo = date('Y-m-01', strtotime($periodo));

            $query->where([
                'Digitalizacao.periodo' => $periodo
            ]);
        }

        if (isset($funcionario) && $funcionario != '') {
            $query->where([
                'Digitalizacao.funcionario' => $funcionario
            ]);
        }

        $digitalizacao = $this->paginate($query);

        $servicos = $this->Digitalizacao->servicosFiltro()->toArray();
        $funcionarios = $this->Digitalizacao->funcionarioFiltro()->toArray();

        $this->set(compact('digitalizacao', 'servicos', 'funcionarios'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $data = $this->request->getData();

            $servico_ids = $data['servico_id'];
            $quantDOM = $data['quantidade_documentos'];
            $periodo = $data['periodo'];

            $digitalizacoesEnviar = [];

            for ($i = 0; $i < count($servico_ids); $i++) {
                $digitalizacao = $this->Digitalizacao->newEmptyEntity();

                $digitalizacoes = [
                    'servico_id' => $servico_ids[$i],
                    'quantidade_documentos' => $quantDOM[$i],
                    'periodo' => date('Y-m-01', strtotime($periodo[$i])),
                    'funcionario' => 'Funcionário',
                    'data_digitalizacao' => date('Y-m-d')
                ];

                $digitalizacao = $this->Digitalizacao->patchEntity($digitalizacao, $digitalizacoes);

                $digitalizacoesEnviar[] = $digitalizacao;
            }

            if ($this->Digitalizacao->saveMany($digitalizacoesEnviar)) {

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
        $digitalizacao = $this->Digitalizacao->get($id, [
            'contain' => ['Servico'],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $digitalizacao = $this->Digitalizacao->patchEntity($digitalizacao, $this->request->getData());

            if ($this->Digitalizacao->save($digitalizacao)) {
                $this->Flash->success(__('Serviço editado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao editar serviço.'));
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
}
