<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'DigitQualidade', 'action' => 'index'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h3 class="text-center mt-2 mb-4">SERVIÇOS CONFERIDOS</h3>
<div class="conteudo mt-5">
    <?= $this->Form->create(null, ['type' => 'get']) ?>
        <div class="row g-3">
            <div class="col-md-2">
                <label class="form-label">Serviço:</label>
                <?= $this->Form->control('servico', ['options' => $servicos, 'class' => 'form-select', 'empty' => '-- Selecione --', 'label' => false]) ?>
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
                <?= $this->Html->link(__('Limpar'), ['action' => 'servicosConferidos'], ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
</div>
<div class="table-gpqr">
    <table class="table table-borderless table-striped text-center align-middle">
        <thead class="sticky-top">
            <tr>
                <th>Serviço</th>
                <th><?= $this->Paginator->sort('data_qualidade', ['label' => 'Data Controle']) ?></th>
                <th><?= $this->Paginator->sort('funcionario', ['label' => 'Responsável']) ?></th>
                <th>Remessa</th>
                <th>Documentos</th>
                <th>Etapa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($digitQualidade as $digitQualidade) : ?>
                <tr>
                    <td><?= $this->Html->link($digitQualidade->digitalizacao->servico->nome_servico, ['controller' => 'Digitalizacao', 'action' => 'view', $digitQualidade->digitalizacao->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                    <td><?= h($digitQualidade->data_qualidade) ?></td>
                    <td><?= h($digitQualidade->funcionario) ?></td>
                    <td><?= h($digitQualidade->digitalizacao->remessa) ?></td>
                    <td><?= $this->Number->format($digitQualidade->digitalizacao->quantidade_documentos) ?></td>
                    <td class="bg-success-subtle"><b><?= h($digitQualidade->status_atividade) ?></b></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $digitQualidade->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Desfazer'), ['action' => 'voltarEtapa', $digitQualidade->digitalizacao_id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para "Aguardando Cont. Qualidade". Deseja continuar?', $digitQualidade->digitalizacao->servico->nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>