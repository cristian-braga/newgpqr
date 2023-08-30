<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $smafe08b->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $smafe08b->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Smafe08b'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="smafe08b form content">
            <?= $this->Form->create($smafe08b) ?>
            <fieldset>
                <legend><?= __('Edit Smafe08b') ?></legend>
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
