<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class ServicoController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 15,
            'order' => ['nome_servico' => 'asc']
        ];

        $servico = $this->paginate($this->Servico);

        $this->set(compact('servico'));
    }

    public function view($id = null)
    {
        $servico = $this->Servico->get($id);

        $this->set(compact('servico'));
    }

    public function add()
    {
        $servico = $this->Servico->newEmptyEntity();

        if ($this->request->is('post')) {
            $servico = $this->Servico->patchEntity($servico, $this->request->getData());

            if ($this->Servico->save($servico)) {
                $this->Flash->success(__('Serviço lançado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao lançar serviço. Tente novamente.'));
        }

        $descricao = $this->Servico
            ->find('list', ['keyField' => 'descricao_servico', 'valueField' => 'descricao_servico'])
            ->group('descricao_servico')
            ->orderAsc('descricao_servico')
            ->all();

        $correios = $this->Servico
            ->find('list', ['keyField' => 'correios_servico', 'valueField' => 'correios_servico'])
            ->group('correios_servico')
            ->orderAsc('correios_servico')
            ->all();

        $impressao_servico = $this->Servico
            ->find('list', ['keyField' => 'impressao_servico', 'valueField' => 'impressao_servico'])
            ->group('impressao_servico')
            ->orderAsc('impressao_servico')
            ->all();

        $tipo_impressao = $this->Servico
            ->find('list', ['keyField' => 'tipo_impressao_servico', 'valueField' => 'tipo_impressao_servico'])
            ->group('tipo_impressao_servico')
            ->orderAsc('tipo_impressao_servico')
            ->all();

        $tipo_preparo = $this->Servico
            ->find('list', ['keyField' => 'tipo_preparo_servico', 'valueField' => 'tipo_preparo_servico'])
            ->group('tipo_preparo_servico')
            ->orderAsc('tipo_preparo_servico')
            ->all();

        $env_servico = $this->Servico
            ->find('list', ['keyField' => 'envelopamento_servico', 'valueField' => 'envelopamento_servico'])
            ->group('envelopamento_servico')
            ->orderAsc('envelopamento_servico')
            ->all();

        $separador = $this->Servico
            ->find('list', ['keyField' => 'separador_servico', 'valueField' => 'separador_servico'])
            ->group('separador_servico')
            ->orderAsc('separador_servico')
            ->all();

        $entrega = $this->Servico
            ->find('list', ['keyField' => 'entrega_servico', 'valueField' => 'entrega_servico'])
            ->group('entrega_servico')
            ->orderAsc('entrega_servico')
            ->all();

        $desc_sistema = $this->Servico
            ->find('list', ['keyField' => 'descricao_sistema_servico', 'valueField' => 'descricao_sistema_servico'])
            ->group('descricao_sistema_servico')
            ->orderAsc('descricao_sistema_servico')
            ->all();

        $valor_servico = $this->Servico
            ->find('list', ['keyField' => 'valor_servico', 'valueField' => 'valor_servico'])
            ->group('valor_servico')
            ->orderAsc('valor_servico')
            ->all();

        $folha_rosto = $this->Servico
            ->find('list', ['keyField' => 'folha_rosto', 'valueField' => 'folha_rosto'])
            ->group('folha_rosto')
            ->orderAsc('folha_rosto')
            ->all();

        $ativo = $this->Servico
            ->find('list', ['keyField' => 'ativo', 'valueField' => 'ativo'])
            ->group('ativo')
            ->orderAsc('ativo')
            ->all();

        $this->set(compact(
            'servico',
            'descricao',
            'correios',
            'impressao_servico',
            'tipo_impressao',
            'tipo_preparo',
            'env_servico',
            'separador',
            'entrega',
            'desc_sistema',
            'valor_servico',
            'folha_rosto',
            'ativo'
        ));
    }

    public function edit($id = null)
    {
        $servico = $this->Servico->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $servico = $this->Servico->patchEntity($servico, $this->request->getData());

            if ($this->Servico->save($servico)) {
                $this->Flash->success(__('Serviço editado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao editar serviço. Tente novamente.'));
        }

        $this->set(compact('servico'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $servico = $this->Servico->get($id);

        if ($this->Servico->delete($servico)) {
            $this->Flash->success(__('Serviço excluído com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir serviço. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
