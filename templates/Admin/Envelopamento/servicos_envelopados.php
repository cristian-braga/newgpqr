<h3 class="text-center mt-2 mb-4">SERVIÇOS ENVELOPADOS</h3>
<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-striped text-center">
        <thead>
            <tr>
                <th>Serviço</th>
                <th><?= $this->Paginator->sort('data_envelopamento', ['label' => 'Data Envelopamento']) ?></th>
                <th>Responsável</th>
                <th>Remessa/OCR</th>
                <th>Job</th>
                <th>Documentos</th>
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
                    <td class="bg-success-subtle"><b><?= h($envelopamento->status_atividade->status_atual) ?></b></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $envelopamento->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'voltarEtapa', $envelopamento->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para "Aguardando Envelopamento". Deseja continuar?', $envelopamento->atividade->servico->nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>