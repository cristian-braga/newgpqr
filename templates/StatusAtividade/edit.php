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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $statusAtividade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $statusAtividade->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Status Atividade'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="statusAtividade form content">
            <?= $this->Form->create($statusAtividade) ?>
            <fieldset>
                <legend><?= __('Edit Status Atividade') ?></legend>
                <?php
                    echo $this->Form->control('status_atual');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
