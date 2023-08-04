<div class="relatorio index content">
    <h4>Demanda <?= h($demanda->id) ?> - <?= h($demanda->demanda_resumo) ?> </h4>
    <hr>
    <!-- botao que ativa o modal para finalizar -->
    <div class="mb-3"> 
    <?= $this->Html->link(__('Registrar finalização'), ['action' => 'salvarLog', $demanda->id], ['class' => 'btn btn-success float-end mb-4']); ?>
    </div>
    <!-- table -->
    <div class="table-responsive table-gpqr my-4">

        <table class="table table-borderless text-center mt-3">
            <thead>
                <tr>
                    <th>Desenvolvedor</th>
                    <th>Relatório da Demanda</th>
                    <th>Data término</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= h($demanda->demanda_responsavel) ?></td>
                    <td><?= h($demanda->demanda_log) ?></td>
                    <td><?= h($demanda->data_termino) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('<i class="fa-regular fa-pen-to-square fa-lg" style="color: #ffc107;"></i>' . __('')), ['action' => 'edit', $demanda->id], ['escape' => false, 'class' => 'p-2 ']); ?>
                        <?= $this->Form->postLink(__('<i class="fa-regular fa-trash-can fa-lg" style="color: #dc3545;"></i>' . __('')), ['action' => 'delete', $demanda->id], ['escape' => false, 'class' => 'p-2'], ['confirm' => __('Tem certeza que quer deletar essa demanda # {0}?', $demanda->id)]) ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
