<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

class DigitalizacaoController extends AppController
{

    public function index()
    {
        $servico = $this->request->getQuery('servico');
        $periodo = $this->request->getQuery('periodo');
        $funcionario = $this->request->getQuery('funcionario');

        $this->paginate = [
                'limit' => 20,
                'contain' => ['Servico']
                
            ];
        
       $query =  $this->Digitalizacao->find();

       if(isset($servico) && $servico != '') {
            $query->where([
                'Digitalizacao.servico_id =' => $servico
            ]);
       }

       if(isset($periodo) && $periodo != '') {
        $query->where([
            'Digitalizacao.periodo' => $periodo
        ]);
       }

       if(isset($funcionario) && $funcionario != '') {
            $query->where([
                'Digitalizacao.funcionario' => $funcionario
            ]);
       }
        
       $periodos = $this->Digitalizacao->periodoFiltro()->toArray();
       $servicos = $this->Digitalizacao->selectServicos()->toArray();
       $funcionarios = $this->Digitalizacao->funcionarioFiltro()->toArray();

        
        $servicosExist = $this->paginate($query);
        $dataExist = $this->paginate($query);
        $funcExist = $this->paginate($query);
        

        $this->set(compact( 'servico', 'servicosExist', 'servicos', 'dataExist', 'periodo', 'periodos', 'funcionarios', 'funcExist', 'funcionario'));
    }
        

    public function view($id = null)
    {
        $digitalizacao = $this->Digitalizacao->get($id, [
            'contain' => ['Servico'],
        ]);

        $this->set(compact('digitalizacao'));
    }

    public function add()
    {

        $digitalizacao = $this->Digitalizacao->newEmptyEntity();

        $servicos = $this->Digitalizacao->Servico
            ->find('list', ['keyField' => 'id', 'valueField' => 'nome_servico'])
            ->order(['nome_servico' => 'asc'])
            ->all(); // select de todos os serviços 

        if ($this->request->is('post')) {

            $data = $this->request->getData();

            $servico_ids = $data['servico_id'];
            $quantDOM = $data['quantidade_documentos'];
            $periodo = $data['periodo'];
            $funcionario = "LauraTeste";
            $data['funcionario'] = $funcionario;
            

            $digitalizacoesEnviar = [];

            for ($i = 0; $i < count($servico_ids); $i++) {

                $digitalizacao = $this->Digitalizacao->newEmptyEntity();


                $digitalizacoes = [
                    'servico_id' => $servico_ids[$i],
                    'quantidade_documentos' => $quantDOM[$i],
                    'periodo' => $periodo[$i],
                     'funcionario' => $funcionario,
                    'data_digitalizacao' => date('Y-m-d')
                ];

                $digitalizacao = $this->Digitalizacao->patchEntity($digitalizacao, $digitalizacoes);

                $digitalizacoesEnviar[] = $digitalizacao;
            }

            if ($this->Digitalizacao->saveMany($digitalizacoesEnviar)) {

                $this->Flash->success(__('Digitalização cadastrada com sucesso!.'));

                return $this->redirect(['action' => 'index']);
                
            } else {

                $this->Flash->error(__('Falha ao salvar digitalização.'));
            }
        }


        $this->set(compact('digitalizacao', 'servicos'));
    }

    public function edit($id = null)
    {
        $digitalizacao = $this->Digitalizacao->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $digitalizacao = $this->Digitalizacao->patchEntity($digitalizacao, $this->request->getData());
            if ($this->Digitalizacao->save($digitalizacao)) {
                $this->Flash->success(__('Digitalização editada com sucesso!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao editar digitalização.'));
        }
        $servico = $this->Digitalizacao->Servico->find('list', ['limit' => 200])->all();
        $this->set(compact('digitalizacao', 'servico'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $digitalizacao = $this->Digitalizacao->get($id);
        if ($this->Digitalizacao->delete($digitalizacao)) {
            $this->Flash->success(__('Digitalização deletada com sucesso!.'));
        } else {
            $this->Flash->error(__('Falha ao deletar digitalização.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
