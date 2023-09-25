<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\EscalaTarde> $escalaTarde
 */
?>
<div class="escalaTarde index content">
    <?= $this->Html->link(__('New Escala Tarde'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Escala Tarde') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('data_inicial') ?></th>
                    <th><?= $this->Paginator->sort('data_final') ?></th>
                    <th><?= $this->Paginator->sort('imp_func1') ?></th>
                    <th><?= $this->Paginator->sort('conf_func') ?></th>
                    <th><?= $this->Paginator->sort('env_func') ?></th>
                    <th><?= $this->Paginator->sort('tri_func1') ?></th>
                    <th><?= $this->Paginator->sort('tri_func2') ?></th>
                    <th><?= $this->Paginator->sort('tri_func3') ?></th>
                    <th><?= $this->Paginator->sort('exp_func') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($escalaTarde as $escalaTarde): ?>
                <tr>
                    <td><?= $this->Number->format($escalaTarde->id) ?></td>
                    <td><?= h($escalaTarde->data_inicial) ?></td>
                    <td><?= h($escalaTarde->data_final) ?></td>
                    <td><?= h($escalaTarde->imp_func1) ?></td>
                    <td><?= h($escalaTarde->conf_func) ?></td>
                    <td><?= h($escalaTarde->env_func) ?></td>
                    <td><?= h($escalaTarde->tri_func1) ?></td>
                    <td><?= h($escalaTarde->tri_func2) ?></td>
                    <td><?= h($escalaTarde->tri_func3) ?></td>
                    <td><?= h($escalaTarde->exp_func) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $escalaTarde->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $escalaTarde->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $escalaTarde->id], ['confirm' => __('Are you sure you want to delete # {0}?', $escalaTarde->id)]) ?>
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
