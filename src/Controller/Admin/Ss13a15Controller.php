<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class Ss13a15Controller extends AppController
{
    public function index()
    {
        $ss13a15 = $this->paginate($this->Ss13a15);

        $this->set(compact('ss13a15'));
    }

    public function add()
    {
        $ss13a15 = $this->Ss13a15->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['capas'] = $data['copias'];
            $data['total']  = $data['copias']  * $data['paginas'];

            $ss13a15 = $this->Ss13a15->patchEntity($ss13a15, $data);
            if ($this->Ss13a15->save($ss13a15)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('ss13a15'));
    }

    public function edit($id = null)
    {
        $ss13a15 = $this->Ss13a15->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ss13a15 = $this->Ss13a15->patchEntity($ss13a15, $this->request->getData());
            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['capas'] = $data['copias'];
            $data['total']  = $data['copias']  * $data['paginas'];
            

            $data['totaltudo'] = $data['total'] + $data['total1'] + $data['total2'] + $data['total3'] + $data['total4'];

            $ss13a15 = $this->Ss13a15->patchEntity($ss13a15, $data);
            if ($this->Ss13a15->save($ss13a15)) {
                $this->Flash->success(__('Serviço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('ss13a15'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ss13a15 = $this->Ss13a15->get($id);
        if ($this->Ss13a15->delete($ss13a15)) {
            $this->Flash->success(__('Serviço excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O serviço não pode ser excluído. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function pdf($id = null)
    {
        $ss13a15 = $this->Ss13a15->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('ss13a15'));
    }
}
