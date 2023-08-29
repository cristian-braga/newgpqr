<?php
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $smafe008->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $smafe008->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Smafe008'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="smafe008 form content">
            <?= $this->Form->create($smafe008) ?>
            <fieldset>
                <legend><?= __('Edit Smafe008') ?></legend>
                <?php
                    echo $this->Form->control('copias');
                    echo $this->Form->control('paginas');
                    echo $this->Form->control('total');
                    echo $this->Form->control('concurso');
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
