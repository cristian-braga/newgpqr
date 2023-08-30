<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $smb3e316->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $smb3e316->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Smb3e316'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="smb3e316 form content">
            <?= $this->Form->create($smb3e316) ?>
            <fieldset>
                <legend><?= __('Edit Smb3e316') ?></legend>
                <?php
                    echo $this->Form->control('copias');
                    echo $this->Form->control('paginas');
                    echo $this->Form->control('job');
                    echo $this->Form->control('capa');
                    echo $this->Form->control('dataAtual');
                    echo $this->Form->control('funcionario');
                    echo $this->Form->control('total');
                    echo $this->Form->control('unidade');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
