<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ss13a15 $ss13a15
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ss13a15->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ss13a15->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ss13a15'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ss13a15 form content">
            <?= $this->Form->create($ss13a15) ?>
            <fieldset>
                <legend><?= __('Edit Ss13a15') ?></legend>
                <?php
                    echo $this->Form->control('copias');
                    echo $this->Form->control('capas');
                    echo $this->Form->control('paginas');
                    echo $this->Form->control('total');
                    echo $this->Form->control('job');
                    echo $this->Form->control('referencia');
                    echo $this->Form->control('data', ['empty' => true]);
                    echo $this->Form->control('funcionario');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
