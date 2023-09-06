<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sdake05->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sdake05->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sdake05'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sdake05 form content">
            <?= $this->Form->create($sdake05) ?>
            <fieldset>
                <legend><?= __('Edit Sdake05') ?></legend>
                <?php
                    echo $this->Form->control('copias');
                    echo $this->Form->control('paginas');
                    echo $this->Form->control('total');
                    echo $this->Form->control('job');
                    echo $this->Form->control('capa');
                    echo $this->Form->control('funcionario');
                    echo $this->Form->control('data_cadastro');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
