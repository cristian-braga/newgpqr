<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'relatorios'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h2 class="text-center text-gpqr mt-2 mb-4">RELATÓRIO ENVELOPAMENTO</h2>
<div class="d-flex mb-5">
    <?= $this->Html->link(__('Exportar'), ['action' => 'exportar', '?' => ['filtro_ano' => $ano]], ['class' => 'btn btn-secondary mx-auto']) ?>
</div>
<div class="conteudo">
    <?= $this->Form->create(null, ['type' => 'get']) ?>
        <div class="row g-3">
            <div class="col-md-2">
                <label class="form-label">Ano:</label>
                <?= $this->Form->control('filtro_ano', ['type' => 'number', 'min' => '2021', 'max' => date('Y'), 'value' => date('Y'), 'class' => 'form-control', 'label' => false]) ?>
            </div>
            <div class="col-md-2" style="margin-top: 3.2rem;">
                <?= $this->Form->button(__('Buscar'), ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
                <?= $this->Html->link(__('Limpar'), ['action' => 'index'], ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
</div>
<div class="table-responsive table-gpqr mx-auto mb-5" style="width: 55%;">
    <table class="table text-center align-middle">
        <caption class="ms-2">Quantitativo de Envelopamentos</caption>
        <thead>
            <tr>
                <th colspan="4" class="table-secondary">RELATÓRIO <?= $ano ?></th>
            </tr>
            <tr class="table-secondary">
                <th>Referência</th>
                <th>A4</th>
                <th>A5</th>
                <th>Mensal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($relatorio_envelopamento as $envelopamento) : ?>
                <tr>
                    <td><b><?= h($envelopamento['mes']) ?></b></td>
                    <td><?= $this->Number->format($envelopamento['total_A4']) ?></td>
                    <td><?= $this->Number->format($envelopamento['total_A5']) ?></td>
                    <td><?= $this->Number->format($envelopamento['total_mes']) ?></td>
                </tr>
            <?php endforeach; ?>
            <tr class="table-secondary">
                <th>Total</th>
                <th><?= $this->Number->format($totalA4) ?></th>
                <th><?= $this->Number->format($totalA5) ?></th>
                <th><?= $this->Number->format($total) ?></th>
            </tr>
        </tbody>
    </table>
</div>