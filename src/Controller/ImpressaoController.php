<?php
declare(strict_types=1);

namespace App\Controller;

class ImpressaoController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => ['Atividade', 'Servico', 'StatusAtividade'],
            'conditions' => ['Impressao.status_atividade_id' => 3],
            'sortableFields' => ['Atividade.data_cadastro'],
            'order' => ['Atividade.data_cadastro' => 'desc']
        ];

        $impressao = $this->paginate($this->Impressao);

        $this->set(compact('impressao'));
    }

    public function edit($id = null)
    {
        $impressao = $this->Impressao->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $impressao = $this->Impressao->patchEntity($impressao, $this->request->getData());
            if ($this->Impressao->save($impressao)) {
                $this->Flash->success(__('The impressao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The impressao could not be saved. Please, try again.'));
        }
        $atividade = $this->Impressao->Atividade->find('list', ['limit' => 200])->all();
        $servico = $this->Impressao->Servico->find('list', ['limit' => 200])->all();
        $statusAtividade = $this->Impressao->StatusAtividade->find('list', ['limit' => 200])->all();
        $impressora = $this->Impressao->Impressora->find('list', ['limit' => 200])->all();
        $this->set(compact('impressao', 'atividade', 'servico', 'statusAtividade', 'impressora'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $impressao = $this->Impressao->get($id);
        if ($this->Impressao->delete($impressao)) {
            $this->Flash->success(__('Registro excluído com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir registro. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function selecionaImpressora()
    {
        if ($this->request->is('post')) {
            $selecionados = $this->request->getData('selecionados');
            $servicos = [];
    
            foreach ($selecionados as $id) {
                $query = $this->Impressao->get($id, ['contain' => ['Atividade', 'Servico', 'StatusAtividade', 'Impressora']]);
                $servicos[] = $query;
            }
        }

        $this->set(compact('servicos'));
    }

    public function atualizaImpressao()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            for ($i = 0; $i < count($dados['servico_id']); $i++) {
                $registroImpressao = $this->Impressao->get($dados['servico_id'][$i]);

                $registroImpressao->funcionario = 'CristianImp';
                $registroImpressao->data_impressao = date('Y-m-d H:i:s');
                $registroImpressao->status_atividade_id = 4;
                $registroImpressao->impressora_id = $dados['impressora'][$i];
                
                $this->Impressao->save($registroImpressao);

                $this->novoEnvelopamento($registroImpressao); 
            }
    
            $this->Flash->success('Registro(s) lançado(s) com sucesso!');

            return $this->redirect(['action' => 'index']);
        }
    }

    public function novoEnvelopamento($registroImpressao)
    {
        $envelopamentoTable = $this->getTableLocator()->get('Envelopamento');
        $envelopamento = $envelopamentoTable->newEmptyEntity();

        $novo_envelopamento = [
            'funcionario' => 'CristianImp',
            'atividade_id' => $registroImpressao->atividade_id,
            'servico_id' => $registroImpressao->servico_id,
            'status_atividade_id' => 5
        ];

        $envelopamento = $envelopamentoTable->patchEntity($envelopamento, $novo_envelopamento);
        $envelopamentoTable->save($envelopamento); 
    }

    // TELA DE SERVIÇOS IMPRESSOS
    public function servicosImpressos()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => ['Atividade', 'Servico', 'StatusAtividade', 'Impressora'],
            'conditions' => ['Impressao.status_atividade_id' => 4],
            'order' => ['data_impressao' => 'desc']
        ];

        $impressao = $this->paginate($this->Impressao);

        $this->set(compact('impressao'));
    }
}
