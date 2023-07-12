<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StatusAtividade $statusAtividade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Status Atividade'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="statusAtividade form content">
            <?= $this->Form->create($statusAtividade) ?>
            <fieldset>
                <legend><?= __('Add Status Atividade') ?></legend>
                <?php
                    echo $this->Form->control('status_atual');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
