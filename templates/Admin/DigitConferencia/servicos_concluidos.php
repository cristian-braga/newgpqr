<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'DigitConferencia', 'action' => 'index'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h3 class="text-center mt-2 mb-4">SERVIÇOS CONCLUÍDOS</h3>
<div class="conteudo mt-5">
    <?= $this->Form->create(null, ['type' => 'get']) ?>
        <div class="row g-3">
            <div class="col-md-2">
                <label class="form-label">Serviço:</label>
                <?= $this->Form->control('servico', ['options' => $servicos, 'class' => 'form-select', 'empty' => '-- Selecione --', 'label' => false]) ?>
            </div>
            <div class="col-md-2">
                <label class="form-label">Funcionário:</label>
                <?= $this->Form->control('funcionario', ['options' => $funcionarios, 'class' => 'form-select', 'empty' => '--- Selecione ---', 'label' => false]) ?>
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
                <?= $this->Html->link(__('Limpar'), ['action' => 'servicosLancados'], ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
</div>
<div class="table-gpqr">
    <table class="table table-borderless table-striped text-center align-middle">
        <thead class="sticky-top">
            <tr>
                <th>Serviço</th>
                <th><?= $this->Paginator->sort('data_conferencia', ['label' => 'Data Conferência']) ?></th>
                <th><?= $this->Paginator->sort('funcionario', ['label' => 'Responsável']) ?></th>
                <th>Remessa</th>
                <th>Documentos</th>
                <th>Etapa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($digitConferencia as $digitConferencia) : ?>
                <tr>
                    <td><?= $this->Html->link($digitConferencia->digitalizacao->servico->nome_servico, ['controller' => 'Digitalizacao', 'action' => 'view', $digitConferencia->digitalizacao->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                    <td><?= h($digitConferencia->data_conferencia) ?></td>
                    <td><?= h($digitConferencia->funcionario) ?></td>
                    <td><?= h($digitConferencia->digitalizacao->remessa) ?></td>
                    <td><?= $this->Number->format($digitConferencia->digitalizacao->quantidade_documentos) ?></td>
                    <td class="bg-success-subtle"><b><?= h($digitConferencia->status_digitalizacao) ?></b></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $digitConferencia->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Desfazer'), ['action' => 'voltarEtapa', $digitConferencia->digitalizacao_id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para "Aguardando Conferência". Deseja continuar?', $digitConferencia->digitalizacao->servico->nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>