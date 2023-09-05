<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class Sdg1Controller extends AppController
{

    public function index()
    {
        $sdg1 = $this->paginate($this->Sdg1);

        $this->set(compact('sdg1'));
    }

    public function add()
    {
        $sdg1 = $this->Sdg1->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['total']  = $data['copias']  * $data['paginas'];
            $data['capa'] = $data['copias'];
            $sdg1 = $this->Sdg1->patchEntity($sdg1, $data);
            if ($this->Sdg1->save($sdg1)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('sdg1'));
    }

    public function edit($id = null)
    {
        $sdg1 = $this->Sdg1->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sdg1 = $this->Sdg1->patchEntity($sdg1, $this->request->getData());
            if ($this->Sdg1->save($sdg1)) {
                $this->Flash->success(__('The sdg1 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sdg1 could not be saved. Please, try again.'));
        }
        $this->set(compact('sdg1'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sdg1 = $this->Sdg1->get($id);
        if ($this->Sdg1->delete($sdg1)) {
            $this->Flash->success(__('The sdg1 has been deleted.'));
        } else {
            $this->Flash->error(__('The sdg1 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function pdf($id = null)
    {
        $sdg1 = $this->Sdg1->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('sdg1'));
    }
}
