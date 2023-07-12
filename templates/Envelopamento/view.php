<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Envelopamento $envelopamento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Envelopamento'), ['action' => 'edit', $envelopamento->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Envelopamento'), ['action' => 'delete', $envelopamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $envelopamento->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Envelopamento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Envelopamento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="envelopamento view content">
            <h3><?= h($envelopamento->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= h($envelopamento->funcionario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Atividade') ?></th>
                    <td><?= $envelopamento->has('atividade') ? $this->Html->link($envelopamento->atividade->id, ['controller' => 'Atividade', 'action' => 'view', $envelopamento->atividade->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Servico') ?></th>
                    <td><?= $envelopamento->has('servico') ? $this->Html->link($envelopamento->servico->id, ['controller' => 'Servico', 'action' => 'view', $envelopamento->servico->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Atividade') ?></th>
                    <td><?= $envelopamento->has('status_atividade') ? $this->Html->link($envelopamento->status_atividade->id, ['controller' => 'StatusAtividade', 'action' => 'view', $envelopamento->status_atividade->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($envelopamento->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Envelopamento') ?></th>
                    <td><?= h($envelopamento->data_envelopamento) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
