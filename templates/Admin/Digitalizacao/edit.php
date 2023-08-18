<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Digitalizacao $digitalizacao
 * @var string[]|\Cake\Collection\CollectionInterface $servico
 * @var string[]|\Cake\Collection\CollectionInterface $statusDigitalizacao
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $digitalizacao->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $digitalizacao->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Digitalizacao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="digitalizacao form content">
            <?= $this->Form->create($digitalizacao) ?>
            <fieldset>
                <legend><?= __('Edit Digitalizacao') ?></legend>
                <?php
                    echo $this->Form->control('funcionario');
                    echo $this->Form->control('data_digitalizacao');
                    echo $this->Form->control('quantidade_documentos');
                    echo $this->Form->control('periodo');
                    echo $this->Form->control('servico_id', ['options' => $servico]);
                    echo $this->Form->control('status_digitalizacao_id', ['options' => $statusDigitalizacao]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
