<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FuncionarioFeria $funcionarioFeria
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $funcionarioFeria->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $funcionarioFeria->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Funcionario Ferias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="funcionarioFerias form content">
            <?= $this->Form->create($funcionarioFeria) ?>
            <fieldset>
                <legend><?= __('Edit Funcionario Feria') ?></legend>
                <?php
                    echo $this->Form->control('funcionario_nome');
                    echo $this->Form->control('qtd_dias');
                    echo $this->Form->control('data_inicio');
                    echo $this->Form->control('data_final');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
