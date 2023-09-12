<h3 class="text-center mt-2 mb-4">SERVIÇOS EXPEDIDOS</h3>
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
                <?= $this->Html->link(__('Limpar'), ['action' => 'index'], ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
</div>
<div class="table-gpqr">
    <table class="table table-borderless table-striped text-center align-middle">
        <thead class="sticky-top">
            <tr>
                <th>Serviço</th>
                <th><?= $this->Paginator->sort('data_expedicao', ['label' => 'Data Expedição']) ?></th>
                <th><?= $this->Paginator->sort('funcionario', ['label' => 'Responsável']) ?></th>
                <th>Remessa/OCR</th>
                <th>Job</th>
                <th>Documentos</th>
                <th>Etapa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($expedicao as $expedicao) : ?>
                <tr>
                    <td><?= $this->Html->link($expedicao->atividade->servico->nome_servico, ['controller' => 'Atividade', 'action' => 'view', $expedicao->atividade->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                    <td><?= h($expedicao->data_expedicao) ?></td>
                    <td><?= h($expedicao->funcionario) ?></td>
                    <td><?= h($expedicao->atividade->remessa_atividade) ?></td>
                    <td><?= h($expedicao->atividade->job) ?></td>
                    <td><?= $this->Number->format($expedicao->atividade->quantidade_documentos) ?></td>
                    <td class="bg-success-subtle"><b><?= h($expedicao->status_atividade->status_atual) ?></b></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $expedicao->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Desfazer'), ['action' => 'voltarEtapa', $expedicao->atividade_id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para "Aguardando Expedição/Liberação". Deseja continuar?', $expedicao->atividade->servico->nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>