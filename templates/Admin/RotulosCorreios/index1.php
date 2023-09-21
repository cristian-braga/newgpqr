<h3 class="text-center text-gpqr mt-2 mb-4">Rotulos Gral</h3>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add1'], ['class' => 'btn btn-secondary']) ?>
<div class="rotulosCorreios index content">
    <div class="table-responsive table-gpqr mt-3">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>Destino</th>
                    <th>Cep Inicial</th>
                    <th>Ano</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rotulosCorreios as $rotulosCorreio): ?>
                <tr>
                    <td><?= h($rotulosCorreio->destino) ?></td>
                    <td><?= h($rotulosCorreio->cep_inicial) ?></td>
                    <td><?= h($rotulosCorreio->cep_final) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $rotulosCorreio->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $rotulosCorreio->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Deseja realmente excluir o serviço Rotulos Correios: {0}?', $rotulosCorreio->id)]) ?>
                        <?= $this->Html->link(__('PDF'), ['action' => 'pdf1', $rotulosCorreio->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>