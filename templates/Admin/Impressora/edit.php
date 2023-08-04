<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Impressora $impressora
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $impressora->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $impressora->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Impressora'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="impressora form content">
            <?= $this->Form->create($impressora) ?>
            <fieldset>
                <legend><?= __('Edit Impressora') ?></legend>
                <?php
                    echo $this->Form->control('nome_impressora');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
