<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class PassagemTurnoController extends AppController
{
    public function index()
    {
        $etapa = $this->request->getQuery('etapa');
        $data_inicio = $this->request->getQuery('data_inicio');
        $data_fim = $this->request->getQuery('data_fim');

        $this->paginate = [
            'limit' => 15,
            'order' => ['data_cadastro' => 'desc']
        ];

        $query =  $this->PassagemTurno->find();

        if (isset($etapa) && $etapa != '') {
            $query->where([
                'etapa' => $etapa
            ]);
        }

        if (isset($data_inicio) && $data_inicio != '') {
            $query->where([
                'data_cadastro >=' => $data_inicio
            ]);
        }

        if (isset($data_fim) && $data_fim != '') {
            $query->where([
                'data_cadastro <=' => $data_fim
            ]);
        }

        $passagemTurno = $this->paginate($query);

        $etapas = $this->PassagemTurno->buscaEtapas()->toArray();

        $this->set(compact('passagemTurno' , 'etapas'));
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
