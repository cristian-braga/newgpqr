<h2 class="text-center text-gpqr mt-2 mb-4">RELATÓRIO FATURAMENTO</h2>
<div class="d-flex mb-5">
    <?= $this->Html->link(__('Exportar'), ['action' => 'exportar'], ['class' => 'btn btn-secondary mx-auto']) ?>
</div>
<div class="table-gpqr mx-auto mb-5" style="width: 90%;">
    <table class="table table-borderless text-center align-middle">
        <caption class="ms-2">Faturamento</caption>
        <thead class="sticky-top">
            <tr class="table-secondary">
                <th>Cliente</th>
                <th>Serviço</th>
                <th>Descrição</th>
                <th>Impressão</th>
                <th>Preparo</th>
                <th>Documentos</th>
                <th>Folhas</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente => $servicos) : ?>
                <td rowspan="<?= count($servicos) ?>"><b><?= h($cliente) ?></b></td>
                <?php foreach ($servicos as $key => $servico) : ?>
                    <?php if ($key !== 'totais') : ?>
                        <tr>
                            <td><?= h($servico['nome_servico']) ?></td>
                            <td><?= h($servico['descricao_servico']) ?></td>
                            <td><?= h($servico['impressao_servico']) ?></td>
                            <td><?= h($servico['tipo_preparo_servico']) ?></td>
                            <td><?= $this->Number->format($servico['total_docs']) ?></td>
                            <td><?= $this->Number->format($servico['total_folhas']) ?></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
                <tr class="table-light">
                    <td colspan="3"></td>
                    <td colspan="2" class="text-start"><b>Total - <?= h($servicos[0]['tipo_preparo_servico']) ?></b></td>
                    <td><b><?= $this->Number->format($servicos['totais']['totalDocPreparo']) ?></b></td>
                    <td><b><?= $this->Number->format($servicos['totais']['totalFolhasPreparo']) ?></b></td>
                </tr>
                <tr class="table-light">
                    <td colspan="3"></td>
                    <td colspan="2" class="text-start"><b>Total - <?= h($servicos[0]['impressao_servico']) ?></b></td>
                    <td><b><?= $this->Number->format($servicos['totais']['totalDocImpressao']) ?></b></td>
                    <td><b><?= $this->Number->format($servicos['totais']['totalFolhasImpressao']) ?></b></td>
                </tr>
                <tr class="table-light">
                    <td colspan="4"></td>
                    <td><b>Total:</b></td>
                    <td><b><?= $this->Number->format($servicos['totais']['totalDocCliente']) ?></b></td>
                    <td><b><?= $this->Number->format($servicos['totais']['totalFolhasCliente']) ?></b></td>
                </tr>
            <?php endforeach; ?>
            <tr class="table-secondary">
                <th>Total geral</th>
                <th colspan="4"></th>
                <th><?= $this->Number->format($total_docs) ?></th>
                <th><?= $this->Number->format($total_folhas) ?></th>
            </tr>
        </tbody>
    </table>
</div>