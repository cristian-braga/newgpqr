<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EscalaTarde $escalaTarde
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $escalaTarde->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $escalaTarde->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Escala Tarde'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="escalaTarde form content">
            <?= $this->Form->create($escalaTarde) ?>
            <fieldset>
                <legend><?= __('Edit Escala Tarde') ?></legend>
                <?php
                    echo $this->Form->control('data_inicial');
                    echo $this->Form->control('data_final');
                    echo $this->Form->control('imp_func1');
                    echo $this->Form->control('conf_func');
                    echo $this->Form->control('env_func');
                    echo $this->Form->control('tri_func1');
                    echo $this->Form->control('tri_func2');
                    echo $this->Form->control('tri_func3');
                    echo $this->Form->control('exp_func');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
