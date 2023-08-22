<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Sdake64 Controller
 *
 * @property \App\Model\Table\Sdake64Table $Sdake64
 * @method \App\Model\Entity\Sdake64[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Sdake64Controller extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $sdake64 = $this->paginate($this->Sdake64);

        $this->set(compact('sdake64'));
    }

    /**
     * View method
     *
     * @param string|null $id Sdake64 id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sdake64 = $this->Sdake64->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('sdake64'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sdake64 = $this->Sdake64->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();

            $data['funcionario'] = 'Itallo';
            $data['sistema'] = 'Sdake64';

            $data['total']  = $data['copias']  * $data['paginas'];
            $data['total1'] = $data['copias1'] * $data['paginas1'];
            $data['total2'] = $data['copias2'] * $data['paginas2'];
            $data['total3'] = $data['copias3'] * $data['paginas3'];
            $data['total4'] = $data['copias4'] * $data['paginas4'];

            $data['totaltudo'] = $data['total'] + $data['total1'] + $data['total2'] + $data['total3'] + $data['total4'];

            $sdake64 = $this->Sdake64->patchEntity($sdake64, $data);
            if ($this->Sdake64->save($sdake64)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('sdake64'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sdake64 id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sdake64 = $this->Sdake64->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sdake64 = $this->Sdake64->patchEntity($sdake64, $this->request->getData());
            $data = $this->request->getData();

            $data['funcionario'] = 'Itallo';
            $data['sistema'] = 'Sdake64';

            $data['total']  = $data['copias']  * $data['paginas'];
            $data['total1'] = $data['copias1'] * $data['paginas1'];
            $data['total2'] = $data['copias2'] * $data['paginas2'];
            $data['total3'] = $data['copias3'] * $data['paginas3'];
            $data['total4'] = $data['copias4'] * $data['paginas4'];

            $data['totaltudo'] = $data['total'] + $data['total1'] + $data['total2'] + $data['total3'] + $data['total4'];

            $sdake64 = $this->Sdake64->patchEntity($sdake64, $data);
            if ($this->Sdake64->save($sdake64)) {
                $this->Flash->success(__('O sdake64 foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O sdake64 não foi salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('sdake64'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sdake64 id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sdake64 = $this->Sdake64->get($id);
        if ($this->Sdake64->delete($sdake64)) {
            $this->Flash->success(__('O sdake64 foi excluido.'));
        } else {
            $this->Flash->error(__('O sdake64 não foi excluido. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function pdf($id = null)
    {
        $sdake64 = $this->Sdake64->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('sdake64'));
    }
}
