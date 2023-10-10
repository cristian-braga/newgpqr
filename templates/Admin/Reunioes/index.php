<h2 class="text-center text-gpqr mt-2 mb-4">REUNIÕES</h2>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>

<div class="conteudo">
    <?= $this->Form->create(null, ['type' => 'get']) ?>
        <div class="row g-3">
            <div class="col-md-2">
                <label class="form-label">Data inicio:</label>
                <input class="form-control" type="date" name="dataInicio" placeholder="Data de início">
            </div>
            <div class="col-md-2">
                <label class="form-label">Data final:</label>
                <input class="form-control" type="date" name="dataFim" placeholder="Data de fim">
            </div>
            <div class="col-md-2" style="margin-top: 3.2rem;">
                <?= $this->Form->button(__('Buscar'), ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
                <?= $this->Html->link(__('Limpar'), ['action' => 'index'], ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
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
                <td><button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#modal-<?= h($reunioes->id) ?>">
                        Detalhes
                    </button></td>
                <td><?= h($reunioes->local_reuniao) ?></td>
                <td><?= h($reunioes->data_reuniao) ?></td>
                <td><?= h($reunioes->horario_reuniao) ?></td>
                <td><?= h($reunioes->responsavel) ?></td>
                <td>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $reunioes->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $reunioes->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow ', 'confirm' => __('Você tem certeza que deseja excluir?')]) ?>
                    <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $reunioes->id], ['class' => 'btn btn-outline-secondary btn-sm btn-shadow', 'target' => '_blank']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->element('pagination') ?>

<!-- Modal fora da tabela -->
<?php foreach ($queryReunioes as $reunioes) : ?>
<?php criaModal($reunioes->id, $reunioes->tema_abordado, $reunioes->pauta, $reunioes->participantes, $reunioes->sumula); ?>
<?php endforeach; ?>


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
                        <b>Tema:</b> <br> ' . $tema_abordado . ' 
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
