<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class Smafe008Controller extends AppController
{

    public function index()
    {
        $smafe008 = $this->paginate($this->Smafe008);

        $this->set(compact('smafe008'));
    }

    public function add()
    {
        $smafe008 = $this->Smafe008->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['total'] = $data['copias'] * $data['paginas'];
            $data['total1'] = $data['copias1'] * $data['paginas1'];
            $data['totaltudo'] = $data['total'] + $data['total1'];
            $smafe008 = $this->Smafe008->patchEntity($smafe008, $data);
            if ($this->Smafe008->save($smafe008)) {
                $this->Flash->success(__('The smafe008 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The smafe008 could not be saved. Please, try again.'));
        }
        $this->set(compact('smafe008'));
    }

    public function edit($id = null)
    {
        $smafe008 = $this->Smafe008->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $smafe008 = $this->Smafe008->patchEntity($smafe008, $this->request->getData());
            if ($this->Smafe008->save($smafe008)) {
                $this->Flash->success(__('The smafe008 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The smafe008 could not be saved. Please, try again.'));
        }
        $this->set(compact('smafe008'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $smafe008 = $this->Smafe008->get($id);
        if ($this->Smafe008->delete($smafe008)) {
            $this->Flash->success(__('The smafe008 has been deleted.'));
        } else {
            $this->Flash->error(__('The smafe008 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function pdf($id = null)
    {
        $smafe008 = $this->Smafe008->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('smafe008'));
    }

}