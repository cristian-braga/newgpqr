<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'admin'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h2 class="text-center text-gpqr mt-2 mb-4">MEDIDORES</h2>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary mb-2']) ?>
<?= $this->Html->link(__('Exportar'), ['action' => 'exportar', '?' => ['filtro_ano' => $ano]], ['class' => 'btn btn-secondary mb-2 ms-2']) ?>
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
<div class="table-responsive table-gpqr mx-auto mb-5" style="width: 70%;">
    <table class="table table-hover text-center align-middle">
        <caption class="ms-2">Relatório Medidores</caption>
        <thead class="table-secondary">
            <tr>
                <th colspan="6">MEDIDORES <?= $ano ?></th>
            </tr>
            <tr>
                <th></th>
                <th colspan="2">Nuvera-1</th>
                <th colspan="2">Nuvera-2</th>
                <th></th>
            </tr>
            <tr>
                <th>Cadastro</th>
                <th>Medidor 1</th>
                <th>Medidor 2</th>
                <th>Medidor 1</th>
                <th>Medidor 2</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medidores as $medidor) : ?>
                <tr>
                    <td><b><?= h($medidor->data_cadastro) ?></b></td>
                    <td><?= $this->Number->format($medidor->nuv1_medidor1) ?></td>
                    <td><?= $this->Number->format($medidor->nuv1_medidor2) ?></td>
                    <td><?= $this->Number->format($medidor->nuv2_medidor1) ?></td>
                    <td><?= $this->Number->format($medidor->nuv2_medidor2) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $medidor->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $medidor->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir os dados?')]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>