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
            <?= $this->Html->link(__('Edit Funcionario Feria'), ['action' => 'edit', $funcionarioFeria->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Funcionario Feria'), ['action' => 'delete', $funcionarioFeria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionarioFeria->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Funcionario Ferias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Funcionario Feria'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="funcionarioFerias view content">
            <h3><?= h($funcionarioFeria->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario Nome') ?></th>
                    <td><?= h($funcionarioFeria->funcionario_nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($funcionarioFeria->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qtd Dias') ?></th>
                    <td><?= $this->Number->format($funcionarioFeria->qtd_dias) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Inicio') ?></th>
                    <td><?= h($funcionarioFeria->data_inicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Final') ?></th>
                    <td><?= h($funcionarioFeria->data_final) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
