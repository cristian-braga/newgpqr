<h2 class="text-center text-gpqr mt-2 mb-4">SERVIÇOS ANULADOS</h2>
<div class="conteudo mt-5">
    <?= $this->Form->create(null, ['type' => 'get']) ?>
        <div class="row g-3">
            <div class="col-md-2">
                <label class="form-label">Serviço</label>
                <?= $this->Form->control('servico', ['options' => $servicos, 'class' => 'form-select', 'empty' => '-- Selecione --', 'label' => false]) ?>
            </div>
            <div class="col-md-2">
                <label class="form-label">Data inicial</label>
                <?= $this->Form->control('data_inicio', ['type' => 'date', 'class' => 'form-control', 'label' => false]) ?>
            </div>
            <div class="col-md-2">
                <label class="form-label">Data final</label>
                <?= $this->Form->control('data_fim', ['type' => 'date', 'class' => 'form-control', 'label' => false]) ?>
            </div>
            <div class="col-md-2" style="margin-top: 3.2rem;">
                <?= $this->Form->button(__('Buscar'), ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
                <?= $this->Html->link(__('Limpar'), ['action' => 'index'], ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
</div>
<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-striped text-center align-middle">
        <thead>
            <tr>
                <th>Serviço</th>
                <th><?= $this->Paginator->sort('data_cadastro', ['label' => 'Data Cadastro']) ?></th>
                <th><?= $this->Paginator->sort('funcionario', ['label' => 'Responsável']) ?></th>
                <th>Remessa/OCR</th>
                <th>Job</th>
                <th>Documentos</th>
                <th>Etapa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!$servicosAnulados->isEmpty()) : ?>
                <?php foreach ($servicosAnulados as $servicoAnulado) : ?>
                    <tr>
                        <td><?= $this->Html->link($servicoAnulado->atividade->servico->nome_servico, ['controller' => 'servicosAnulados', 'action' => 'view', $servicoAnulado->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                        <td><?= h($servicoAnulado->data_cadastro) ?></td>
                        <td><?= h($servicoAnulado->funcionario) ?></td>
                        <td><?= h($servicoAnulado->atividade->remessa_atividade) ?></td>
                        <td><?= h($servicoAnulado->atividade->job) ?></td>
                        <td><?= $this->Number->format($servicoAnulado->atividade->quantidade_documentos) ?></td>
                        <td class="bg-danger-subtle"><b><?= h($servicoAnulado->status_atividade->status_atual) ?></b></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $servicoAnulado->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Form->postLink(__('Desfazer'), ['action' => 'voltarEtapa', $servicoAnulado->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para a etapa anterior à anulação. Deseja continuar?', $servicoAnulado->atividade->servico->nome_servico)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <td colspan="10">Ainda não existem lançamentos</td>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>