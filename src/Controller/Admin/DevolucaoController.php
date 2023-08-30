<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class DevolucaoController extends AppController
{
    protected $AtividadeService;

    public function initialize(): void
    {
        parent::initialize();
        $this->AtividadeService = new AtividadeService();
    }

    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => ['Servico', 'StatusAtividade'],
            'conditions' => ['status_atividade_id' => 15],
            'order' => ['data_cadastro' => 'desc']
        ];

        $devolucao = $this->paginate($this->Devolucao);

        $this->set(compact('devolucao'));
    }

    public function edit($id = null)
    {
        $devolucao = $this->Devolucao->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $devolucao = $this->Devolucao->patchEntity($devolucao, $this->request->getData());
            if ($this->Devolucao->save($devolucao)) {
                $this->Flash->success(__('The cd has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cd could not be saved. Please, try again.'));
        }
        $servicos = $this->AtividadeService->servicos_opcoes();
        $this->set(compact('devolucao','servicos'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['get', 'post', 'delete']);
        $devolucao = $this->Devolucao->get($id);

        if ($this->Devolucao->delete($devolucao)) {
            $this->Flash->success(__('Atividade excluída com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir atividade. Tente novamente.'));
        }

        return $this->redirect($this->referer());  // Redireciona para a página que fez a requisição
    }
}
