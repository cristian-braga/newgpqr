<h3 class="text-center mt-2 mb-4">SERVIÇOS CONFERIDOS</h3>
<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-hover table-striped text-center">
        <thead>
            <tr>
                <th>Serviço</th>
                <th><?= $this->Paginator->sort('data_conferencia', ['label' => 'Data Conferência']) ?></th>
                <th>Responsável</th>
                <th>Remessa/OCR</th>
                <th>Job</th>
                <th>Documentos</th>
                <th>Etapa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <?php foreach ($conferencia as $conferencia) : ?>
                <tr>
                    <td><?= $this->Html->link($conferencia->atividade->servico->nome_servico, ['controller' => 'Atividade', 'action' => 'view', $conferencia->atividade->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                    <td><?= h($conferencia->data_conferencia) ?></td>
                    <td><?= h($conferencia->funcionario) ?></td>
                    <td><?= h($conferencia->atividade->remessa_atividade) ?></td>
                    <td><?= h($conferencia->atividade->job) ?></td>
                    <td><?= $this->Number->format($conferencia->atividade->quantidade_documentos) ?></td>
                    <td><?= h($conferencia->status_atividade->status_atual) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $conferencia->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $conferencia->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $conferencia->atividade->servico->nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>