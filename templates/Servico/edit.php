<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servico $servico
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $servico->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $servico->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Servico'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="servico form content">
            <?= $this->Form->create($servico) ?>
            <fieldset>
                <legend><?= __('Edit Servico') ?></legend>
                <?php
                    echo $this->Form->control('nome_servico');
                    echo $this->Form->control('descricao_servico');
                    echo $this->Form->control('cliente_responsavel_servico');
                    echo $this->Form->control('cliente_servico');
                    echo $this->Form->control('correios_servico');
                    echo $this->Form->control('impressa_servico');
                    echo $this->Form->control('tipo_impressao_servico');
                    echo $this->Form->control('tipo_preparo_servico');
                    echo $this->Form->control('envelopamento_servico');
                    echo $this->Form->control('separador_servico');
                    echo $this->Form->control('entrega_servico');
                    echo $this->Form->control('cod_sistema_servico');
                    echo $this->Form->control('descricao_sistema_servico');
                    echo $this->Form->control('valor_servico');
                    echo $this->Form->control('folha_rosto');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
