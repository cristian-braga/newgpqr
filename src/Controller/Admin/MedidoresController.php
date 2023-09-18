<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class MedidoresController extends AppController
{
    public function index()
    {
        $filtro_ano = $this->request->getQuery('filtro_ano');

        if (isset($filtro_ano) && $filtro_ano != '') {
            $ano = $filtro_ano;
        } else {
            $ano = date('Y');
        }

        $medidores = $this->paginate($this->Medidores);

        $this->set(compact('medidores', 'ano'));
    }

    public function add()
    {
        $medidores = $this->Medidores->newEmptyEntity();
        if ($this->request->is('post')) {
            $medidores = $this->Medidores->patchEntity($medidores, $this->request->getData());
            if ($this->Medidores->save($medidores)) {
                $this->Flash->success(__('The medidore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medidore could not be saved. Please, try again.'));
        }
        $this->set(compact('medidores'));
    }

    public function edit($id = null)
    {
        $medidores = $this->Medidores->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medidores = $this->Medidores->patchEntity($medidores, $this->request->getData());
            if ($this->Medidores->save($medidores)) {
                $this->Flash->success(__('The medidore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medidore could not be saved. Please, try again.'));
        }
        $this->set(compact('medidores'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medidores = $this->Medidores->get($id);
        if ($this->Medidores->delete($medidores)) {
            $this->Flash->success(__('The medidore has been deleted.'));
        } else {
            $this->Flash->error(__('The medidore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
