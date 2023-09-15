<h2 class="text-center text-gpqr mt-2 mb-4">RELATÓRIO FATURAMENTO</h2>
<div class="d-flex mb-5">
    <?= $this->Html->link(__('Exportar'), ['action' => 'exportar', '?' => ['data_inicio' => $data_inicio, 'data_fim' => $data_fim]], ['class' => 'btn btn-secondary mx-auto']) ?>
</div>
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
        <caption class="ms-2">Faturamento</caption>
        <thead class="sticky-top table-secondary">
            <tr>
                <th>Cliente</th>
                <th>Impressão</th>
                <th>Preparo</th>
                <th>Sistema/Fase</th>
                <th>Descrição</th>
                <th>Documentos</th>
                <th>Folhas</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($relatorio_faturamento as $key => $servico) : ?>
                <tr>
                    <td><?= h($servico['cliente_servico']) ?></td>
                    <td><?= h($servico['impressao']) ?></td>
                    <td><?= h($servico['preparo']) ?></td>
                    <td><?= h($servico['servico']) ?></td>
                    <td><?= h($servico['descricao']) ?></td>
                    <td><?= $this->Number->format($servico['documentos']) ?></td>
                    <td><?= $this->Number->format($servico['folhas']) ?></td>
                </tr>
                <?php
                    if ($key == 0 || array_key_exists($key - 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['cliente'] == $relatorio_faturamento[$key - 1]['cliente']) {
                        $subTotalDocCliente += $servico['documentos'];
                        $subTotalFolhasCliente += $servico['folhas']; 
                    } else {
                        $subTotalDocCliente += $servico['documentos'];
                        $subTotalFolhasCliente += $servico['folhas'];
                    }

                    if ($key == 0 || array_key_exists($key - 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['preparo'] == $relatorio_faturamento[$key - 1]['preparo']) {
                        $subTotalDocPreparo += $servico['documentos'];
                        $subTotalFolhasPreparo += $servico['folhas'];
                    } else {
                        $subTotalDocPreparo += $servico['documentos'];
                        $subTotalFolhasPreparo += $servico['folhas'];
                    }

                    if ($key == 0 || array_key_exists($key - 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['impressao'] == $relatorio_faturamento[$key - 1]['impressao']) {
                        $subTotalDocImpressao += $servico['documentos'];
                        $subTotalFolhasImpressao += $servico['folhas'];
                    } else {
                        $subTotalDocImpressao += $servico['documentos'];
                        $subTotalFolhasImpressao += $servico['folhas'];
                    }
                ?>
                <?php if ($key == count($relatorio_faturamento) - 1 || array_key_exists($key + 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['preparo'] != $relatorio_faturamento[$key + 1]['preparo'] || array_key_exists($key + 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['cliente'] != $relatorio_faturamento[$key + 1]['cliente']) : ?>
                    <tr>
                        <th colspan="2"></th>
                        <th colspan="3" class="table-light text-start">Total - <?= h($servico['preparo']) ?>: </th>
                        <th class="table-light"><?= $this->Number->format($subTotalDocPreparo) ?></th>
                        <th class="table-light"><?= $this->Number->format($subTotalFolhasPreparo) ?></th>
                    </tr>
                    <?php
                        $subTotalFolhasPreparo = $subTotalDocPreparo = 0;
                    ?>
                <?php endif; ?>
                <?php if ($key == count($relatorio_faturamento) - 1 || array_key_exists($key + 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['impressao'] != $relatorio_faturamento[$key + 1]['impressao'] || array_key_exists($key + 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['cliente'] != $relatorio_faturamento[$key + 1]['cliente']) : ?>
                    <tr>
                        <th></th>
                        <th colspan="4" class="table-light text-start">Total - <?= h($servico['impressao']) ?>: </th>
                        <th class="table-light"><?= $this->Number->format($subTotalDocImpressao) ?></th>
                        <th class="table-light"><?= $this->Number->format($subTotalFolhasImpressao) ?></th>
                    </tr>
                    <?php
                        $subTotalFolhasImpressao = $subTotalDocImpressao = 0;
                    ?>
                <?php endif; ?>
                <?php if ($key == count($relatorio_faturamento) - 1 || array_key_exists($key + 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['cliente'] != $relatorio_faturamento[$key + 1]['cliente']) : ?>
                    <tr>
                        <th colspan="5" class="table-light text-start">Total - <?= h($servico['cliente']) ?>: </th>
                        <th class="table-light"><?= $this->Number->format($subTotalDocCliente) ?></th>
                        <th class="table-light"><?= $this->Number->format($subTotalFolhasCliente) ?></th>
                    </tr>
                    <?php
                        $subTotalDocCliente = $subTotalFolhasCliente = 0;
                    ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <tr class="table-secondary sticky-bottom">
                <th>Total geral</th>
                <th colspan="4"></th>
                <th><?= $this->Number->format($total_docs) ?></th>
                <th><?= $this->Number->format($total_folhas) ?></th>
            </tr>
        </tbody>
    </table>
</div>