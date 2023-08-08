<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Reunioes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reunioes form content">
            <?= $this->Form->create($reunioes) ?>
            <fieldset>
                <legend><?= __('Add Reunio') ?></legend>
                <?php
                    echo $this->Form->control('data_reuniao');
                    echo $this->Form->control('responsavel');
                    echo $this->Form->control('tema_abordado');
                    echo $this->Form->control('sumula');
                    echo $this->Form->control('local_reuniao');
                    echo $this->Form->control('horario_reuniao');
                    echo $this->Form->control('pauta');
                    echo $this->Form->control('participantes');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
