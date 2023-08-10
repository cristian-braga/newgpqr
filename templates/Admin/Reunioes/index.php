<h2 class="text-center text-gpqr mt-2 mb-4">Reuniões</h2>
<div class="d-flex flex-column align-items-start">
    <div class="mb-4">
        <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    </div>

    <h6><b>Informe o período que deseja exibir:</b></h6>

    <div class="d-flex align-items-center mb-4">
        <?= $this->Form->create(null, ['type' => 'get', 'class' => 'd-flex gap-3']) ?>

        <input class="form-control" type="date" name="dataInicio" placeholder="Data de início">
        <input class="form-control" type="date" name="dataFim" placeholder="Data de fim">
        <input type="submit" class="btn btn-outline-secondary" value="Buscar">

        <?= $this->Html->link(__('Limpar'), ['action' => 'index'], ['class' => 'btn btn-outline-secondary']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-hover table-striped text-center">
        <thead>
            <tr>
                <th>Tema</th>
                <th>Local</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Responsável</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <?php foreach ($queryReunioes as $reunioes) : ?>
                <tr>
                    <td><?= h($reunioes->tema_abordado) ?></td>
                    <td><?= h($reunioes->local_reuniao) ?></td>
                    <td><?= h($reunioes->data_reuniao) ?></td>
                    <td><?= h($reunioes->horario_reuniao) ?></td>
                    <td><?= h($reunioes->responsavel) ?></td>
                    <td>
                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-<?= h($reunioes->id) ?>">
                            Detalhes
                        </button>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $reunioes->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $reunioes->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Você tem certeza que deseja excluir?')]) ?>
                        <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $reunioes->id], ['class' => 'btn btn-outline-success btn-sm', 'target' => '_blank']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal fora da tabela -->
<?php foreach ($queryReunioes as $reunioes) : ?>
    <?php criaModal($reunioes->id, $reunioes->tema_abordado, $reunioes->pauta, $reunioes->participantes, $reunioes->sumula); ?>
<?php endforeach; ?>

<?= $this->element('pagination') ?>

<?php
function criaModal($id, $tema_abordado, $pauta, $participantes, $sumula)
{
    echo '
        <div class="modal fade" id="modal-' . $id . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" >
                    <div class="modal-header">
                        <h1 class="modal-title fs-4" id="exampleModalLabel">' . $tema_abordado . '</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <b>Pauta:</b> <br> ' . $pauta . ' 
                    </div>
                                    
                    <div class="modal-body">
                        <b>Participantes:</b> <br> ' . $participantes . ' 
                    </div>

                    <div class="modal-body">
                        <b>Súmula:</b> <br> ' . $sumula . ' 
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    ';
}
?>