<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'remessas'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<div class="cd index content">
    <h3 class="text-center text-gpqr mt-2 mb-4">CD</h3>
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary float-start mb-4']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Ocorrência</th>
                    <th>Cliente</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Observação</th>
                    <th class="actions">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cd as $cd) : ?>
                    <tr>
                        <td><?= h($cd->dataAtual) ?></td>
                        <td><?= $this->Number->format($cd->ocorrencia) ?></td>
                        <td><?= h($cd->cliente) ?></td>
                        <td><?= h($cd->descricao) ?></td>
                        <td><?= $this->Number->format($cd->quantidade) ?></td>
                        <td><?= h($cd->observacao) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cd->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $cd->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Deseja realmente excluir o serviço CD: {0}?', $cd->id)]) ?>
                            <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $cd->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('pagination') ?>
</div>