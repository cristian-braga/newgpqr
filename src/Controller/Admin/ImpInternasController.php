<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class ImpInternasController extends AppController
{

    public function index()
    {
        $impInternas = $this->paginate($this->ImpInternas);

        $this->set(compact('impInternas'));
    }

    public function add()
    {
        $impInternas = $this->ImpInternas->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['total']  = $data['documentos']  * $data['copias'];
            $impInternas = $this->ImpInternas->patchEntity($impInternas, $data);
            if ($this->ImpInternas->save($impInternas)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('impInternas'));
    }

    public function edit($id = null)
    {
        $impInternas = $this->ImpInternas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $impInternas = $this->ImpInternas->patchEntity($impInternas, $this->request->getData());
            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['total']  = $data['documentos']  * $data['copias'];
            $impInternas = $this->ImpInternas->patchEntity($impInternas, $data);
            if ($this->ImpInternas->save($impInternas)) {
                $this->Flash->success(__('Serviço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('impInternas'));
    }
    

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $impInterna = $this->ImpInternas->get($id);
        if ($this->ImpInternas->delete($impInterna)) {
            $this->Flash->success(__('The imp interna has been deleted.'));
        } else {
            $this->Flash->error(__('The imp interna could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function pdf($id = null)
    {
        $impInternas = $this->ImpInternas->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('impInternas'));
    }
}
