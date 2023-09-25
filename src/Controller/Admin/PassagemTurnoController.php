<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class PassagemTurnoController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 15,
            'order' => ['data_cadastro' => 'desc']
        ];

        $passagemTurno = $this->paginate($this->PassagemTurno);

        $this->set(compact('passagemTurno'));
    }

    public function view($id = null)
    {
        $passagemTurno = $this->PassagemTurno->get($id);

        $this->set(compact('passagemTurno'));
    }

    public function add()
    {
        $passagemTurno = $this->PassagemTurno->newEmptyEntity();

        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            $dados['funcionario'] = 'Funcionario';

            $passagemTurno = $this->PassagemTurno->patchEntity($passagemTurno, $dados);

            if ($this->PassagemTurno->save($passagemTurno)) {
                $this->Flash->success(__('Registro lançado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao lançar registro. Tente novamente.'));
        }

        $turnos = [
            'Manhã' => 'Manhã',
            'Tarde' => 'Tarde',
            'Noite' => 'Noite'
        ];

        $etapas = [
            'Atividade' => 'Atividade',
            'Impressão' => 'Impressão',
            'Conferência' => 'Conferência',
            'Envelopamento' => 'Envelopamento',
            'Triagem' => 'Triagem',
            'Expedição' => 'Expedição'
        ];

        $this->set(compact('passagemTurno', 'turnos', 'etapas'));
    }

    public function edit($id = null)
    {
        $passagemTurno = $this->PassagemTurno->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $dados = $this->request->getData();

            $dados['funcionario'] = 'Funcionario';

            $passagemTurno = $this->PassagemTurno->patchEntity($passagemTurno, $dados);

            if ($this->PassagemTurno->save($passagemTurno)) {
                $this->Flash->success(__('Registro editado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao editar registro. Tente novamente.'));
        }

        $turnos = [
            'Manhã' => 'Manhã',
            'Tarde' => 'Tarde',
            'Noite' => 'Noite'
        ];

        $etapas = [
            'Atividade' => 'Atividade',
            'Impressão' => 'Impressão',
            'Conferência' => 'Conferência',
            'Envelopamento' => 'Envelopamento',
            'Triagem' => 'Triagem',
            'Expedição' => 'Expedição'
        ];

        $this->set(compact('passagemTurno', 'turnos', 'etapas'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $passagemTurno = $this->PassagemTurno->get($id);

        if ($this->PassagemTurno->delete($passagemTurno)) {
            $this->Flash->success(__('Registro excluído com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir registro. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
