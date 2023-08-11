<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Permissoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="permissoes form content">
            <?= $this->Form->create($permisso) ?>
            <fieldset>
                <legend><?= __('Add Permisso') ?></legend>
                <?php
                    echo $this->Form->control('matricula');
                    echo $this->Form->control('permissao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>