<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class CdController extends AppController
{
    public function index()
    {
        $this->paginate = [ 'limit' => 15,
            'order' => ['dataAtual' => 'asc'],

        ];
        $cd = $this->paginate($this->Cd);

        $this->set(compact('cd'));

    }

    public function add()
    {
        $cd = $this->Cd->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $cd = $this->Cd->patchEntity($cd, $data);
            $data['funcionario'] = 'Itallo';
            $cd = $this->Cd->patchEntity($cd, $data);
            if ($this->Cd->save($cd)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('cd'));
    }

    public function edit($id = null)
    {
        $cd = $this->Cd->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cd = $this->Cd->patchEntity($cd, $this->request->getData());
            if ($this->Cd->save($cd)) {
                $this->Flash->success(__('Serviço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser editado. Tente novamente.'));
        }
        $this->set(compact('cd'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'get', 'delete']);
        $cd = $this->Cd->get($id);
        if ($this->Cd->delete($cd)) {
            $this->Flash->success(__('Serviço excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O serviço não pode ser excluído. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function pdf($id = null)
    {
        $cd = $this->Cd->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('cd'));
    }
}
