<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class Ss13a20Controller extends AppController
{
    public function index()
    {
        $ss13a20 = $this->paginate($this->Ss13a20);

        $this->set(compact('ss13a20'));
    }

    public function add()
    {
        $ss13a20 = $this->Ss13a20->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['capas'] = $data['copias'];
            $data['total']  = $data['copias']  * $data['paginas'];

            $ss13a20 = $this->Ss13a20->patchEntity($ss13a20, $data);
            if ($this->Ss13a20->save($ss13a20)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('ss13a20'));
    }

    public function edit($id = null)
    {
        $ss13a20 = $this->Ss13a20->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ss13a20 = $this->Ss13a20->patchEntity($ss13a20, $this->request->getData());
            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['capas'] = $data['copias'];
            $data['total']  = $data['copias']  * $data['paginas'];

            $ss13a20 = $this->Ss13a20->patchEntity($ss13a20, $data);
            if ($this->Ss13a20->save($ss13a20)) {
                $this->Flash->success(__('O Serviço foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Serviço não foi salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('ss13a20'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'get', 'delete']);
        $ss13a20 = $this->Ss13a20->get($id);
        if ($this->Ss13a20->delete($ss13a20)) {
            $this->Flash->success(__('Excluído com Sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possível excluir. Por favor, tente Novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function pdf($id = null)
    {
        $ss13a20 = $this->Ss13a20->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('ss13a20'));
    }
}