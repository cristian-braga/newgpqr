<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $medidores->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $medidores->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Medidores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="medidores form content">
            <?= $this->Form->create($medidores) ?>
            <fieldset>
                <legend><?= __('Edit Medidore') ?></legend>
                <?php
                    echo $this->Form->control('nuv1_medidor1');
                    echo $this->Form->control('nuv1_medidor2');
                    echo $this->Form->control('nuv2_medidor1');
                    echo $this->Form->control('nuv2_medidor2');
                    echo $this->Form->control('referencia');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
