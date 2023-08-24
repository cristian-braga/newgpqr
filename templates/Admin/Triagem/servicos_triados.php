<h3 class="text-center mt-2 mb-4">SERVIÇOS TRIADOS</h3>
<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-striped text-center align-middle">
        <thead>
            <tr>
                <th>Serviço</th>
                <th><?= $this->Paginator->sort('data_triagem', ['label' => 'Data Triagem']) ?></th>
                <th><?= $this->Paginator->sort('funcionario', ['label' => 'Responsável']) ?></th>
                <th>Remessa/OCR</th>
                <th>Job</th>
                <th>Documentos</th>
                <th>Etapa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($triagem as $triagem) : ?>
                <tr>
                    <td><?= $this->Html->link($triagem->atividade->servico->nome_servico, ['controller' => 'Atividade', 'action' => 'view', $triagem->atividade->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                    <td><?= h($triagem->data_triagem) ?></td>
                    <td><?= h($triagem->funcionario) ?></td>
                    <td><?= h($triagem->atividade->remessa_atividade) ?></td>
                    <td><?= h($triagem->atividade->job) ?></td>
                    <td><?= $this->Number->format($triagem->atividade->quantidade_documentos) ?></td>
                    <td class="bg-success-subtle"><b><?= h($triagem->status_atividade->status_atual) ?></b></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $triagem->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Desfazer'), ['action' => 'voltarEtapa', $triagem->atividade_id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para "Aguardando Triagem". Deseja continuar?', $triagem->atividade->servico->nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>