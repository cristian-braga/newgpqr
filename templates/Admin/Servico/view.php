<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['action' => 'index'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h3 class="text-center text-gpqr mt-2 mb-4"><?= $servico->nome_servico ?></h3>
<div class="mx-auto p-3 form" style="width: 60%">
    <dl class="row">
        <dt class="text-end col-sm-4">Ativo:</dt>
        <dd class="col-sm-8"><?= $this->Form->control('ativo', ['class' => 'form-control', 'value'=> $servico->ativo, 'readonly', 'label' => false]) ?></dd>
        <dt class="text-end col-sm-4">Descrição Serviço:</dt>
        <dd class="col-sm-8"><?= $this->Form->control('descricao_servico', ['class' => 'form-control', 'value'=> $servico->descricao_servico, 'readonly', 'label' => false]) ?></dd>
        <dt class="text-end col-sm-4">Cliente Responsável Serviço:</dt>
        <dd class="col-sm-8"><?= $this->Form->control('cliente_responsavel_servico', ['class' => 'form-control', 'value'=> $servico->cliente_responsavel_servico, 'readonly', 'label' => false]) ?></dd>
        <dt class="text-end col-sm-4">Cliente Serviço:</dt>
        <dd class="col-sm-8"><?= $this->Form->control('cliente_servico', ['class' => 'form-control', 'value'=> $servico->cliente_servico, 'readonly', 'label' => false]) ?></dd>
        <dt class="text-end col-sm-4">Correios:</dt>
        <dd class="col-sm-8"><?= $this->Form->control('correios_servico', ['class' => 'form-control', 'value'=> $servico->correios_servico, 'readonly', 'label' => false]) ?></dd>
        <dt class="text-end col-sm-4">Impressão Serviço:</dt>
        <dd class="col-sm-8"><?= $this->Form->control('impressao_servico', ['class' => 'form-control', 'value'=> $servico->impressao_servico, 'readonly', 'label' => false]) ?></dd>
        <dt class="text-end col-sm-4">Tipo de Impressão:</dt>
        <dd class="col-sm-8"><?= $this->Form->control('tipo_impressao_servico', ['class' => 'form-control', 'value'=> $servico->tipo_impressao_servico, 'readonly', 'label' => false]) ?></dd>
        <dt class="text-end col-sm-4">Tipo de Preparo:</dt>
        <dd class="col-sm-8"><?= $this->Form->control('tipo_preparo_servico', ['class' => 'form-control', 'value'=> $servico->tipo_preparo_servico, 'readonly', 'label' => false]) ?></dd>
        <dt class="text-end col-sm-4">Envelopamento:</dt>
        <dd class="col-sm-8"><?= $this->Form->control('envelopamento_servico', ['class' => 'form-control', 'value'=> $servico->envelopamento_servico, 'readonly', 'label' => false]) ?></dd>
        <dt class="text-end col-sm-4">Separador:</dt>
        <dd class="col-sm-8"><?= $this->Form->control('separador_servico', ['class' => 'form-control', 'value'=> $servico->separador_servico, 'readonly', 'label' => false]) ?></dd>
        <dt class="text-end col-sm-4">Tipo de Entrega:</dt>
        <dd class="col-sm-8"><?= $this->Form->control('entrega_servico', ['class' => 'form-control', 'value'=> $servico->entrega_servico, 'readonly', 'label' => false]) ?></dd>
        <dt class="text-end col-sm-4">Código do Sistema:</dt>
        <dd class="col-sm-8"><?= $this->Form->control('cod_sistema_servico', ['class' => 'form-control', 'value'=> $servico->cod_sistema_servico, 'readonly', 'label' => false]) ?></dd>
        <dt class="text-end col-sm-4">Descrição do Sistema:</dt>
        <dd class="col-sm-8"><?= $this->Form->control('descricao_sistema_servico', ['class' => 'form-control', 'value'=> $servico->descricao_sistema_servico, 'readonly', 'label' => false]) ?></dd>
        <dt class="text-end col-sm-4">Valor (R$):</dt>
        <dd class="col-sm-8"><?= $this->Form->control('valor_servico', ['class' => 'form-control', 'value'=> $servico->valor_servico, 'readonly', 'label' => false]) ?></dd>
        <dt class="text-end col-sm-4">Folhas de Rosto:</dt>
        <dd class="col-sm-8"><?= $this->Form->control('folha_rosto', ['class' => 'form-control', 'value'=> $servico->folha_rosto, 'readonly', 'label' => false]) ?></dd>
    </dl>
</div>

<style>
    .row dt {
        margin-top: .45rem;
    }
</style>