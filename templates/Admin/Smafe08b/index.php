<h2 class="text-center text-gpqr mt-2 mb-4">Smafe08b</h2>
<div class="smafe08b index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    <div class="table-responsive">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>Sistema</th>
                    <th>Concurso</th>
                    <th>Job</th>
                    <th>Data</th>
                    <th>Total</th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($smafe08b as $smafe08b): ?>
                <tr>
                    <td><?= $smafe08b->copias === null ? '' : $this->Number->format($smafe08b->copias) ?></td>
                    <td><?= $smafe08b->paginas === null ? '' : $this->Number->format($smafe08b->paginas) ?></td>
                    <td><?= $smafe08b->total === null ? '' : $this->Number->format($smafe08b->total) ?></td>
                    <td><?= h($smafe08b->concurso) ?></td>
                    <td><?= h($smafe08b->job) ?></td>
                    <td><?= h($smafe08b->referencia) ?></td>
                    <td><?= h($smafe08b->data) ?></td>
                    <td><?= h($smafe08b->funcionario) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $smafe08b->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $smafe08b->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow'], ['confirm' => __('Are you sure you want to delete # {0}?', $smafe08b->id)]) ?>
                        <?= $this->Html->link(__('Pdf'), ['action' => 'pdf', $smafe08b->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow']) ?>
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
