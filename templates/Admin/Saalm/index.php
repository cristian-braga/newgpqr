<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'pmmg'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h2 class="text-center text-gpqr mt-2 mb-4">SAALM005</h2>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
<div class="saalm index content table-gpqr" style="margin-top: 1%;">
    <table class="table table-borderless table-striped text-center align-middle">
        <thead>
            <tr>
                <th>Serviço</th>
                <th>Páginas</th>
                <th>JOB</th>
                <th>Data</th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($saalm as $saalm) : ?>
            <tr>
                <td>SAALM005</td>
                <td><?= $this->Number->format($saalm->total2) ?></td>
                <td><?= h($saalm->job) ?></td>
                <td><?= h($saalm->dataAtual) ?></td>
                <td>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $saalm->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                    <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $saalm->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Deseja realmente excluir o serviço SAALM005: {0}?', $saalm->id)]) ?>
                    <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $saalm->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>
</div>