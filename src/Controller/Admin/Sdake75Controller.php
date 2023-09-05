<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;


class Sdake75Controller extends AppController
{
   
    public function index()
    {
        $sdake75 = $this->paginate($this->Sdake75);

        $this->set(compact('sdake75'));
    }

   
    public function pdf($id = null)
    {
        $sdake75 = $this->Sdake75->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('sdake75'));
    }

    public function add()
    {
        $sdake75 = $this->Sdake75->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Pagodeiro';
            $data['total']  = $data['copias']  * $data['paginas'];

            $sdake75 = $this->Sdake75->patchEntity($sdake75, $data);
            if ($this->Sdake75->save($sdake75)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('sdake75'));
    }

        public function edit($id = null)
    {
        $sdake75 = $this->Sdake75->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sdake75 = $this->Sdake75->patchEntity($sdake75, $this->request->getData());
            $data = $this->request->getData();

            error_reporting(0);
            $data['total']  = $data['copias']  * $data['paginas'];
            $sdake75 = $this->Sdake75->patchEntity($sdake75, $data);

            if ($this->Sdake75->save($sdake75)) {
                $this->Flash->success(__('O serviço foi editado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não foi editado. Por favor, tente novamente.'));
        }
        $this->set(compact('sdake75'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sdake75 = $this->Sdake75->get($id);
        if ($this->Sdake75->delete($sdake75)) {
            $this->Flash->success(__('O serviço foi excluído.'));
        } else {
            $this->Flash->error(__('O serviço não foi excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
