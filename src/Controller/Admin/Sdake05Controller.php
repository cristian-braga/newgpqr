<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class Sdake05Controller extends AppController
{
    public function index()
    {
        $sdake05 = $this->paginate($this->Sdake05);

        $this->set(compact('sdake05'));
    }

    public function add()
    {
        $sdake05 = $this->Sdake05->newEmptyEntity();
        if ($this->request->is('post')) {
            $sdake05 = $this->Sdake05->patchEntity($sdake05, $this->request->getData());
            if ($this->Sdake05->save($sdake05)) {
                $this->Flash->success(__('The sdake05 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sdake05 could not be saved. Please, try again.'));
        }
        $this->set(compact('sdake05'));
    }

    public function edit($id = null)
    {
        $sdake05 = $this->Sdake05->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sdake05 = $this->Sdake05->patchEntity($sdake05, $this->request->getData());
            if ($this->Sdake05->save($sdake05)) {
                $this->Flash->success(__('The sdake05 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sdake05 could not be saved. Please, try again.'));
        }
        $this->set(compact('sdake05'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sdake05 = $this->Sdake05->get($id);
        if ($this->Sdake05->delete($sdake05)) {
            $this->Flash->success(__('The sdake05 has been deleted.'));
        } else {
            $this->Flash->error(__('The sdake05 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function pdf($id = null)
    {
        $sdake05 = $this->Sdake05->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('sdake05'));
    }
}
