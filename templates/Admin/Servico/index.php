<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'admin'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h2 class="text-center text-gpqr mt-2 mb-4">SERVIÇOS</h2>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary float-start mb-4']) ?>
<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-striped text-center align-middle">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('nome_servico', ['label' => 'Serviço']) ?></th>
                <th><?= $this->Paginator->sort('descricao_servico', ['label' => 'Descrição']) ?></th>
                <th><?= $this->Paginator->sort('cliente_servico', ['label' => 'Cliente']) ?></th>
                <th><?= $this->Paginator->sort('ativo', ['label' => 'Ativo']) ?></th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($servico as $servico) : ?>
                <tr>
                    <td><?= $this->Html->link($servico->nome_servico, ['action' => 'view', $servico->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                    <td><?= h($servico->descricao_servico) ?></td>
                    <td><?= h($servico->cliente_servico) ?></td>
                    <td><?= h($servico->ativo) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $servico->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $servico->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir o serviço: {0}?', $servico->nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>