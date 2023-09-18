<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'relatorios'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h2 class="text-center text-gpqr mt-2 mb-4">RELATÓRIOS MENSAIS</h2>
<div class="d-flex mb-5">
    <?= $this->Html->link(__('Exportar'), ['action' => 'exportar', '?' => ['filtro_ano' => $ano, 'data_inicio' => $data_inicio, 'data_fim' => $data_fim]], ['class' => 'btn btn-secondary mx-auto']) ?>
</div>
<h4 class="text-center text-gpqr mt-5 mb-4">COMPARATIVO <?= date('Y') - 1 ?>/<?= date('Y') ?></h4>

<div id="chart" class="table-gpqr mx-auto mb-5" style="width: 55%;"></div>

<div class="table-responsive table-gpqr mx-auto mb-5" style="width: 55%;">
    <table class="table text-center align-middle">
        <caption class="ms-2">Comparativo de Páginas Impressas</caption>
        <thead>
            <tr class="table-secondary">
                <th>Referência</th>
                <th><?= date('Y') - 1 ?></th>
                <th><?= date('Y') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($relatorio_comparativo as $comparativo) : ?>
                <tr>
                    <td><b><?= h($comparativo['mes']) ?></b></td>
                    <td><?= $this->Number->format($comparativo['ano_passado']) ?></td>
                    <td><?= $this->Number->format($comparativo['ano_atual']) ?></td>
                </tr>
            <?php endforeach; ?>
            <tr class="table-secondary">
                <th>Total</th>
                <th><?= $this->Number->format($ano_passado) ?></th>
                <th><?= $this->Number->format($ano_atual) ?></th>
            </tr>
        </tbody>
    </table>
</div>

<h4 class="text-center text-gpqr mt-5 mb-4">PRODUÇÃO</h4>
<div class="conteudo">
    <?= $this->Form->create(null, ['type' => 'get']) ?>
        <div class="row g-3">
            <div class="col-md-2">
                <label class="form-label">Ano:</label>
                <?= $this->Form->control('filtro_ano', ['type' => 'number', 'min' => '2021', 'max' => date('Y'), 'servico' => date('Y'), 'class' => 'form-control', 'label' => false]) ?>
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
        <caption class="ms-2">Documentos/Páginas/Folhas</caption>
        <thead>
            <tr>
                <th colspan="4" class="table-secondary">RELATÓRIO <?= $ano ?></th>
            </tr>
            <tr class="table-secondary">
                <th>Referência</th>
                <th>Documentos</th>
                <th>Folhas</th>
                <th>Páginas</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($relatorio_producao as $producao) : ?>
                <tr>
                    <td><b><?= h($producao['mes']) ?></b></td>
                    <td><?= $this->Number->format($producao['quantidade_documentos']) ?></td>
                    <td><?= $this->Number->format($producao['quantidade_folhas']) ?></td>
                    <td><?= $this->Number->format($producao['quantidade_paginas']) ?></td>
                </tr>
            <?php endforeach; ?>
            <tr class="table-secondary">
                <th>Total</th>
                <th><?= $this->Number->format($documentos) ?></th>
                <th><?= $this->Number->format($folhas) ?></th>
                <th><?= $this->Number->format($paginas) ?></th>
            </tr>
        </tbody>
    </table>
</div>

<h4 class="text-center text-gpqr mt-5 mb-4">BOLETIM MENSAL DETALHADO</h4>
<div class="conteudo">
    <?= $this->Form->create(null, ['type' => 'get']) ?>
        <div class="row g-3">
            <div class="col-md-2">
                <label class="form-label">Data inicial:</label>
                <?= $this->Form->control('data_inicio', ['type' => 'date', 'class' => 'form-control', 'label' => false]) ?>
            </div>
            <div class="col-md-2">
                <label class="form-label">Data final:</label>
                <?= $this->Form->control('data_fim', ['type' => 'date', 'class' => 'form-control', 'label' => false]) ?>
            </div>
            <div class="col-md-2" style="margin-top: 3.2rem;">
                <?= $this->Form->button(__('Buscar'), ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
                <?= $this->Html->link(__('Limpar'), ['action' => 'index'], ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
</div>
<div class="table-gpqr mx-auto mb-5" style="width: 90%; overflow-y: auto; max-height: 90vh;">
    <table class="table table-borderless table-hover text-center align-middle">
        <caption class="ms-2">Boletim Mensal Detalhado</caption>
        <thead class="table-secondary sticky-top">
            <tr>
                <th>Cliente</th>
                <th>Impressão</th>
                <th>Preparo</th>
                <th>Sistema/Fase</th>
                <th>Descrição</th>
                <th>Documentos</th>
                <th>Folhas</th>
                <th>Páginas</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($boletim as $key => $servico) : ?>
                <tr>
                    <td><?= h($servico->cliente_servico) ?></td>
                    <td><?= h($servico->impressao) ?></td>
                    <td><?= h($servico->preparo) ?></td>
                    <td><?= h($servico->servico) ?></td>
                    <td><?= h($servico->descricao) ?></td>
                    <td><?= $this->Number->format($servico->documentos) ?></td>
                    <td><?= $this->Number->format($servico->folhas) ?></td>
                    <td><?= $this->Number->format($servico->paginas) ?></td>
                </tr>
                <?php
                    if ($key == 0 || array_key_exists($key - 1, $boletim) && $boletim[$key]['cliente'] == $boletim[$key - 1]['cliente']) {
                        $subTotalDocCliente += $servico['documentos'];
                        $subTotalFolhasCliente += $servico['folhas'];
                        $subTotalPagsCliente += $servico['paginas'];
                    } else {
                        $subTotalDocCliente += $servico['documentos'];
                        $subTotalFolhasCliente += $servico['folhas'];
                        $subTotalPagsCliente += $servico['paginas'];
                    }

                    if ($key == 0 || array_key_exists($key - 1, $boletim) && $boletim[$key]['preparo'] == $boletim[$key - 1]['preparo']) {
                        $subTotalPagsPreparo += $servico['paginas'];
                        $subTotalFolhasPreparo += $servico['folhas'];
                        $subTotalDocPreparo += $servico['documentos'];
                    } else {
                        $subTotalPagsPreparo += $servico['paginas'];
                        $subTotalFolhasPreparo += $servico['folhas'];
                        $subTotalDocPreparo += $servico['documentos'];
                    }

                    if ($key == 0 || array_key_exists($key - 1, $boletim) && $boletim[$key]['impressao'] == $boletim[$key - 1]['impressao']) {
                        $subTotalPagsImpressao += $servico['paginas'];
                        $subTotalFolhasImpressao += $servico['folhas'];
                        $subTotalDocImpressao += $servico['documentos'];
                    } else {
                        $subTotalPagsImpressao += $servico['paginas'];
                        $subTotalFolhasImpressao += $servico['folhas'];
                        $subTotalDocImpressao += $servico['documentos'];
                    }
                ?>
                <?php if ($key == count($boletim) - 1 || array_key_exists($key + 1, $boletim) && $boletim[$key]['preparo'] != $boletim[$key + 1]['preparo'] || array_key_exists($key + 1, $boletim) && $boletim[$key]['cliente'] != $boletim[$key + 1]['cliente']) : ?>
                    <tr>
                        <th colspan="2"></th>
                        <th colspan="3" class="table-light text-start">Total - <?= h($servico->preparo) ?>: </th>
                        <th class="table-light"><?= $this->Number->format($subTotalDocPreparo) ?></th>
                        <th class="table-light"><?= $this->Number->format($subTotalFolhasPreparo) ?></th>
                        <th class="table-light"><?= $this->Number->format($subTotalPagsPreparo) ?></th>
                    </tr>
                    <?php
                        $subTotalPagsPreparo = $subTotalFolhasPreparo = $subTotalDocPreparo = 0;
                    ?>
                <?php endif; ?>
                <?php if ($key == count($boletim) - 1 || array_key_exists($key + 1, $boletim) && $boletim[$key]['impressao'] != $boletim[$key + 1]['impressao'] || $boletim[$key]['cliente'] != $boletim[$key + 1]['cliente']) : ?>
                    <tr>
                        <th></th>
                        <th colspan="4" class="table-light text-start">Total - <?= h($servico->impressao) ?>: </th>
                        <th class="table-light"><?= $this->Number->format($subTotalDocImpressao) ?></th>
                        <th class="table-light"><?= $this->Number->format($subTotalFolhasImpressao) ?></th>
                        <th class="table-light"><?= $this->Number->format($subTotalPagsImpressao) ?></th>
                    </tr>
                    <?php
                        $subTotalPagsImpressao = $subTotalFolhasImpressao = $subTotalDocImpressao = 0;
                    ?>
                <?php endif; ?>
                <?php if ($key == count($boletim) - 1 || array_key_exists($key + 1, $boletim) && $boletim[$key]['cliente'] != $boletim[$key + 1]['cliente']) : ?>
                    <tr>
                        <th colspan="5" class="table-light text-start">Total - <?= h($servico->cliente) ?>: </th>
                        <th class="table-light"><?= $this->Number->format($subTotalDocCliente) ?></th>
                        <th class="table-light"><?= $this->Number->format($subTotalFolhasCliente) ?></th>
                        <th class="table-light"><?= $this->Number->format($subTotalPagsCliente) ?></th>
                    </tr>
                    <?php
                        $subTotalDocCliente = $subTotalFolhasCliente = $subTotalPagsCliente = 0;
                    ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <tr class="table-secondary sticky-bottom">
                <th>Total geral</th>
                <th colspan="4"></th>
                <th><?= $this->Number->format($total_docs) ?></th>
                <th><?= $this->Number->format($total_folhas) ?></th>
                <th><?= $this->Number->format($total_pags) ?></th>
            </tr>
        </tbody>
    </table>
</div>

<script>
    const dataAtual = new Date();
    const anoAtual = String(dataAtual.getFullYear());
    const anoPassado = String(anoAtual - 1);

    const dados = <?= json_encode($relatorio_comparativo) ?>;

    google.charts.load('current', {
        'packages': ['corechart'],
        'language': 'pt-br'
    });

    google.charts.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
        const data = new google.visualization.DataTable();
        data.addColumn('string', 'Month');
        data.addColumn('number', anoPassado);
        data.addColumn('number', anoAtual);

        dados.forEach(function(novoDado) {
            data.addRows([
                [novoDado.mes, parseFloat(novoDado.ano_passado), parseFloat(novoDado.ano_atual)]
            ]);
        });

        const options = {
            colors: ['#27333F', '#8C2A1F'],
            title: 'Comparativo de Páginas Impressas',
            vAxis: {
                title: '',
                groupingSymbol: '.',
            },
            hAxis: {
                title: '',
            },
            animation: {
                easing: 'inAndOut',
                duration: 800,
                startup: true,
            },
            backgroundColor: {
                stroke: '#27333F',
                strokeWidth: '2'
            },
            seriesType: 'bars',
            bar: {
                groupWidth: "55%"
            }
        };

        const chart = new google.visualization.ComboChart(document.getElementById('chart'));
        chart.draw(data, options);
    }
</script>