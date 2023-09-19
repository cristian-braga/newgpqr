<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'detran'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h3 class="text-center text-gpqr mt-2 mb-4">SS13A05</h3>
<div class="ss13a05 index content">
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    <div class="table-responsive table-gpqr" style="margin-top: 1%;">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
            <tr>
                <th>Sistema</th>
                <th>Referência</th>
                <th>Data</th>
                <th>Cópias</th>
                <th>Páginas</th>
                <th>JOB</th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($ss13a05 as $ss13a05): ?>
                <tr>
                    <td>SS13A05</td>
                    <td><?= h($ss13a05->referencia) ?></td>
                    <td><?= h($ss13a05->data) ?></td>
                    <td><?= $ss13a05->copias === null ? '' : $this->Number->format($ss13a05->copias) ?></td>
                    <td><?= $ss13a05->paginas === null ? '' : $this->Number->format($ss13a05->paginas) ?></td>
                    <td><?= h($ss13a05->job) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ss13a05->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $ss13a05->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Deseja realmente excluir o serviço SS13A05: {0}?', $ss13a05->id)]) ?>
                        <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $ss13a05->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->element('pagination') ?>
