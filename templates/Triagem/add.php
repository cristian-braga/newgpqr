<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Triagem $triagem
 * @var \Cake\Collection\CollectionInterface|string[] $atividade
 * @var \Cake\Collection\CollectionInterface|string[] $servico
 * @var \Cake\Collection\CollectionInterface|string[] $statusAtividade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Triagem'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="triagem form content">
            <?= $this->Form->create($triagem) ?>
            <fieldset>
                <legend><?= __('Add Triagem') ?></legend>
                <?php
                    echo $this->Form->control('funcionario');
                    echo $this->Form->control('data_triagem', ['empty' => true]);
                    echo $this->Form->control('atividade_id', ['options' => $atividade]);
                    echo $this->Form->control('servico_id', ['options' => $servico]);
                    echo $this->Form->control('status_atividade_id', ['options' => $statusAtividade]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
