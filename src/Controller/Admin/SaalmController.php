<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class SaalmController extends AppController
    {

    public function index()
    {
        $this->paginate = [
            'limit' => 25,
            'order' => ['dataAtual' => 'asc']
        ];

        $saalm = $this->paginate($this->Saalm);
        $this->set(compact('saalm'));
    }

    public function add()
    {
        $saalm = $this->Saalm->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['capas'] = $data['copias'];
            $data['capas1'] = $data['copias1']; 
            $data['funcionario'] = 'Itallo';
            $data['capa'] = $data['copias'];
            $data['capa1'] = $data['copias1'];
            $data['total']  = $data['copias']  * $data['paginas'];
            $data['total1'] = $data['copias1'] * $data['paginas1'];
            $data['total2'] = $data['total'] + $data['total1'];
            $data['total3'] = $data['capa'] + $data['capa1'];

            $saalm = $this->Saalm->patchEntity($saalm, $data);
            if ($this->Saalm->save($saalm)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('saalm'));
    }

    public function edit($id = null)
    {
        $saalm = $this->Saalm->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $saalm = $this->Saalm->patchEntity($saalm, $this->request->getData());
            $data = $this->request->getData();

            $data = $this->request->getData();
            $data['capas'] = $data['copias'];
            $data['capas1'] = $data['copias1']; 
            $data['funcionario'] = 'Itallo';
            $data['capa'] = $data['copias'];
            $data['capa1'] = $data['copias1'];
            $data['total']  = $data['copias']  * $data['paginas'];
            $data['total1'] = $data['copias1'] * $data['paginas1'];
            $data['total2'] = $data['total'] + $data['total1'];
            $data['total3'] = $data['capa'] + $data['capa1'];

            $saalm = $this->Saalm->patchEntity($saalm, $data);
            if ($this->Saalm->save($saalm)) {
                $this->Flash->success(__('O serviço foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não foi salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('saalm'));
    }
        
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $saalm = $this->Saalm->get($id);
        if ($this->Saalm->delete($saalm)) {
            $this->Flash->success(__('O serviço foi excluído.'));
        } else {
            $this->Flash->error(__('O serviço não pôde ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function pdf($id = null)
    {
        $saalm = $this->Saalm->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('saalm'));
    }
}