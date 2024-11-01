<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'internos'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h3 class="text-center text-gpqr mt-2 mb-4">IMPRESSÕES INTERNAS</h3>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary float-start mb-4']) ?>
<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-striped text-center align-middle">
        <thead>
            <tr>
                <th>Serviço</th>
                <th>Total Pág.</th>
                <th>Ocorrência</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($impInternas as $impInterna) : ?>
            <tr>
                <td><?= h($impInterna->descricao) ?></td>
                <td><?= $impInterna->total === null ? '' : $this->Number->format($impInterna->total) ?></td>
                <td><?= h($impInterna->ocorrencia) ?></td>
                <td><?= h($impInterna->data_cadastro) ?></td>
                <td>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $impInterna->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                    <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $impInterna->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Deseja realmente excluir o serviço IMPRESSÕES INTERNAS: {0}?', $impInterna->id)]) ?>
                    <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $impInterna->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>