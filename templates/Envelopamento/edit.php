<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Envelopamento $envelopamento
 * @var string[]|\Cake\Collection\CollectionInterface $atividade
 * @var string[]|\Cake\Collection\CollectionInterface $servico
 * @var string[]|\Cake\Collection\CollectionInterface $statusAtividade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $envelopamento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $envelopamento->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Envelopamento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="envelopamento form content">
            <?= $this->Form->create($envelopamento) ?>
            <fieldset>
                <legend><?= __('Edit Envelopamento') ?></legend>
                <?php
                    echo $this->Form->control('funcionario');
                    echo $this->Form->control('data_envelopamento', ['empty' => true]);
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
