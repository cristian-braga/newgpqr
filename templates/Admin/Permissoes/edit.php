<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permisso $permisso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $permisso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $permisso->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Permissoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="permissoes form content">
            <?= $this->Form->create($permisso) ?>
            <fieldset>
                <legend><?= __('Edit Permisso') ?></legend>
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
