<?php
declare(strict_types=1);

namespace App\Controller;

class ImpressaoController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Impressao.status_atividade_id' => 3],
            'sortableFields' => ['Atividade.data_cadastro'],
            'order' => ['Atividade.data_cadastro' => 'desc']
        ];

        $impressao = $this->paginate($this->Impressao);

        $balanco = $this->Impressao->dadosImpressoras()->toArray();

        $nuv_1 = $balanco[0];
        $nuv_2 = $balanco[1];

        $this->set(compact('impressao', 'nuv_1', 'nuv_2'));
    }

    public function edit($id = null)
    {
        $impressao = $this->Impressao->get($id, [
            'contain' => ['Atividade' => ['Servico']],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $atividade = $this->Atividade->patchEntity($impressao, $this->request->getData('Atividade'));

            if ($this->Atividade->save($atividade)) {
                $impressao = $this->Impressao->patchEntity($impressao, $this->request->getData());

                if ($this->Impressao->save($impressao)) {
                    $this->Flash->success(__('The impressao has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The impressao could not be saved. Please, try again.'));
                }
            } else {
                $this->Flash->error(__('The impressao could not be saved. Please, try again.'));
            }
        }

        $servico = $this->Impressao->Atividade->Servico
            ->find('list', ['keyField' => 'id', 'valueField' => 'nome_servico'])
            ->where(['ativo' => 'Sim'])
            ->order(['nome_servico' => 'asc'])
            ->all();

        $impressora = $this->Impressao->Impressora->find('list', ['keyField' => 'id', 'valueField' => 'nome_impressora'])->all();

        $this->set(compact('impressao', 'servico', 'impressora'));
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
                $query = $this->Impressao->get($id, [
                    'contain' => ['Atividade' => ['Servico'], 'StatusAtividade', 'Impressora']
                ]);

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

                $this->novaConferencia($registroImpressao); 
            }
    
            $this->Flash->success('Registro(s) lançado(s) com sucesso!');

            return $this->redirect(['action' => 'index']);
        }
    }

    public function novaConferencia($registroImpressao)
    {
        $conferenciaTable = $this->getTableLocator()->get('Conferencia');
        $conferencia = $conferenciaTable->newEmptyEntity();

        $nova_conferencia = [
            'funcionario' => 'CristianImp',
            'atividade_id' => $registroImpressao->atividade_id,
            'status_atividade_id' => 13
        ];

        $conferencia = $conferenciaTable->patchEntity($conferencia, $nova_conferencia);
        $conferenciaTable->save($conferencia); 
    }

    // TELA DE SERVIÇOS IMPRESSOS
    public function servicosImpressos()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade',
                'Impressora'
            ],
            'conditions' => ['Impressao.status_atividade_id' => 4],
            'order' => ['data_impressao' => 'desc']
        ];

        $impressao = $this->paginate($this->Impressao);

        $this->set(compact('impressao'));
    }
}
