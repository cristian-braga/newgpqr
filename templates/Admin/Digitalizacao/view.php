<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Digitalizacao $digitalizacao
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Digitalizacao'), ['action' => 'edit', $digitalizacao->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Digitalizacao'), ['action' => 'delete', $digitalizacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $digitalizacao->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Digitalizacao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Digitalizacao'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="digitalizacao view content">
            <h3><?= h($digitalizacao->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= h($digitalizacao->funcionario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Servico') ?></th>
                    <td><?= $digitalizacao->has('servico') ? $this->Html->link($digitalizacao->servico->id, ['controller' => 'Servico', 'action' => 'view', $digitalizacao->servico->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Digitalizacao') ?></th>
                    <td><?= $digitalizacao->has('status_digitalizacao') ? $this->Html->link($digitalizacao->status_digitalizacao->id, ['controller' => 'StatusDigitalizacao', 'action' => 'view', $digitalizacao->status_digitalizacao->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($digitalizacao->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade Documentos') ?></th>
                    <td><?= $this->Number->format($digitalizacao->quantidade_documentos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Digitalizacao') ?></th>
                    <td><?= h($digitalizacao->data_digitalizacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodo') ?></th>
                    <td><?= h($digitalizacao->periodo) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
