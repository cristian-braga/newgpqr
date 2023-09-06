<div class="sdake05 index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    <div class="table-responsive table-gpqr" style="margin-top:1%;">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>N° Páginas</th>
                    <th>Job</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sdake05 as $sdake05): ?>
                <tr>
                    <td>Sdake05</td>
                    <td><?= $this->Number->format($sdake05->paginas) ?></td>
                    <td><?= h($sdake05->job) ?></td>
                    <td><?= h($sdake05->data_cadastro) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $sdake05->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $sdake05->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow'], ['confirm' => __('Are you sure you want to delete # {0}?', $sdake05->id)]) ?>
                        <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $sdake05->id],['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
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
