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

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['capa'] = $data['copias'];
            $data['total']  = $data['copias']  * $data['paginas'];

            $sdake05 = $this->Sdake05->patchEntity($sdake05, $data);
            if ($this->Sdake05->save($sdake05)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo. Tente novamente.'));
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
            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['capa'] = $data['copias'];
            $data['total']  = $data['copias']  * $data['paginas'];

            $sdake05 = $this->Sdake05->patchEntity($sdake05, $data);
            if ($this->Sdake05->save($sdake05)) {
                $this->Flash->success(__('O sdake05 foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O sdake05 não foi salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('sdake05'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sdake05 = $this->Sdake05->get($id);
        if ($this->Sdake05->delete($sdake05)) {
            $this->Flash->success(__('Excluído com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possível excluir. Por favor, tente novamente.'));
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
