<h3 class="text-center mt-2 mb-4">SERVIÇOS IMPRESSOS</h3>
<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-hover table-striped text-center">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('servico_id', ['label' => 'Serviço']) ?></th>
                <th><?= $this->Paginator->sort('data_impressao', ['label' => 'Data Impressão']) ?></th>
                <th><?= $this->Paginator->sort('funcionario', ['label' => 'Responsável']) ?></th>
                <th><?= $this->Paginator->sort('remessa_atividade', ['label' => 'Remessa/OCR']) ?></th>
                <th><?= $this->Paginator->sort('job') ?></th>
                <th><?= $this->Paginator->sort('quantidade_documentos', ['label' => 'Documentos']) ?></th>
                <th>Etapa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <?php foreach ($impressao as $impressao) : ?>
                <tr>
                    <td><?= $this->Html->link($impressao->servico->nome_servico, ['controller' => 'Atividade', 'action' => 'view', $impressao->atividade->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                    <td><?= h($impressao->data_impressao) ?></td>
                    <td><?= h($impressao->funcionario) ?></td>
                    <td><?= h($impressao->atividade->remessa_atividade) ?></td>
                    <td><?= h($impressao->atividade->job) ?></td>
                    <td><?= $this->Number->format($impressao->atividade->quantidade_documentos) ?></td>
                    <td><?= h($impressao->status_atividade->status_atual) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $impressao->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $impressao->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $impressao->servico->nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination'); ?>