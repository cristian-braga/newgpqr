<h3 class="text-center text-gpqr mt-2 mb-4">SDG1M001</h3>
<div class="sdg1 index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    <div class="table-responsive table-gpqr" style="margin-top: 1%;">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>N° de Páginas</th>
                    <th>Job</th>
                    <th>Data</th>
                    <th class="actions"><?= __('Ações') ?></th>
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
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $sdg1->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Deseja realmente excluir o serviço SDG1M001: {0}?', $sdg1->id)]) ?>
                        <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $sdg1->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->element('pagination') ?>