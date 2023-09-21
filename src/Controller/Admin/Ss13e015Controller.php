<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class Ss13e015Controller extends AppController
    {
    public function index()
    {
        $ss13e015 = $this->paginate($this->Ss13e015);

        $this->set(compact('ss13e015'));
    }

    public function add()
    {
        $ss13e015 = $this->Ss13e015->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['total']  = $data['copias']  * $data['paginas'];

            $ss13e015 = $this->Ss13e015->patchEntity($ss13e015, $data);
            if ($this->Ss13e015->save($ss13e015)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('ss13e015'));
    }

    public function edit($id = null)
    {
        $ss13e015 = $this->Ss13e015->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ss13e015 = $this->Ss13e015->patchEntity($ss13e015, $this->request->getData());
            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['total']  = $data['copias']  * $data['paginas'];

            $ss13e015 = $this->Ss13e015->patchEntity($ss13e015, $data);
            if ($this->Ss13e015->save($ss13e015)) {
                $this->Flash->success(__('Serviço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser editado. Tente novamente.'));
        }
        $this->set(compact('ss13e015'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'get', 'delete']);
        $ss13e015 = $this->Ss13e015->get($id);
        if ($this->Ss13e015->delete($ss13e015)) {
            $this->Flash->success(__('Serviço excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O serviço não pode ser excluído. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function pdf($id = null)
    {
        $ss13e015 = $this->Ss13e015->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('ss13e015'));
    }
}
