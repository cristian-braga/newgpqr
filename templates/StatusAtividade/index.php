<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\StatusAtividade> $statusAtividade
 */
?>
<div class="statusAtividade index content">
    <?= $this->Html->link(__('New Status Atividade'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Status Atividade') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('status_atual') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($statusAtividade as $statusAtividade): ?>
                <tr>
                    <td><?= $this->Number->format($statusAtividade->id) ?></td>
                    <td><?= h($statusAtividade->status_atual) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $statusAtividade->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statusAtividade->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statusAtividade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusAtividade->id)]) ?>
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
