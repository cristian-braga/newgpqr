<?php
    namespace App\Controller\Admin;
    use App\Controller\AppController;
    class Smafe008bController extends AppController
{
    public function index()
    {
        $smafe008b = $this->paginate($this->Smafe008b);

        $this->set(compact('smafe008b'));
    }

    public function add()
    {
        $smafe008b = $this->Smafe008b->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['total']  = $data['copias']  * $data['paginas'];

            $smafe008b = $this->Smafe008b->patchEntity($smafe008b, $data);
            if ($this->Smafe008b->save($smafe008b)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('smafe008b'));
    }

    public function edit($id = null)
    {
        $smafe008b = $this->Smafe008b->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $smafe008b = $this->Smafe008b->patchEntity($smafe008b, $this->request->getData());
            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['total']  = $data['copias']  * $data['paginas'];

            $smafe008b = $this->Smafe008b->patchEntity($smafe008b, $data);
            if ($this->Smafe008b->save($smafe008b)) {
                $this->Flash->success(__('Serviço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('smafe008b'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $smafe008b = $this->Smafe008b->get($id);
        if ($this->Smafe008b->delete($smafe008b)) {
            $this->Flash->success(__('Serviço excluído com sucesso'));
        } else {
            $this->Flash->error(__('O serviço não pode ser excluído. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function pdf($id = null)
    {
        $smafe008b = $this->Smafe008b->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('smafe008b'));
    }
}
