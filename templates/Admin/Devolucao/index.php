<h2 class="text-center text-gpqr mt-2 mb-4">Devolução</h2>
    <?= $this->Form->button('Lançar', ['id' => 'submit', 'class' => 'btn btn-dark btn-lancar', 'style' => 'visibility: hidden;']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('servico_id', ['label' => 'Serviço']) ?></th>
                    <th><?= $this->Paginator->sort('data_cadastro', ['label' => 'Cadastro']) ?></th>
                    <th>Remessa/OCR</th>
                    <th>Job</th>
                    <th>Documentos</th>
                    <th>Postagem</th>
                    <th>Recibos</th>
                    <th>Etapa</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!$devolucao->isEmpty()) : ?>
                    <?php foreach ($devolucao as $devolucao) : ?>
                        <tr>
                            <td><?= $this->Html->link($devolucao->servico->nome_servico, ['action' => ''], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                            <td><?= h($devolucao->data_cadastro) ?></td>
                            <td><?= h($devolucao->remessa_atividade) ?></td>
                            <td><?= h($devolucao->job) ?></td>
                            <td><?= $this->Number->format($devolucao->quantidade_documentos) ?></td>
                            <td><?= h($devolucao->data_postagem) ?></td>
                            <td><?= h($devolucao->recibo_postagem) ?></td>
                            <td class="bg-danger-subtle"><b><?= h($devolucao->status_atividade->status_atual) ?></b></td>
                            <td>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $devolucao->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                                <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $devolucao->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $devolucao->servico->nome_servico)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <td colspan="10">Ainda não existem lançamentos</td>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?= $this->Form->end() ?>
<?= $this->element('pagination') ?>