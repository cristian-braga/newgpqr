<?php
    declare(strict_types=1);
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class Smafe09e10Controller extends AppController
{

    public function index()
    {
        $smafe09e10 = $this->paginate($this->Smafe09e10);

        $this->set(compact('smafe09e10'));
    }


    public function add()
    {
        $smafe09e10 = $this->Smafe09e10->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Pagodeiro';
    

            $smafe09e10 = $this->Smafe09e10->patchEntity($smafe09e10, $data);
            if ($this->Smafe09e10->save($smafe09e10)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('smafe09e10'));
    }

    public function edit($id = null)
    {
        $smafe09e10 = $this->Smafe09e10->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $smafe09e10 = $this->Smafe09e10->patchEntity($smafe09e10, $this->request->getData());
            if ($this->Smafe09e10->save($smafe09e10)) {
                $this->Flash->success(__('O Smafe009/10 foi editado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Smafe009/10 não pôde ser editado. Por favor, tente novamente.'));
        }
        $this->set(compact('smafe09e10'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $smafe09e10 = $this->Smafe09e10->get($id);
        if ($this->Smafe09e10->delete($smafe09e10)) {
            $this->Flash->success(__('O Smafe009/10 foi excluído.'));
        } else {
            $this->Flash->error(__('O Smafe009/10 não pôde ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function pdf($id = null)
    {
        $smafe09e10 = $this->Smafe09e10->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('smafe09e10'));
    }
}
