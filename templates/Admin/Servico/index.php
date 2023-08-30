<h2 class="text-center text-gpqr mt-2 mb-4">Serviço</h2>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary float-start mb-4']) ?>
<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-hover table-striped text-center">
        <thead>
            <tr>
                <th>Serviço</th>
                <th>Descrição</th>
                <th>Responsável</th>
                <th>Cliente</th>
                <th>Sistema</th>
                <th class="col-2">Ações</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <?php foreach ($servico as $servico) : ?>
                <tr>
                    <td><?= $this->Html->link($servico->nome_servico, ['action' => 'view', $servico->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                    <td><?= h($servico->descricao_servico) ?></td>
                    <td><?= h($servico->cliente_responsavel_servico) ?></td>
                    <td><?= h($servico->cliente_servico) ?></td>
                    <td><?= h($servico->descricao_sistema_servico) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $servico->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $servico->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir o serviço: {0}?', $servico->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>