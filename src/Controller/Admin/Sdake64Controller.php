<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class Sdake64Controller extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 25,
            'order' => ['dataAtual' => 'asc']
        ];

        $sdake64 = $this->paginate($this->Sdake64);
        $this->set(compact('sdake64'));
    }

    public function add()
    {
        $sdake64 = $this->Sdake64->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
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

    public function edit($id = null)
    {
        $sdake64 = $this->Sdake64->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sdake64 = $this->Sdake64->patchEntity($sdake64, $this->request->getData());
            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            $data['total']  = $data['copias']  * $data['paginas'];
            $data['total1'] = $data['copias1'] * $data['paginas1'];
            $data['total2'] = $data['copias2'] * $data['paginas2'];
            $data['total3'] = $data['copias3'] * $data['paginas3'];
            $data['total4'] = $data['copias4'] * $data['paginas4'];
            

            $data['totaltudo'] = $data['total'] + $data['total1'] + $data['total2'] + $data['total3'] + $data['total4'];

            $sdake64 = $this->Sdake64->patchEntity($sdake64, $data);
            if ($this->Sdake64->save($sdake64)) {
                $this->Flash->success(__('Serviço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('sdake64'));
    }
    
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sdake64 = $this->Sdake64->get($id);
        if ($this->Sdake64->delete($sdake64)) {
            $this->Flash->success(__('Serviço excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O serviço não pode ser excluído. Tente novamente.'));
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
