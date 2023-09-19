<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'admin'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h2 class="text-center text-gpqr mt-2 mb-5">MEDIDORES</h2>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary mb-2']) ?>
<?= $this->Html->link(__('Exportar'), ['action' => 'exportar', '?' => ['filtro_ano' => $ano]], ['class' => 'btn btn-dark mb-2 ms-1']) ?>
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
<div class="table-responsive table-gpqr mx-auto mb-5" style="width: 80%;">
    <table class="table table-hover text-center align-middle">
        <caption class="ms-2">Relatório Medidores</caption>
        <thead>
            <tr class="table-secondary">
                <th colspan="6">MEDIDORES <?= $ano ?></th>
            </tr>
            <tr class="table-light">
                <th></th>
                <th colspan="2">NUVERA-1</th>
                <th colspan="2">NUVERA-2</th>
                <th></th>
            </tr>
            <tr class="table-light">
                <th>Cadastro</th>
                <th>Medidor 1</th>
                <th>Medidor 2</th>
                <th>Medidor 1</th>
                <th>Medidor 2</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!$medidores->isEmpty()) : ?>
                <?php foreach ($medidores as $medidor) : ?>
                    <tr>
                        <td><?= h($medidor->data_cadastro) ?></td>
                        <td><?= $this->Number->format($medidor->nuv1_medidor1) ?></td>
                        <td><?= $this->Number->format($medidor->nuv1_medidor2) ?></td>
                        <td><?= $this->Number->format($medidor->nuv2_medidor1) ?></td>
                        <td><?= $this->Number->format($medidor->nuv2_medidor2) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $medidor->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $medidor->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir os dados?')]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <td colspan="6">Ainda não existem lançamentos</td>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>

<h4 class="text-center text-gpqr mt-5 mb-4">CONTROLE DE IMPRESSÕES <?= $ano ?></h4>
<div class="table-responsive table-gpqr mx-auto mb-5" style="width: 75%;">
    <table class="table text-center align-middle">
        <caption class="ms-2">Controle de Impressões</caption>
        <thead>
            <tr>
                <th colspan="6" class="table-secondary">FRANQUIAS MENSAIS</th>
            </tr>
            <tr>
                <th colspan="2" class="table-light">Equipamento</th>
                <td colspan="2">Nuvera157-1</td>
                <td colspan="2">Nuvera157-2</td>
            </tr>
            <tr>
                <th colspan="2" class="table-light">N° de Cópias</th>
                <td colspan="4">834.000</td>
            </tr>
            <tr>
                <th colspan="6" class="table-secondary">IMPRESSÕES</th>
            </tr>
            <tr class="table-light">
                <th>Período</th>
                <th>Nuvera-1</th>
                <th>Participação</th>
                <th>Nuvera-2</th>
                <th>Participação</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($dados_medidores)) : ?>
                <?php foreach ($dados_medidores as $key => $valor) : ?>
                    <?php if ($dados_medidores[$key]['ano'] === $ano) : ?>
                        <tr>
                            <td><?= h($dados_medidores[$key]['mes']) ?></td>
                            <td><?= $this->Number->format($dados_medidores[$key]['mensal_nuv1']) ?></td>
                            <td><?= number_format($dados_medidores[$key]['participacao_nuv1'], 1, ',', '.') ?>%</td>
                            <td><?= $this->Number->format($dados_medidores[$key]['mensal_nuv2']) ?></td>
                            <td><?= number_format($dados_medidores[$key]['participacao_nuv2'], 1, ',', '.') ?>%</td>
                            <td><?= $this->Number->format($dados_medidores[$key]['mensal_total']) ?></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
                <tr class="table-light">
                    <th>Total</th>
                    <th><?= $this->Number->format($somaNuv1) ?></th>
                    <th><?= number_format($partAnual1, 1, ',', '.') ?>%</th>
                    <th><?= $this->Number->format($somaNuv2)  ?></th>
                    <th><?= number_format($partAnual2, 1, ',', '.') ?>%</th>
                    <th><?= $this->Number->format($somaTotal) ?></th>
                </tr>
            <?php else : ?>
                <td colspan="6">Ainda não existem lançamentos</td>
            <?php endif; ?>
        </tbody>
    </table>
</div>