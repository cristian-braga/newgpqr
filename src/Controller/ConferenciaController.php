<?php
declare(strict_types=1);

namespace App\Controller;

class ConferenciaController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Conferencia.status_atividade_id' => 13],
            'order' => ['data_cadastro' => 'desc']
        ];

        $conferencia = $this->paginate($this->Conferencia);

        $this->set(compact('conferencia'));
    }

    public function edit($id = null)
    {
        $conferencia = $this->Conferencia->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conferencia = $this->Conferencia->patchEntity($conferencia, $this->request->getData());
            if ($this->Conferencia->save($conferencia)) {
                $this->Flash->success(__('The conferencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conferencia could not be saved. Please, try again.'));
        }
        $atividade = $this->Conferencia->Atividade->find('list', ['limit' => 200])->all();
        $statusAtividade = $this->Conferencia->StatusAtividade->find('list', ['limit' => 200])->all();
        $this->set(compact('conferencia', 'atividade', 'statusAtividade'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conferencia = $this->Conferencia->get($id);
        if ($this->Conferencia->delete($conferencia)) {
            $this->Flash->success(__('Registro excluído com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir registro. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function atualizaConferencia()
    {
        if ($this->request->is('post')) {
            $dados = $this->request->getData('selecionados');

            for ($i = 0; $i < count($dados); $i++) {
                $registroConferencia = $this->Conferencia->get($dados[$i]);

                $registroConferencia->funcionario = 'CristianConf';
                $registroConferencia->data_conferencia = date('Y-m-d H:i:s');
                $registroConferencia->status_atividade_id = 14;
                
                $this->Conferencia->save($registroConferencia); 

                $this->novoEnvelopamento($registroConferencia);
            }
    
            $this->Flash->success('Registro(s) lançado(s) com sucesso!');

            return $this->redirect(['action' => 'index']);
        }
    }

    public function novoEnvelopamento($registroConferencia)
    {
        $envelopamentoTable = $this->getTableLocator()->get('Envelopamento');
        $envelopamento = $envelopamentoTable->newEmptyEntity();

        $novo_envelopamento = [
            'funcionario' => 'CristianImp',
            'atividade_id' => $registroConferencia->atividade_id,
            'status_atividade_id' => 5
        ];

        $envelopamento = $envelopamentoTable->patchEntity($envelopamento, $novo_envelopamento);
        $envelopamentoTable->save($envelopamento); 
    }

    // TELA DE SERVIÇOS CONFERIDOS
    public function servicosConferidos()
    {
        $this->paginate = [
            'limit' => 20,
            'contain' => [
                'Atividade' => ['Servico'],
                'StatusAtividade'
            ],
            'conditions' => ['Conferencia.status_atividade_id' => 14],
            'order' => ['data_conferencia' => 'desc']
        ];
        
        $conferencia = $this->paginate($this->Conferencia);

        $this->set(compact('conferencia'));
    }
}
