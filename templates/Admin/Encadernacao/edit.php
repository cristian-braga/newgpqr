<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Encadernacao $encadernacao
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $encadernacao->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $encadernacao->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Encadernacao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="encadernacao form content">
            <?= $this->Form->create($encadernacao) ?>
            <fieldset>
                <legend><?= __('Edit Encadernacao') ?></legend>
                <?php
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('paginas');
                    echo $this->Form->control('ocorrencia');
                    echo $this->Form->control('solicitante');
                    echo $this->Form->control('data_cadastro');
                    echo $this->Form->control('funcionario');
                    echo $this->Form->control('tipo_capa');
                    echo $this->Form->control('copias');
                    echo $this->Form->control('total');
                    echo $this->Form->control('capas');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
