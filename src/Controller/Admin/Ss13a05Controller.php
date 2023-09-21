<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class Ss13a05Controller extends AppController
    {

    public function index()
    {
        $ss13a05 = $this->paginate($this->Ss13a05);

        $this->set(compact('ss13a05'));
    }

    public function pdf($id = null)
    {
        $ss13a05 = $this->Ss13a05->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('ss13a05'));
    }

    public function add()
    {
        $ss13a05 = $this->Ss13a05->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Pagodeiro';
            $data['capas'] = $data['copias'];
            $data['total']  = $data['copias']  * $data['paginas'];
            $ss13a05 = $this->Ss13a05->patchEntity($ss13a05, $data);
            if ($this->Ss13a05->save($ss13a05)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('ss13a05'));
    }

    public function edit($id = null)
    {
        $ss13a05 = $this->Ss13a05->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            
            $ss13a05 = $this->Ss13a05->patchEntity($ss13a05, $this->request->getData());
            $data = $this->request->getData();
            $data['funcionario'] = 'Pagodeiro';
            $data['capas'] = $data['copias'];
            $data['total']  = $data['copias']  * $data['paginas'];
            $ss13a05 = $this->Ss13a05->patchEntity($ss13a05, $data);
            if ($this->Ss13a05->save($ss13a05)) {
                $this->Flash->success(__('Serviço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser editado. Tente novamente.'));
        }
        $this->set(compact('ss13a05'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'get', 'delete']);
        $ss13a05 = $this->Ss13a05->get($id);
        if ($this->Ss13a05->delete($ss13a05)) {
            $this->Flash->success(__('Serviço excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O serviço não pode ser excluído. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}