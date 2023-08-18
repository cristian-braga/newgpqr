<h3 class="text-center mt-2 mb-4">SERVIÇOS EXPEDIDOS</h3>
<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-striped text-center">
        <thead>
            <tr>
                <th>Serviço</th>
                <th><?= $this->Paginator->sort('data_expedicao', ['label' => 'Data Expedição']) ?></th>
                <th>Responsável</th>
                <th>Remessa/OCR</th>
                <th>Job</th>
                <th>Documentos</th>
                <th>Etapa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="align-middle">
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
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'voltarEtapa', $expedicao->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para "Aguardando Triagem/Liberação". Deseja continuar?', $expedicao->atividade->servico->nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>