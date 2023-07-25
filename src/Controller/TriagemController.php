<?php
declare(strict_types=1);

namespace App\Controller;

class TriagemController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => ['Atividade', 'Servico', 'StatusAtividade'],
            'conditions' => ['Triagem.status_atividade_id' => 7],
            'order' => ['data_cadastro' => 'desc']
        ];

        $triagem = $this->paginate($this->Triagem);

        $this->set(compact('triagem'));
    }

    public function edit($id = null)
    {
        $triagem = $this->Triagem->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $triagem = $this->Triagem->patchEntity($triagem, $this->request->getData());
            if ($this->Triagem->save($triagem)) {
                $this->Flash->success(__('The triagem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The triagem could not be saved. Please, try again.'));
        }
        $atividade = $this->Triagem->Atividade->find('list', ['limit' => 200])->all();
        $servico = $this->Triagem->Servico->find('list', ['limit' => 200])->all();
        $statusAtividade = $this->Triagem->StatusAtividade->find('list', ['limit' => 200])->all();
        $this->set(compact('triagem', 'atividade', 'servico', 'statusAtividade'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $triagem = $this->Triagem->get($id);
        if ($this->Triagem->delete($triagem)) {
            $this->Flash->success(__('Registro excluído com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir registro. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function atualizaTriagem()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData('selecionados');

            for ($i = 0; $i < count($dados); $i++) {
                $registroTriagem = $this->Triagem->get($dados[$i]);

                $registroTriagem->funcionario = 'CristianTri';
                $registroTriagem->data_triagem = date('Y-m-d H:i:s');
                $registroTriagem->status_atividade_id = 8;
                
                $this->Triagem->save($registroTriagem);

                $this->novaExpedicao($registroTriagem);
            }
    
            $this->Flash->success('Registro(s) lançado(s) com sucesso!');
            return $this->redirect(['action' => 'index']);
        }
    }

    public function novaExpedicao($registroTriagem)
    {
        $expedicaoTable = $this->getTableLocator()->get('Expedicao');
        $expedicao = $expedicaoTable->newEmptyEntity();

        $nova_expedicao = [
            'funcionario' => 'CristianTri',
            'atividade_id' => $registroTriagem->atividade_id,
            'servico_id' => $registroTriagem->servico_id,
            'status_atividade_id' => 9
        ];

        $expedicao = $expedicaoTable->patchEntity($expedicao, $nova_expedicao);
        $expedicaoTable->save($expedicao); 
    }

    // TELA DE SERVIÇOS TRIADOS
    public function servicosTriados()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => ['Atividade', 'Servico', 'StatusAtividade'],
            'conditions' => ['Triagem.status_atividade_id' => 8],
            'order' => ['data_triagem' => 'desc']
        ];

        $triagem = $this->paginate($this->Triagem);

        $this->set(compact('triagem'));
    }
}
