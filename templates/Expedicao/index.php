<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Expedicao> $expedicao
 */
?>
<div class="expedicao index content">
    <?= $this->Html->link(__('New Expedicao'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Expedicao') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('funcionario') ?></th>
                    <th><?= $this->Paginator->sort('data_lancamento') ?></th>
                    <th><?= $this->Paginator->sort('data_expedicao') ?></th>
                    <th><?= $this->Paginator->sort('capas') ?></th>
                    <th><?= $this->Paginator->sort('ocorrencia') ?></th>
                    <th><?= $this->Paginator->sort('solicitante') ?></th>
                    <th><?= $this->Paginator->sort('responsavel_remessa') ?></th>
                    <th><?= $this->Paginator->sort('responsavel_expedicao') ?></th>
                    <th><?= $this->Paginator->sort('responsavel_coleta') ?></th>
                    <th><?= $this->Paginator->sort('hora') ?></th>
                    <th><?= $this->Paginator->sort('atividade_id') ?></th>
                    <th><?= $this->Paginator->sort('servico_id') ?></th>
                    <th><?= $this->Paginator->sort('status_atividade_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($expedicao as $expedicao): ?>
                <tr>
                    <td><?= $this->Number->format($expedicao->id) ?></td>
                    <td><?= h($expedicao->funcionario) ?></td>
                    <td><?= h($expedicao->data_lancamento) ?></td>
                    <td><?= h($expedicao->data_expedicao) ?></td>
                    <td><?= $expedicao->capas === null ? '' : $this->Number->format($expedicao->capas) ?></td>
                    <td><?= h($expedicao->ocorrencia) ?></td>
                    <td><?= h($expedicao->solicitante) ?></td>
                    <td><?= h($expedicao->responsavel_remessa) ?></td>
                    <td><?= h($expedicao->responsavel_expedicao) ?></td>
                    <td><?= h($expedicao->responsavel_coleta) ?></td>
                    <td><?= h($expedicao->hora) ?></td>
                    <td><?= $expedicao->has('atividade') ? $this->Html->link($expedicao->atividade->id, ['controller' => 'Atividade', 'action' => 'view', $expedicao->atividade->id]) : '' ?></td>
                    <td><?= $expedicao->has('servico') ? $this->Html->link($expedicao->servico->id, ['controller' => 'Servico', 'action' => 'view', $expedicao->servico->id]) : '' ?></td>
                    <td><?= $expedicao->has('status_atividade') ? $this->Html->link($expedicao->status_atividade->id, ['controller' => 'StatusAtividade', 'action' => 'view', $expedicao->status_atividade->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $expedicao->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $expedicao->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $expedicao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expedicao->id)]) ?>
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
