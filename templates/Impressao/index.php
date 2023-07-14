<div class="impressao index content">
    <?= $this->Html->link(__('New Impressao'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Impressao') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('funcionario') ?></th>
                    <th><?= $this->Paginator->sort('data_impressao') ?></th>
                    <th><?= $this->Paginator->sort('atividade_id') ?></th>
                    <th><?= $this->Paginator->sort('servico_id') ?></th>
                    <th><?= $this->Paginator->sort('status_atividade_id') ?></th>
                    <th><?= $this->Paginator->sort('impressora_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($impressao as $impressao): ?>
                <tr>
                    <td><?= $this->Number->format($impressao->id) ?></td>
                    <td><?= h($impressao->funcionario) ?></td>
                    <td><?= h($impressao->data_impressao) ?></td>
                    <td><?= $impressao->has('atividade') ? $this->Html->link($impressao->atividade->id, ['controller' => 'Atividade', 'action' => 'view', $impressao->atividade->id]) : '' ?></td>
                    <td><?= $impressao->has('servico') ? $this->Html->link($impressao->servico->id, ['controller' => 'Servico', 'action' => 'view', $impressao->servico->id]) : '' ?></td>
                    <td><?= $impressao->has('status_atividade') ? $this->Html->link($impressao->status_atividade->id, ['controller' => 'StatusAtividade', 'action' => 'view', $impressao->status_atividade->id]) : '' ?></td>
                    <td><?= $impressao->has('impressora') ? $this->Html->link($impressao->impressora->id, ['controller' => 'Impressora', 'action' => 'view', $impressao->impressora->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $impressao->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $impressao->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $impressao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $impressao->id)]) ?>
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
