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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= h($demanda->demanda_responsavel) ?></td>
                    <td><?= h($demanda->demanda_log) ?></td>
                    <td><?= h($demanda->data_termino) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
