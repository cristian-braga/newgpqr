<h2 class="text-center text-gpqr mt-2 mb-4">PASSAGEM DE TURNO</h2>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary mb-2']) ?>
<div class="conteudo">
    <?= $this->Form->create(null, ['type' => 'get']) ?>
        <div class="row g-3">
            <div class="col-md-2">
                <label class="form-label">Etapa:</label>
                <?= $this->Form->control('etapa', ['options' => $etapas, 'class' => 'form-select', 'empty' => '-- Selecione --', 'label' => false]) ?>
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
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('data_cadastro', ['label' => 'Cadastro']) ?></th>
                <th><?= $this->Paginator->sort('funcionario', ['label' => 'Responsável']) ?></th>
                <th><?= $this->Paginator->sort('turno', ['label' => 'Turno']) ?></th>
                <th><?= $this->Paginator->sort('etapa', ['label' => 'Etapa']) ?></th>
                <th><?= $this->Paginator->sort('assunto', ['label' => 'Assunto']) ?></th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!$passagemTurno->isEmpty()) : ?>
                <?php foreach ($passagemTurno as $passagemTurno) : ?>
                    <tr>
                        <td><?= h($passagemTurno->data_cadastro) ?></td>
                        <td><?= h($passagemTurno->funcionario) ?></td>
                        <td><?= h($passagemTurno->turno) ?></td>
                        <td><?= h($passagemTurno->etapa) ?></td>
                        <td><?= h($passagemTurno->assunto) ?></td>
                        <td>
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $passagemTurno->id], ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $passagemTurno->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $passagemTurno->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir o registro?')]) ?>
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
