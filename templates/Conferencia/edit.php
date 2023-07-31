<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conferencium $conferencium
 * @var string[]|\Cake\Collection\CollectionInterface $atividade
 * @var string[]|\Cake\Collection\CollectionInterface $statusAtividade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conferencium->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conferencium->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Conferencia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conferencia form content">
            <?= $this->Form->create($conferencium) ?>
            <fieldset>
                <legend><?= __('Edit Conferencium') ?></legend>
                <?php
                    echo $this->Form->control('funcionario');
                    echo $this->Form->control('data_conferencia', ['empty' => true]);
                    echo $this->Form->control('atividade_id', ['options' => $atividade]);
                    echo $this->Form->control('status_atividade_id', ['options' => $statusAtividade]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
