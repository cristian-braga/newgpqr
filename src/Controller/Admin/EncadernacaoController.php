<?php
    namespace App\Controller\Admin;
    use App\Controller\AppController;
    class EncadernacaoController extends AppController
{
    public function index()
    {
        $encadernacao = $this->paginate($this->Encadernacao);
        
        $this->set(compact('encadernacao'));
    }

    public function add()
    {
        $encadernacao = $this->Encadernacao->newEmptyEntity();
        if ($this->request->is('post')) {
            $encadernacao = $this->Encadernacao->patchEntity($encadernacao, $this->request->getData());
            if ($this->Encadernacao->save($encadernacao)) {
                $this->Flash->success(__('The encadernacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The encadernacao could not be saved. Please, try again.'));
        }
        $this->set(compact('encadernacao'));
    }

    public function edit($id = null)
    {
        $encadernacao = $this->Encadernacao->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $encadernacao = $this->Encadernacao->patchEntity($encadernacao, $this->request->getData());
            if ($this->Encadernacao->save($encadernacao)) {
                $this->Flash->success(__('The encadernacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The encadernacao could not be saved. Please, try again.'));
        }
        $this->set(compact('encadernacao'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $encadernacao = $this->Encadernacao->get($id);
        if ($this->Encadernacao->delete($encadernacao)) {
            $this->Flash->success(__('The encadernacao has been deleted.'));
        } else {
            $this->Flash->error(__('The encadernacao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function pdf($id = null)
    {
        $encadernacao = $this->Encadernacao->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('encadernacao'));
    }
}
