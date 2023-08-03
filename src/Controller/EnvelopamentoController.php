<?php
declare(strict_types=1);

namespace App\Controller;

class EnvelopamentoController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Envelopamento.status_atividade_id' => 5],
            'sortableFields' => ['Atividade.data_cadastro'],
            'order' => ['Atividade.data_cadastro' => 'desc']
        ];
        
        $envelopamento = $this->paginate($this->Envelopamento);

        $this->set(compact('envelopamento'));
    }

    public function edit($id = null)
    {
        $envelopamento = $this->Envelopamento->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $envelopamento = $this->Envelopamento->patchEntity($envelopamento, $this->request->getData());
            if ($this->Envelopamento->save($envelopamento)) {
                $this->Flash->success(__('The envelopamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The envelopamento could not be saved. Please, try again.'));
        }
        $atividade = $this->Envelopamento->Atividade->find('list', ['limit' => 200])->all();
        $servico = $this->Envelopamento->Servico->find('list', ['limit' => 200])->all();
        $statusAtividade = $this->Envelopamento->StatusAtividade->find('list', ['limit' => 200])->all();
        $this->set(compact('envelopamento', 'atividade', 'servico', 'statusAtividade'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $envelopamento = $this->Envelopamento->get($id);
        if ($this->Envelopamento->delete($envelopamento)) {
            $this->Flash->success(__('Registro excluído com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir registro. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function atualizaEnvelopamento()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData('selecionados');

            for ($i = 0; $i < count($dados); $i++) {
                $registroEnvelopamento = $this->Envelopamento->get($dados[$i]);

                $registroEnvelopamento->funcionario = 'CristianEnv';
                $registroEnvelopamento->data_envelopamento = date('Y-m-d H:i:s');
                $registroEnvelopamento->status_atividade_id = 6;  // Envelopado
                
                $this->Envelopamento->save($registroEnvelopamento); 

                $this->novaTriagem($registroEnvelopamento);
            }
    
            $this->Flash->success('Registro(s) lançado(s) com sucesso!');

            return $this->redirect(['action' => 'index']);
        }
    }

    public function novaTriagem($registroEnvelopamento)
    {
        $triagemTable = $this->getTableLocator()->get('Triagem');
        $triagem = $triagemTable->newEmptyEntity();

        $nova_triagem = [
            'funcionario' => 'CristianEnv',
            'atividade_id' => $registroEnvelopamento->atividade_id,
            'status_atividade_id' => 7  // Aguardando Triagem
        ];

        $triagem = $triagemTable->patchEntity($triagem, $nova_triagem);
        $triagemTable->save($triagem); 
    }

    // TELA DE SERVIÇOS ENVELOPADOS
    public function servicosEnvelopados()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Envelopamento.status_atividade_id' => 6],
            'order' => ['data_envelopamento' => 'desc']
        ];
        
        $envelopamento = $this->paginate($this->Envelopamento);

        $this->set(compact('envelopamento'));
    }
}
