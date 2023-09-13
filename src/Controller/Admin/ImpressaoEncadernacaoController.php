<?php
    namespace App\Controller\Admin;

    use App\Controller\AppController;

    class ImpressaoEncadernacaoController extends AppController
    {
    public function index()
    {
        $impressaoEncadernacao = $this->paginate($this->ImpressaoEncadernacao);

        $this->set(compact('impressaoEncadernacao'));
    }

    public function pdf($id = null)
    {
        $impressaoEncadernacao = $this->ImpressaoEncadernacao->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('impressaoEncadernacao'));
    }

    public function add()
    {
        $impressaoEncadernacao = $this->ImpressaoEncadernacao->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['funcionario'] = 'Pagodeiro';
            $data['total_imp']  = $data['copias_imp']  * $data['paginas_imp'];

            $impressaoEncadernacao = $this->ImpressaoEncadernacao->patchEntity($impressaoEncadernacao, $data, $this->request->getData());
            if ($this->ImpressaoEncadernacao->save($impressaoEncadernacao)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('impressaoEncadernacao'));
    }

    public function edit($id = null)
    {
        $impressaoEncadernacao = $this->ImpressaoEncadernacao->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $impressaoEncadernacao = $this->ImpressaoEncadernacao->patchEntity($impressaoEncadernacao, $this->request->getData());
            $data = $this->request->getData();
            $data['funcionario'] = 'Pagodeiro';
            $data['total_imp']  = $data['copias_imp']  * $data['paginas_imp'];
            $impressaoEncadernacao = $this->ImpressaoEncadernacao->patchEntity($impressaoEncadernacao, $data);
            if ($this->ImpressaoEncadernacao->save($impressaoEncadernacao)) {
                $this->Flash->success(__('Serviço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser editado. Tente novamente.'));
        }
        $this->set(compact('impressaoEncadernacao'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $impressaoEncadernacao = $this->ImpressaoEncadernacao->get($id);
        if ($this->ImpressaoEncadernacao->delete($impressaoEncadernacao)) {
            $this->Flash->success(__('Serviço excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O serviço não pode ser excluído. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
