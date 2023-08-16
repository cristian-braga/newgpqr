<h3 class="text-center mt-2 mb-4">SERVIÇOS TRIADOS</h3>
<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-striped text-center">
        <thead>
            <tr>
                <th>Serviço</th>
                <th><?= $this->Paginator->sort('data_triagem', ['label' => 'Data Triagem']) ?></th>
                <th>Responsável</th>
                <th>Remessa/OCR</th>
                <th>Job</th>
                <th>Documentos</th>
                <th>Etapa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="align-middle">
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
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $triagem->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $triagem->atividade->servico->nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>