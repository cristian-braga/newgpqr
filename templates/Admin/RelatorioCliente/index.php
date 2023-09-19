<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'relatorios'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h2 class="text-center text-gpqr mt-2 mb-4">RELATÓRIO MULTAS POR CLIENTE</h2>
<div class="d-flex mb-5">
    <?= $this->Html->link(__('Exportar'), ['action' => 'exportar', '?' => ['cliente' => $cliente]], ['class' => 'btn btn-dark mx-auto']) ?>
</div>
<div class="conteudo mt-5">
    <?= $this->Form->create(null, ['type' => 'get']) ?>
        <div class="row g-3">
            <div class="col-md-5">
                <label class="form-label">Cliente:</label>
                <?= $this->Form->control('cliente', ['options' => $clientes, 'class' => 'form-select', 'empty' => '-- Selecione --', 'label' => false]) ?>
            </div>
            <div class="col-md-2" style="margin-top: 3.2rem;">
                <?= $this->Form->button(__('Buscar'), ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
                <?= $this->Html->link(__('Limpar'), ['action' => 'index'], ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
</div>
<div class="table-gpqr mx-auto mb-5" style="width: 75%;">
    <table class="table table-hover text-center align-middle">
        <caption class="ms-2">Multas por Cliente</caption>
        <thead class="table-secondary sticky-top">
            <tr>
                <th>Cliente</th>
                <th><?= date('Y') - 2 ?></th>
                <th><?= date('Y') - 1 ?></th>
                <th><?= date('Y') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($relatorio_cliente as $multas) : ?>
                <tr>
                    <td><b><?= h($multas['cliente']) ?></b></td>
                    <td><?= $this->Number->format($multas['ano_retrasado']) ?></td>
                    <td><?= $this->Number->format($multas['ano_passado']) ?></td>
                    <td><?= $this->Number->format($multas['ano_atual']) ?></td>
                </tr>
            <?php endforeach; ?>
            <tr class="table-secondary">
                <th>Total</th>
                <th><?= $this->Number->format($ano_retrasado) ?></th>
                <th><?= $this->Number->format($ano_passado) ?></th>
                <th><?= $this->Number->format($ano_atual) ?></th>
            </tr>
        </tbody>
    </table>
</div>