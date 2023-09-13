<?php
    namespace App\Controller\Admin;
    use App\Controller\AppController;
    class EncadernacaoController extends AppController
{
    public function index()
    {
        $encadernacao = $this->paginate($this->Encadernacao);

        $this->set(compact('encadernacao'));
    }

    public function add()
    {
        $encadernacao = $this->Encadernacao->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['capas'] = $data['copias'];
            $data['total']  = $data['copias']  * $data['paginas'];
            
            $encadernacao = $this->Encadernacao->patchEntity($encadernacao, $data);
            if ($this->Encadernacao->save($encadernacao)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('encadernacao'));
    }

    public function edit($id = null)
    {
        $encadernacao = $this->Encadernacao->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $encadernacao = $this->Encadernacao->patchEntity($encadernacao, $data = $this->request->getData());
            $data['funcionario'] = 'Itallo';
            $data['capas'] = $data['copias'];
            $data['total']  = $data['copias']  * $data['paginas'];
            
            $encadernacao = $this->Encadernacao->patchEntity($encadernacao, $data);
            if ($this->Encadernacao->save($encadernacao)) {
                $this->Flash->success(__('Serviço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser editado. Tente novamente.'));
        }
        $this->set(compact('encadernacao'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $encadernacao = $this->Encadernacao->get($id);
        if ($this->Encadernacao->delete($encadernacao)) {
            $this->Flash->success(__('Serviço excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O serviço não pode ser excluído. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function pdf($id = null)
    {
        $encadernacao = $this->Encadernacao->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('encadernacao'));
    }
}
