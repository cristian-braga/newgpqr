<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;
    use App\Model\Entity\RotulosCorreio;

    class RotulosCorreiosController extends AppController
    {

    public function index()
    {

        $this->paginate = [
            'limit' => 20,
            'conditions' => ['status_rotulo' => 'RotulosCorreio'],
            'order' => ['data_rotulo' => 'desc']
        ];

        $rotulosCorreios = $this->paginate($this->RotulosCorreios);
        $this->set(compact('rotulosCorreios'));       
    }

    public function index1()
    {

        $this->paginate = [
            'limit' => 20,
            'conditions' => ['status_rotulo' => 'RotulosGral'],
            'order' => ['data_rotulo' => 'desc']
        ];

        $rotulosCorreios = $this->paginate($this->RotulosCorreios);
        $this->set(compact('rotulosCorreios'));       
    }

    public function add()
    {
        $servicos = $this->RotulosCorreios->queryServicos();
        $rotulosCorreios = $this->RotulosCorreios->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['status_rotulo'] = 'RotulosCorreio';
            $data['data_rotulo'] = date('Y-m-d');
            $rotulosCorreios = $this->RotulosCorreios->patchEntity($rotulosCorreios, $data);
            if ($this->RotulosCorreios->save($rotulosCorreios)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('rotulosCorreios','servicos'));
    }

    public function add1()
    {
        $servicos = $this->RotulosCorreios->queryServicos();
        $rotulosCorreios = $this->RotulosCorreios->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['status_rotulo'] = 'RotulosGral';
            $data['data_rotulo'] = date('Y-m-d');
            if($rotulosCorreios['destino'] == 'CTC BH MG LOCAL'){
                $data['cep_inicial'] == '30.000-000';
                $data['cep_final'] == '34.999-999';
            }
            elseif ($rotulosCorreios['destino'] == 'CTC BH MG ESTADUAL'){
                $data['cep_inicial'] == '35.000-000';
                $data['cep_final'] == '39.999-999';
            }
            else{
                $data['cep_inicial'] == '00.000-000 a 29.999-999';
                $data['cep_final'] == '40.000-000 a 99.999-999';
            }
            $rotulosCorreios = $this->RotulosCorreios->patchEntity($rotulosCorreios, $data);
            if ($this->RotulosCorreios->save($rotulosCorreios)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('rotulosCorreios','servicos'));
    }

    public function edit($id = null)
    {
        $rotulosCorreios = $this->RotulosCorreios->get($id, [
            'contain' => [],
        ]);
        $servicos = $this->RotulosCorreios->queryServicos();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rotulosCorreios = $this->RotulosCorreios->patchEntity($rotulosCorreios, $this->request->getData());
            $data = $this->request->getData();

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['status_rotulo'] = 'RotulosCorreio';
            $data['data_rotulo'] = date('Y-m-d');
            $rotulosCorreios = $this->RotulosCorreios->patchEntity($rotulosCorreios, $data);
            if ($this->RotulosCorreios->save($rotulosCorreios)) {
                $this->Flash->success(__('Serviço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser editado. Tente novamente.'));
        }
        $this->set(compact('rotulosCorreios','servicos'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'get', 'delete']);
        $rotulosCorreio = $this->RotulosCorreios->get($id);
        if ($this->RotulosCorreios->delete($rotulosCorreio)) {
            $this->Flash->success(__('Serviço excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O serviço não pode ser excluído. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function pdf($id = null)
    {
        $rotulosCorreio = $this->RotulosCorreios->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('rotulosCorreio'));
    }

    public function pdf1($id = null)
    {
        $rotulosCorreios = $this->RotulosCorreios->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('rotulosCorreios'));
    }
}