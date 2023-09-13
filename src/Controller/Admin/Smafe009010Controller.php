<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class Smafe009010Controller extends AppController
    {

    public function index()
    {
        $smafe009010 = $this->paginate($this->Smafe009010);

        $this->set(compact('smafe009010'));
    }

    public function add()
    {
        $smafe009010 = $this->Smafe009010->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';

            $smafe009010 = $this->Smafe009010->patchEntity($smafe009010, $data);
            if ($this->Smafe009010->save($smafe009010)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('smafe009010'));
    }

    public function edit($id = null)
    {
        $smafe009010 = $this->Smafe009010->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $smafe009010 = $this->Smafe009010->patchEntity($smafe009010, $this->request->getData());
            if ($this->Smafe009010->save($smafe009010)) {
                $this->Flash->success(__('Serviço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser editado. Tente novamente.'));
        }
        $this->set(compact('smafe009010'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'get', 'delete']);
        $smafe009010 = $this->Smafe009010->get($id);
        if ($this->Smafe009010->delete($smafe009010)) {
            $this->Flash->success(__('Serviço excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O serviço não pode ser excluído. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function pdf($id = null)
    {
        $smafe009010 = $this->Smafe009010->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('smafe009010'));
    }
}
