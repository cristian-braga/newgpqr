<h2 class="text-center text-gpqr mt-2 mb-4">ENVELOPAMENTO</h2>
<?= $this->Html->link(__('Serviços Envelopados'), ['action' => 'servicosEnvelopados'], ['class' => 'btn btn-secondary float-end mb-4']) ?>
<?= $this->Form->create(null, ['url' => ['controller' => 'Envelopamento', 'action' => 'atualizaEnvelopamento']]) ?>
    <?= $this->Form->button('Lançar', ['id' => 'submit', 'class' => 'btn btn-dark btn-lancar', 'style' => 'visibility: hidden;']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center">
            <thead>
                <tr>
                    <th></th>
                    <th>Serviço</th>
                    <th>Cadastro</th>
                    <th>Remessa/OCR</th>
                    <th>Job</th>
                    <th>Documentos</th>
                    <th>Postagem</th>
                    <th>Recibos</th>
                    <th>Etapa</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php foreach ($envelopamento as $envelopamento) : ?>
                    <tr>
                        <td><input type="checkbox" name="selecionados[]" value="<?= $envelopamento->id ?>" class="btn-shadow"></td>
                        <td><?= $this->Html->link($envelopamento->atividade->servico->nome_servico, ['controller' => 'Atividade', 'action' => 'view', $envelopamento->atividade->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                        <td><?= h($envelopamento->atividade->data_cadastro) ?></td>
                        <td><?= h($envelopamento->atividade->remessa_atividade) ?></td>
                        <td><?= h($envelopamento->atividade->job) ?></td>
                        <td><?= $this->Number->format($envelopamento->atividade->quantidade_documentos) ?></td>
                        <td><?= h($envelopamento->atividade->data_postagem) ?></td>
                        <td><?= h($envelopamento->atividade->recibo_postagem) ?></td>
                        <td class="bg-warning-subtle"><b><?= h($envelopamento->status_atividade->status_atual) ?></b></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['action' => 'editAtividade', $envelopamento->atividade_id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Html->link(__('Excluir'), ['controller' => 'Atividade', 'action' => 'delete', $envelopamento->atividade_id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('ATENÇÃO! Essa ação apagará o registro em TODAS as etapas e não poderá ser desfeita! Realmente deseja excluir o serviço:  {0}?', $envelopamento->atividade->servico->nome_servico)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?= $this->Form->end() ?>
<?= $this->element('pagination') ?>