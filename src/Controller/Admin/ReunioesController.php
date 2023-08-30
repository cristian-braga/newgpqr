<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class ReunioesController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 10,
            'order' => ['data_reuniao' => 'desc']
        ];

        $reunioes = $this->paginate($this->Reunioes);

        // Filtros
        $dataInicio = filter_input(INPUT_GET, "dataInicio");
        $dataFim = filter_input(INPUT_GET, "dataFim");

        $query = $this->Reunioes->find('all');

        if (isset($dataInicio) && $dataInicio !== "") {
            $query->where([
                'data_reuniao >=' => $dataInicio
            ]);
        }

        if (isset($dataFim) && $dataFim !== "") {
            $query->where([
                'data_reuniao <=' => $dataFim
            ]);
        }

        $queryReunioes = $this->paginate($query);

        $this->set(compact('queryReunioes'));
    }

    public function add()
    {
        $reunioes = $this->Reunioes->newEmptyEntity();

        if ($this->request->is('post', 'get')) {

            $reunioes = $this->Reunioes->patchEntity($reunioes, $this->request->getData());

            if ($this->Reunioes->save($reunioes)) {
                $this->Flash->success(__('A reunião foi cadastrada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('A reunião não pode ser salva. Tente novamente.'));
        }

        $this->set(compact('reunioes'));
    }

    public function edit($id = null)
    {
        $reunioes = $this->Reunioes->get($id, [
            'contain' => [],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {

            $reunioes = $this->Reunioes->patchEntity($reunioes, $this->request->getData());

            if ($this->Reunioes->save($reunioes)) {
                $this->Flash->success(__('A reunião foi editada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('A reunião não foi editada. Tente novamente.'));
        }

        $this->set(compact('reunioes'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $reunioes = $this->Reunioes->get($id);

        if ($this->Reunioes->delete($reunioes)) {
            $this->Flash->success(__('A reunião foi excluída com sucesso!'));
        } else {
            $this->Flash->error(__('A reunião não foi excluída. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function pdf($id = null)
    {
        $reunioes = $this->Reunioes->get($id, [
            'contain' => [],
        ]);

        // Converte a string para um objeto DateTime
        $reunioes->horario_reuniao = new \DateTime($reunioes->horario_reuniao);

        $this->set(compact('reunioes'));
    }
}
