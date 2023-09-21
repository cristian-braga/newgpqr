<h3 class="text-center text-gpqr mt-2 mb-4">Rotulos Correios</h3>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
<div class="rotulosCorreios index content">
    <div class="table-responsive table-gpqr mt-3">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Espécie</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rotulosCorreios as $rotulosCorreio): ?>
                <tr>
                    <td><?= h($rotulosCorreio->servico) ?></td>
                    <td><?= h($rotulosCorreio->especie) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $rotulosCorreio->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $rotulosCorreio->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Deseja realmente excluir o serviço Rotulos Correios: {0}?', $rotulosCorreio->id)]) ?>
                        <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $rotulosCorreio->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>