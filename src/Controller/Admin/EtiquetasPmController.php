<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class EtiquetasPmController extends AppController
{
    public function index()
    {
        $etiquetasPm = $this->paginate($this->EtiquetasPm);

        $this->set(compact('etiquetasPm'));
    }

    public function add()
    {
        $etiquetasPm = $this->EtiquetasPm->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['total']  = $data['copias']  * $data['quantidade_etiquetas'];

            $etiquetasPm = $this->EtiquetasPm->patchEntity($etiquetasPm, $data);
            if ($this->EtiquetasPm->save($etiquetasPm)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('etiquetasPm'));
    }

    public function edit($id = null)
    {
        $etiquetasPm = $this->EtiquetasPm->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $etiquetasPm = $this->EtiquetasPm->patchEntity($etiquetasPm, $this->request->getData());
            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['total']  = $data['copias']  * $data['quantidade_etiquetas'];

            $etiquetasPm = $this->EtiquetasPm->patchEntity($etiquetasPm, $data);
            if ($this->EtiquetasPm->save($etiquetasPm)) {
                $this->Flash->success(__('Serviço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser editado. Tente novamente.'));
        }
        $this->set(compact('etiquetasPm'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['get', 'post', 'delete']);
        $etiquetasPm = $this->EtiquetasPm->get($id);
        if ($this->EtiquetasPm->delete($etiquetasPm)) {
            $this->Flash->success(__('Serviço excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O serviço não pode ser excluído. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function pdf($id = null)
    {
        $etiquetasPm = $this->EtiquetasPm->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('etiquetasPm'));
    }
}
