<h3 class="text-center text-gpqr mt-2 mb-4">SDG1M001</h3>
<div class="sdg1 index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    <div class="table-responsive">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>N° de Páginas</th>
                    <th>Job</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sdg1 as $sdg1): ?>
                <tr>
                    <td>SDG1M001</td>
                    <td><?= $this->Number->format($sdg1->paginas) ?></td>
                    <td><?= h($sdg1->job) ?></td>
                    <td><?= h($sdg1->dataAtual) ?></td>
                    <td>               
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $sdg1->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $sdg1->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow'], ['confirm' => __('Are you sure you want to delete # {0}?', $sdg1->id)]) ?>
                        <?= $this->Html->link(__('PDF'), ['action' => 'view', $sdg1->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow']) ?>
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