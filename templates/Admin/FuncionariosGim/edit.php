<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FuncionariosGim $funcionariosGim
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $funcionariosGim->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $funcionariosGim->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Funcionarios Gim'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="funcionariosGim form content">
            <?= $this->Form->create($funcionariosGim) ?>
            <fieldset>
                <legend><?= __('Edit Funcionarios Gim') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('matricula');
                    echo $this->Form->control('email');
                    echo $this->Form->control('tel');
                    echo $this->Form->control('contatoAlt');
                    echo $this->Form->control('telAlt');
                    echo $this->Form->control('endereco');
                    echo $this->Form->control('turno');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
