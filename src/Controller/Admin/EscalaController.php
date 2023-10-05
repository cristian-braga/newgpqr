<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class EscalaController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'conditions' => ['turno' => 'Manhã'],
            'order' => ['data_inicial' => 'asc']
        ];

        $escalas = $this->paginate($this->Escala);

        $this->set(compact('escalas'));
    }

    public function add()
    {
        $escala = $this->Escala->newEmptyEntity();
        $dados = $this->request->getData();        

        if ($this->request->is('post')) {
            $escala = $this->Escala->patchEntity($escala, $dados);

            if ($this->Escala->save($escala)) {
                $this->Flash->success(__('Registro lançado com sucesso!'));

                if ($dados['turno_escala'] === 'Manhã') {
                    return $this->redirect(['action' => 'index']);
                } else {
                    return $this->redirect(['action' => 'escalaTarde']);
                }
            }

            $this->Flash->error(__('Falha ao lançar registro. Tente novamente.'));
        }

        $this->set(compact('escala'));
    }

    public function edit($id = null)
    {
        $escala = $this->Escala->get($id);

        $dados = $this->request->getData();   

        if ($this->request->is(['patch', 'post', 'put'])) {
            $escala = $this->Escala->patchEntity($escala, $dados);

            if ($this->Escala->save($escala)) {
                $this->Flash->success(__('Registro editado com sucesso!'));

                if ($dados['turno_escala'] === 'Manhã') {
                    return $this->redirect(['action' => 'index']);
                } else {
                    return $this->redirect(['action' => 'escalaTarde']);
                }
            }

            $this->Flash->error(__('Falha ao editar registro. Tente novamente.'));
        }
        
        $this->set(compact('escala'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $escala = $this->Escala->get($id);

        if ($this->Escala->delete($escala)) {
            $this->Flash->success(__('Registro excluído com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir registro. Tente novamente.'));
        }

        return $this->redirect($this->referer());
    }

    // TELA ESCALA TARDE
    public function escalaTarde()
    {
        $this->paginate = [
            'limit' => 20,
            'conditions' => ['turno' => 'Tarde'],
            'order' => ['data_inicial' => 'asc']
        ];

        $escalas = $this->paginate($this->Escala);

        $this->set(compact('escalas'));
    }
}
