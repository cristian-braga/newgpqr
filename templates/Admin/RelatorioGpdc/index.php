<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'relatorios'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h2 class="text-center text-gpqr mt-2 mb-4">RELATÓRIO GPDC</h2>
<div class="d-flex mb-5">
    <?= $this->Html->link(__('Exportar'), ['action' => 'exportar', '?' => ['filtro_servico' => $filtro_servico, 'data_inicio' => $data_inicio, 'data_fim' => $data_fim]], ['class' => 'btn btn-secondary mx-auto']) ?>
</div>
<div class="conteudo mt-5">
    <?= $this->Form->create(null, ['type' => 'get']) ?>
        <div class="row g-3">
            <div class="col-md-2">
                <label class="form-label">Serviço:</label>
                <?= $this->Form->control('filtro_servico', ['options' => $servicos, 'class' => 'form-select', 'empty' => '-- Selecione --', 'label' => false]) ?>
            </div>
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
<div class="table-gpqr mx-auto mb-5" style="width: 80%; overflow-y: auto; max-height: 95vh;">
    <table class="table table-borderless table-hover text-center align-middle">
        <caption class="ms-2">Relatório GPDC</caption>
        <thead class="table-secondary sticky-top">
            <tr>
                <th>Sistema/Fase</th>
                <th>Cliente</th>
                <th>Descrição</th>
                <th>Código</th>
                <th>Documentos</th>
                <th>Folhas</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($grupos_servicos as $nome_servico => $expedicao) : ?>
                <?php foreach ($expedicao as $key => $servico) : ?>
                    <?php if ($key !== 'totalDocs' && $key !== 'totalFolhas') : ?>
                        <tr>
                            <td><?= h($servico->nome_servico) ?></td>
                            <td><?= h($servico->cliente) ?></td>
                            <td><?= h($servico->descricao) ?></td>
                            <td><?= h($servico->codigo) ?></td>
                            <td><?= $this->Number->format($servico->documentos) ?></td>
                            <td><?= $this->Number->format($servico->folhas) ?></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
                <tr class="table-light">
                    <td colspan="4"><b><?= h($nome_servico) ?> - Totais:</b></td>
                    <td><b><?= $this->Number->format($expedicao['totalDocs']) ?></b></td>
                    <td><b><?= $this->Number->format($expedicao['totalFolhas']) ?></b></td>
                </tr>
            <?php endforeach; ?>
            <tr class="table-secondary sticky-bottom">
                <th>Total geral</th>
                <th colspan="3"></th>
                <th><?= $this->Number->format($total_docs) ?></th>
                <th><?= $this->Number->format($total_folhas) ?></th>
            </tr>
        </tbody>
    </table>
</div>