<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class RotulosCorreiosController extends AppController
    {
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $rotulosCorreios = $this->paginate($this->RotulosCorreios);

        $this->set(compact('rotulosCorreios'));
    }

    public function add()
    {
        
        $rotulosCorreio = $this->RotulosCorreios->newEmptyEntity();
        $servicos = $this->RotulosCorreios->queryServicos();
        if ($this->request->is('post')) {
            $rotulosCorreio = $this->RotulosCorreios->patchEntity($rotulosCorreio, $this->request->getData());
            if ($this->RotulosCorreios->save($rotulosCorreio)) {
                $this->Flash->success(__('The rotulos correio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rotulos correio could not be saved. Please, try again.'));
        }
        $this->set(compact('rotulosCorreio','servicos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rotulos Correio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servicos = $this->RotulosCorreios->queryServicos();
        $rotulosCorreio = $this->RotulosCorreios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rotulosCorreio = $this->RotulosCorreios->patchEntity($rotulosCorreio, $this->request->getData());
            if ($this->RotulosCorreios->save($rotulosCorreio)) {
                $this->Flash->success(__('The rotulos correio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rotulos correio could not be saved. Please, try again.'));
        }
        $this->set(compact('rotulosCorreio','servicos'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'get', 'delete']);
        $rotulosCorreio = $this->RotulosCorreios->get($id);
        if ($this->RotulosCorreios->delete($rotulosCorreio)) {
            $this->Flash->success(__('The rotulos correio has been deleted.'));
        } else {
            $this->Flash->error(__('The rotulos correio could not be deleted. Please, try again.'));
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
}
