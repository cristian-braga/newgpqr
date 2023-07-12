<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Triagem> $triagem
 */
?>
<div class="triagem index content">
    <?= $this->Html->link(__('New Triagem'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Triagem') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('funcionario') ?></th>
                    <th><?= $this->Paginator->sort('data_triagem') ?></th>
                    <th><?= $this->Paginator->sort('atividade_id') ?></th>
                    <th><?= $this->Paginator->sort('servico_id') ?></th>
                    <th><?= $this->Paginator->sort('status_atividade_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($triagem as $triagem): ?>
                <tr>
                    <td><?= $this->Number->format($triagem->id) ?></td>
                    <td><?= h($triagem->funcionario) ?></td>
                    <td><?= h($triagem->data_triagem) ?></td>
                    <td><?= $triagem->has('atividade') ? $this->Html->link($triagem->atividade->id, ['controller' => 'Atividade', 'action' => 'view', $triagem->atividade->id]) : '' ?></td>
                    <td><?= $triagem->has('servico') ? $this->Html->link($triagem->servico->id, ['controller' => 'Servico', 'action' => 'view', $triagem->servico->id]) : '' ?></td>
                    <td><?= $triagem->has('status_atividade') ? $this->Html->link($triagem->status_atividade->id, ['controller' => 'StatusAtividade', 'action' => 'view', $triagem->status_atividade->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $triagem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $triagem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $triagem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $triagem->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
