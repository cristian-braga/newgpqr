<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class Smb3e329Controller extends AppController
    {

    public function index()
    {
        $smb3e329 = $this->paginate($this->Smb3e329);

        $this->set(compact('smb3e329'));
    }

    public function add()
    {
        $smb3e329 = $this->Smb3e329->newEmptyEntity();
        $cidades = $this->Smb3e329->queryCidades();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['capa'] = $data['copias'];
            $data['total']  = $data['copias']  * $data['paginas'];
            $smb3e329 = $this->Smb3e329->patchEntity($smb3e329, $data);
            if ($this->Smb3e329->save($smb3e329)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('smb3e329','cidades'));
    }

    public function edit($id = null)
    {
        $smb3e329 = $this->Smb3e329->get($id, [
            'contain' => [],
        ]);
        $cidades = $this->Smb3e329->queryCidades();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $smb3e329 = $this->Smb3e329->patchEntity($smb3e329, $this->request->getData());
            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['capa'] = $data['copias'];
            $data['total']  = $data['copias']  * $data['paginas'];
        
            $smb3e329 = $this->Smb3e329->patchEntity($smb3e329, $data);
            if ($this->Smb3e329->save($smb3e329)) {
                $this->Flash->success(__('Serviço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('smb3e329','cidades'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $smb3e329 = $this->Smb3e329->get($id);
        if ($this->Smb3e329->delete($smb3e329)) {
            $this->Flash->success(__('The smb3e329 has been deleted.'));
        } else {
            $this->Flash->error(__('The smb3e329 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function pdf($id = null)
    {
        $smb3e329 = $this->Smb3e329->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('smb3e329'));
    }
}
