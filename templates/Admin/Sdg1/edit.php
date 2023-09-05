<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sdg1 $sdg1
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sdg1->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sdg1->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sdg1'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sdg1 form content">
            <?= $this->Form->create($sdg1) ?>
            <fieldset>
                <legend><?= __('Edit Sdg1') ?></legend>
                <?php
                    echo $this->Form->control('copias');
                    echo $this->Form->control('paginas');
                    echo $this->Form->control('job');
                    echo $this->Form->control('capa');
                    echo $this->Form->control('dataAtual');
                    echo $this->Form->control('funcionario');
                    echo $this->Form->control('total');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
