<div class="cd index content">
    <h2 class="text-center text-gpqr mt-2 mb-4">CD</h2>
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary float-start mb-4']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('dataAtual') ?></th>
                    <th><?= $this->Paginator->sort('ocorrencia') ?></th>
                    <th><?= $this->Paginator->sort('cliente') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('quantidade') ?></th>

                    <th><?= $this->Paginator->sort('observacao') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cd as $cd) : ?>
                    <tr>
                        <td><?= h($cd->dataAtual) ?></td>
                        <td><?= $this->Number->format($cd->ocorrencia) ?></td>
                        <td><?= h($cd->cliente) ?></td>
                        <td><?= h($cd->descricao) ?></td>
                        <td><?= $this->Number->format($cd->quantidade) ?></td>
                        <td><?= h($cd->observacao) ?></td>
                        <td>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cd->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cd->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow'], ['confirm' => __('Are you sure you want to delete # {0}?', $cd->id)]) ?>
                            <?= $this->Html->link(__('Pdf'), ['action' => 'pdf', $cd->id],['class' => 'btn btn-outline-primary btn-sm btn-shadow']) ?>
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