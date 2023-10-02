<h2 class="text-center text-gpqr mt-2 mb-4">DIGITALIZAÇÃO</h2>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
<div class="conteudo">
    <?= $this->Form->create(null, ['type' => 'get']) ?>
        <div class="row g-3">
            <div class="col-md-2">
                <label class="form-label">Serviço:</label>
                <?= $this->Form->control('servico', ['options' => $servicos, 'class' => 'form-select', 'empty' => '-- Selecione --', 'label' => false]) ?>
            </div>
            <div class="col-md-2">
                <label class="form-label">Período:</label>
                <?= $this->Form->control('periodo', ['type' => 'month', 'class' => 'form-control', 'label' => false]) ?>
            </div>
            <div class="col-md-2">
                <label class="form-label">Funcionário:</label>
                <?= $this->Form->control('funcionario', ['options' => $funcionarios, 'class' => 'form-select', 'empty' => '--- Selecione ---', 'label' => false]) ?>
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
                <th><?= $this->Paginator->sort('servico_id', ['label' => 'Serviço']) ?></th>
                <th><?= $this->Paginator->sort('data_digitalizacao', ['label' => 'Cadastro']) ?></th>
                <th><?= $this->Paginator->sort('funcionario', ['label' => 'Funcionário']) ?></th>
                <th>Documentos</th>
                <th><?= $this->Paginator->sort('periodo', ['label' => 'Período']) ?></th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($digitalizacao as $dtg) : ?>
                <tr>
                    <td><?= h($dtg->servico->nome_servico) ?></td>
                    <td><?= h($dtg->data_digitalizacao) ?></td>
                    <td><?= h($dtg->funcionario) ?></td>
                    <td><?= $this->Number->format($dtg->quantidade_documentos) ?></td>
                    <td><?= h($dtg->periodo->format('m/Y')) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $dtg->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $dtg->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow ', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $dtg->servico->nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>
