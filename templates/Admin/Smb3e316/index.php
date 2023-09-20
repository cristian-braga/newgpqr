<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'pmmg'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h3 class="text-center text-gpqr mt-2 mb-4">SMB3E316</h3>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
<div class="table-responsive table-gpqr" style="margin-top: 1%;">
    <table class="table table-borderless table-striped text-center align-middle">
        <thead>
            <tr>
                <th>Serviço</th>
                <th>Páginas</th>
                <th>Job</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($smb3e316 as $smb3e316): ?>
            <tr>
                <td>SMB3E316</td>
                <td><?= $this->Number->format($smb3e316->paginas) ?></td>
                <td><?= h($smb3e316->job) ?></td>
                <td><?= h($smb3e316->dataAtual) ?></td>
                <td>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $smb3e316->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                    <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $smb3e316->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Deseja realmente excluir o serviço SMB3E316: {0}?', $smb3e316->id)]) ?>
                    <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $smb3e316->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>
</div>