<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class ControleColaController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 10,
            'order' => ['data_operacao' => 'desc']
        ];

        $controle_cola = $this->paginate($this->ControleCola);

        $total_entrada = $total_saida = 0;

        foreach ($controle_cola as $item) {
            if ($item->operacao == 'Entrada') {
                $total_entrada += $item->quantidade;
            } else {
                $total_saida += $item->quantidade;
            }
        }
        
        $saldo = $total_entrada - $total_saida;

        $this->set(compact('controle_cola', 'total_entrada', 'total_saida', 'saldo'));
    }

    public function add()
    {
        $controle_cola = $this->ControleCola->newEmptyEntity();

        if ($this->request->is('post')) {
            $dados = $this->request->getData();
    
            $dados['funcionario'] = 'Funcionario';

            $controle_cola = $this->ControleCola->patchEntity($controle_cola, $dados);

            if ($this->ControleCola->save($controle_cola)) {
                $this->Flash->success(__('Registro lançado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao lançar registro. Tente novamente.'));
        }

        $this->set(compact('controle_cola'));
    }

    public function edit($id = null)
    {
        $controle_cola = $this->ControleCola->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $dados = $this->request->getData();
    
            $dados['funcionario'] = 'Funcionario';

            $controle_cola = $this->ControleCola->patchEntity($controle_cola, $dados);

            if ($this->ControleCola->save($controle_cola)) {
                $this->Flash->success(__('Registro editado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao editar registro. Tente novamente.'));
        }

        $this->set(compact('controle_cola'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $controle_cola = $this->ControleCola->get($id);

        if ($this->ControleCola->delete($controle_cola)) {
            $this->Flash->success(__('Registro excluído com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir registro. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
