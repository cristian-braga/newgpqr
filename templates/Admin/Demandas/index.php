<div class="demandas index content">
    <h2 class="text-center text-gpqr mt-2 mb-4">DEMANDAS</h2>
    <?= $this->Html->link(__('Cadastrar Demanda'), ['action' => 'add'], ['class' => 'btn btn-secondary float-end mb-4 me-2']) ?>


    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-hover table-striped text-center mt-3">
            <thead>
                <tr>
                    <!-- gera ordenação dos resultados da tabela (no padrão cakePHP) -->
                    <th><?= __('Demanda') ?></th>
                    <th><?= $this->Paginator->sort('demanda_tipo', ['label' => 'Tipo']) ?></th>
                    <th><?= $this->Paginator->sort('data_abertura', ['label' => 'Data abertura']); ?></th>
                    <th><?= $this->Paginator->sort('data_termino', ['label' => 'Data Término']) ?></th>
                    <th><?= $this->Paginator->sort('demanda_prioridade', ['label' => 'Prioridade']) ?></th>
                    <th><?= $this->Paginator->sort('status', ['label' => 'Status']) ?></th>
                    <th><?= __('Responsável') ?></th>
                    <th><?= __('Solicitante') ?> </th>
                    <th><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <!-- inicialização do loop foreach para percorrer cada elemento registrado na tabela Demandas -->
                <?php foreach ($demandas as $demanda): ?>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-outline-secondary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal-<?= h($demanda->id) ?>">
                            Detalhes
                        </button>
                        <div class="modal fade " id="exampleModal-<?= h($demanda->id) ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog"
                            data-bs-backdrop="false">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-body-secondary">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Demanda
                                            <?= h($demanda->id) ?> - <?= h($demanda->demanda_resumo) ?> </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <h2 class="fs-5">Descrição</h2>
                                            <p><textarea name="" id="" cols="50" rows="5" readonly><?= h($demanda->demanda_descricao) ?></textarea></p>
                                            <hr>
                                            <h2 class="fs-5">Responsável</h2>
                                            <p> <?php if(!$demanda->demanda_responsavel) :?>
                                                <div class="col"> - </div>
                                                <?php elseif(isset($demanda['demanda_responsavel'])) : ?>
                                                <div class="col"><?= h($demanda->demanda_responsavel) ?></div>
                                                <?php endif; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
    <?php if(isset($demanda['demanda_responsavel'])): ?>
    <?= $this->Form->postLink(__('Relatórios'), ['action' => 'relatorio', $demanda->id], ['class' => 'btn btn-outline-success']) ?>
    <?php endif; ?>
    </td>
    <td><?= h($demanda->demanda_tipo) ?></td>
    <td><?= h($demanda->data_abertura) ?></td>
    <td><?= h($demanda->data_termino) ?> </td>
    <td><?= h($demanda->demanda_prioridade) ?></td>
    <td><?= h($demanda->status) ?></td>

    <?php if(!$demanda['demanda_responsavel']) : ?>
    <td> <?= $this->Form->postButton(__('Confirmar'), ['action' => 'confirmarDemanda', $demanda->id], ['class' => 'btn btn-primary'], ['confirm' => __('Tem certeza que deseja aceitar essa demanda {0}', $demanda->id)]); ?>
    </td>
    <?php elseif(isset($demanda['demanda_log']) && isset($demanda['demanda_responsavel'])) : ?>
    <td><?= $this->Form->postButton(__('Dispensar'), ['action' => 'dispensarDemanda', $demanda->id], ['class' => 'btn btn-danger disabled'], ['confirm' => __('Tem certeza que deseja dispensar essa Demanda {0}?', $demanda->id)]); ?>
    </td>
    <?php else : ?>
    <td> <?= $this->Form->postButton(__('Dispensar'), ['action' => 'dispensarDemanda', $demanda->id], ['class' => 'btn btn-danger'], ['confirm' => __('Tem certeza que deseja dispensar essa Demanda {0}?', $demanda->id)]); ?>
    </td>
    <?php endif; ?>


    <td>Pega quem ta logado</td>
    <td class="actions">
        <?= $this->Html->link(__('<i class="fa-regular fa-pen-to-square fa-lg" style="color: #ffc107"></i>' . __('')), ['action' => 'edit', $demanda->id], ['escape' => false, 'class' => 'p-2']); ?>
        <?= $this->Form->postLink(__('<i class="fa-regular fa-trash-can fa-lg" style="color: #dc3545;"></i>' . __('')), ['action' => 'delete', $demanda->id], ['escape' => false, 'class' => 'p-2'], ['confirm' => __('Tem certeza que quer deletar essa demanda # {0}?', $demanda->id)]) ?>

    </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
</div>
<!-- Paginação do CakePHP, utilizado para gerar páginas caso, por exemplo, uma tabela seja extensa e a página tenha um limite -->
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
    </p>
</div>

</div>
