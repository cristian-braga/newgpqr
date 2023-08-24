<h3 class="text-center mt-2 mb-4">SERVIÇOS IMPRESSOS</h3>
<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-striped text-center align-middle">
        <thead>
            <tr>
                <th>Serviço</th>
                <th><?= $this->Paginator->sort('data_impressao', ['label' => 'Data Impressão']) ?></th>
                <th><?= $this->Paginator->sort('funcionario', ['label' => 'Responsável']) ?></th>
                <th>Remessa/OCR</th>
                <th>Job</th>
                <th>Documentos</th>
                <th>Impressora</th>
                <th>Etapa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($impressao as $impressao) : ?>
                <tr>
                    <td><?= $this->Html->link($impressao->atividade->servico->nome_servico, ['controller' => 'Atividade', 'action' => 'view', $impressao->atividade->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                    <td><?= h($impressao->data_impressao) ?></td>
                    <td><?= h($impressao->funcionario) ?></td>
                    <td><?= h($impressao->atividade->remessa_atividade) ?></td>
                    <td><?= h($impressao->atividade->job) ?></td>
                    <td><?= $this->Number->format($impressao->atividade->quantidade_documentos) ?></td>
                    <td><?= h($impressao->impressora->nome_impressora) ?></td>
                    <td class="bg-success-subtle"><b><?= h($impressao->status_atividade->status_atual) ?></b></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $impressao->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Desfazer'), ['action' => 'voltarEtapa', $impressao->atividade_id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para "Aguardando Impressão". Deseja continuar?', $impressao->atividade->servico->nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>