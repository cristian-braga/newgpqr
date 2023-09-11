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
            <?= $this->Html->link(__('Edit Funcionarios Gim'), ['action' => 'edit', $funcionariosGim->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Funcionarios Gim'), ['action' => 'delete', $funcionariosGim->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionariosGim->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Funcionarios Gim'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Funcionarios Gim'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="funcionariosGim view content">
            <h3><?= h($funcionariosGim->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($funcionariosGim->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Matricula') ?></th>
                    <td><?= h($funcionariosGim->matricula) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($funcionariosGim->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tel') ?></th>
                    <td><?= h($funcionariosGim->tel) ?></td>
                </tr>
                <tr>
                    <th><?= __('ContatoAlt') ?></th>
                    <td><?= h($funcionariosGim->contatoAlt) ?></td>
                </tr>
                <tr>
                    <th><?= __('TelAlt') ?></th>
                    <td><?= h($funcionariosGim->telAlt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= h($funcionariosGim->endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Turno') ?></th>
                    <td><?= h($funcionariosGim->turno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($funcionariosGim->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
