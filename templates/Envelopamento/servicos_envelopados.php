<h3 class="text-center mt-2 mb-4">SERVIÇOS ENVELOPADOS</h3>
<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-hover table-striped text-center">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('servico_id', ['label' => 'Serviço']) ?></th>
                <th><?= $this->Paginator->sort('data_envelopamento', ['label' => 'Data Envelopamento']) ?></th>
                <th><?= $this->Paginator->sort('funcionario', ['label' => 'Responsável']) ?></th>
                <th><?= $this->Paginator->sort('remessa_atividade', ['label' => 'Remessa/OCR']) ?></th>
                <th><?= $this->Paginator->sort('job') ?></th>
                <th><?= $this->Paginator->sort('quantidade_documentos', ['label' => 'Documentos']) ?></th>
                <th>Etapa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <?php foreach ($envelopamento as $envelopamento) : ?>
                <tr>
                    <td><?= $this->Html->link($envelopamento->atividade->servico->nome_servico, ['controller' => 'Atividade', 'action' => 'view', $envelopamento->atividade->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                    <td><?= h($envelopamento->data_envelopamento) ?></td>
                    <td><?= h($envelopamento->funcionario) ?></td>
                    <td><?= h($envelopamento->atividade->remessa_atividade) ?></td>
                    <td><?= h($envelopamento->atividade->job) ?></td>
                    <td><?= $this->Number->format($envelopamento->atividade->quantidade_documentos) ?></td>
                    <td><?= h($envelopamento->status_atividade->status_atual) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $envelopamento->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $envelopamento->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $envelopamento->atividade->servico->nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination'); ?>