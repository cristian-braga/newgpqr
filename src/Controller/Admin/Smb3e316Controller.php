<?php
    namespace App\Controller\Admin;
    use App\Controller\AppController;
    use Cake\Datasource\ConnectionManager;

    class Smb3e316Controller extends AppController
    {

    public function index()
    {
        $smb3e316 = $this->paginate($this->Smb3e316);
        $connection = ConnectionManager::get('default');

        $cidades = $connection->execute(
            "SELECT * FROM newgpqr.smb3e316_cidades;"
        )->fetchAll('assoc');

        $this->set(compact('smb3e316'));
    }

    public function add()
    {
        $smb3e316 = $this->Smb3e316->newEmptyEntity();
        $connection = ConnectionManager::get('default');
        $cidades = $connection->execute(
            "SELECT * FROM newgpqr.smb3e316_cidades;"
        )->fetchAll('assoc');
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['capa'] = $data['copias'];
            $data['total']  = $data['copias']  * $data['paginas'];
            $smb3e316 = $this->Smb3e316->patchEntity($smb3e316, $data);
            if ($this->Smb3e316->save($smb3e316)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('smb3e316','cidades'));
    }

    public function edit($id = null)
    {
        $smb3e316 = $this->Smb3e316->get($id, [
            'contain' => [],
        ]);
        $connection = ConnectionManager::get('default');
        $cidades = $connection->execute(
            "SELECT * FROM newgpqr.smb3e316_cidades;"
        )->fetchAll('assoc');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $smb3e316 = $this->Smb3e316->patchEntity($smb3e316, $this->request->getData());
            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['capa'] = $data['copias'];
            $data['total']  = $data['copias']  * $data['paginas'];
        
            $smb3e316 = $this->Smb3e316->patchEntity($smb3e316, $data);
            if ($this->Smb3e316->save($smb3e316)) {
                $this->Flash->success(__('Serviço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('smb3e316','cidades'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'get', 'delete']);
        $smb3e316 = $this->Smb3e316->get($id);
        if ($this->Smb3e316->delete($smb3e316)) {
            $this->Flash->success(__('Serviço excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O serviço não pode ser excluído. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function pdf($id = null)
    {
        $smb3e316 = $this->Smb3e316->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('smb3e316'));
    }
}
