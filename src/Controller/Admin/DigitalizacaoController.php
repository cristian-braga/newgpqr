<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class DigitalizacaoController extends AppController
{

    public function index()
    {
        $selectServico = filter_input(INPUT_GET, 'servico_id', FILTER_DEFAULT); // pega valor do meu select

        if(isset($selectServico)) {
            $this->paginate = [
                'limit' => 20,
                'contain' => ['Servico'],
                'conditions' => ['Servico.id' => $selectServico]
            ];
        }
        else {
            $this->paginate = [
                'limit' => 20,
                'contain' => ['Servico'],
            ];
        }


        $servicos = $this->Digitalizacao->Servico
            ->find('list', ['keyField' => 'id', 'valueField' => 'nome_servico'])
            ->order(['nome_servico' => 'asc'])
            ->all(); // consultar o banco de dados 

        
        $digitalizacao = $this->paginate($this->Digitalizacao);

        

        $this->set(compact('digitalizacao', 'servicos'));
    }
        

    public function view($id = null)
    {
        $digitalizacao = $this->Digitalizacao->get($id, [
            'contain' => ['Servico', 'StatusDigitalizacao'],
        ]);

        $this->set(compact('digitalizacao'));
    }

    public function add()
    {

        $digitalizacao = $this->Digitalizacao->newEmptyEntity();

        $servicos = $this->Digitalizacao->Servico
            ->find('list', ['keyField' => 'id', 'valueField' => 'nome_servico'])
            ->order(['nome_servico' => 'asc'])
            ->all();

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
                    'periodo' => $periodo[$i]
                ];

                $digitalizacao = $this->Digitalizacao->patchEntity($digitalizacao, $digitalizacoes);

                $digitalizacoesEnviar[] = $digitalizacao;
            }

            if ($this->Digitalizacao->saveMany($digitalizacoesEnviar)) {

                $this->Flash->success(__('The digitalizacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {

                $this->Flash->error(__('The digitalizacao could not be saved. Please, try again.'));
            }
        }


        $this->set(compact('digitalizacao', 'servicos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Digitalizacao id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    public function edit($id = null)
    {
        $digitalizacao = $this->Digitalizacao->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $digitalizacao = $this->Digitalizacao->patchEntity($digitalizacao, $this->request->getData());
            if ($this->Digitalizacao->save($digitalizacao)) {
                $this->Flash->success(__('The digitalizacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The digitalizacao could not be saved. Please, try again.'));
        }
        $servico = $this->Digitalizacao->Servico->find('list', ['limit' => 200])->all();
        $this->set(compact('digitalizacao', 'servico'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Digitalizacao id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $digitalizacao = $this->Digitalizacao->get($id);
        if ($this->Digitalizacao->delete($digitalizacao)) {
            $this->Flash->success(__('The digitalizacao has been deleted.'));
        } else {
            $this->Flash->error(__('The digitalizacao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
