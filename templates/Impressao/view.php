<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Impressao $impressao
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Impressao'), ['action' => 'edit', $impressao->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Impressao'), ['action' => 'delete', $impressao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $impressao->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Impressao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Impressao'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="impressao view content">
            <h3><?= h($impressao->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= h($impressao->funcionario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Atividade') ?></th>
                    <td><?= $impressao->has('atividade') ? $this->Html->link($impressao->atividade->id, ['controller' => 'Atividade', 'action' => 'view', $impressao->atividade->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Servico') ?></th>
                    <td><?= $impressao->has('servico') ? $this->Html->link($impressao->servico->id, ['controller' => 'Servico', 'action' => 'view', $impressao->servico->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Atividade') ?></th>
                    <td><?= $impressao->has('status_atividade') ? $this->Html->link($impressao->status_atividade->id, ['controller' => 'StatusAtividade', 'action' => 'view', $impressao->status_atividade->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Impressora') ?></th>
                    <td><?= $impressao->has('impressora') ? $this->Html->link($impressao->impressora->id, ['controller' => 'Impressora', 'action' => 'view', $impressao->impressora->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($impressao->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Impressao') ?></th>
                    <td><?= h($impressao->data_impressao) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
