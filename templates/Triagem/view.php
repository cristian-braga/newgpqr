<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Triagem $triagem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Triagem'), ['action' => 'edit', $triagem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Triagem'), ['action' => 'delete', $triagem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $triagem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Triagem'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Triagem'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="triagem view content">
            <h3><?= h($triagem->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= h($triagem->funcionario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Atividade') ?></th>
                    <td><?= $triagem->has('atividade') ? $this->Html->link($triagem->atividade->id, ['controller' => 'Atividade', 'action' => 'view', $triagem->atividade->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Servico') ?></th>
                    <td><?= $triagem->has('servico') ? $this->Html->link($triagem->servico->id, ['controller' => 'Servico', 'action' => 'view', $triagem->servico->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Atividade') ?></th>
                    <td><?= $triagem->has('status_atividade') ? $this->Html->link($triagem->status_atividade->id, ['controller' => 'StatusAtividade', 'action' => 'view', $triagem->status_atividade->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($triagem->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Triagem') ?></th>
                    <td><?= h($triagem->data_triagem) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
