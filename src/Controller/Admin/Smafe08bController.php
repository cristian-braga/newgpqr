<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class Smafe08bController extends AppController
{
    
    public function index()
    {
        $smafe08b = $this->paginate($this->Smafe08b);

        $this->set(compact('smafe08b'));
    }

    public function view($id = null)
    {
        $smafe08b = $this->Smafe08b->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('smafe08b'));
    }

    public function add()
    {
        $smafe08b = $this->Smafe08b->newEmptyEntity();
        if ($this->request->is('post')) {
            $smafe08b = $this->Smafe08b->patchEntity($smafe08b, $this->request->getData());
            if ($this->Smafe08b->save($smafe08b)) {
                $this->Flash->success(__('The smafe08b has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The smafe08b could not be saved. Please, try again.'));
        }
        $this->set(compact('smafe08b'));
    }

    public function edit($id = null)
    {
        $smafe08b = $this->Smafe08b->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $smafe08b = $this->Smafe08b->patchEntity($smafe08b, $this->request->getData());
            if ($this->Smafe08b->save($smafe08b)) {
                $this->Flash->success(__('The smafe08b has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The smafe08b could not be saved. Please, try again.'));
        }
        $this->set(compact('smafe08b'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $smafe08b = $this->Smafe08b->get($id);
        if ($this->Smafe08b->delete($smafe08b)) {
            $this->Flash->success(__('The smafe08b has been deleted.'));
        } else {
            $this->Flash->error(__('The smafe08b could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
