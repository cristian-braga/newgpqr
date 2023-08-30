<h2 class="text-center text-gpqr mt-2 mb-4">ATIVIDADE</h2>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary float-start mb-4']) ?>
<?= $this->Form->create(null, ['url' => ['controller' => 'Atividade', 'action' => 'confirmaAtividade']]) ?>
    <?= $this->Form->button('Lançar', ['id' => 'submit', 'class' => 'btn btn-dark btn-lancar', 'style' => 'visibility: hidden;']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th></th>
                    <th><?= $this->Paginator->sort('servico_id', ['label' => 'Serviço']) ?></th>
                    <th><?= $this->Paginator->sort('data_cadastro', ['label' => 'Cadastro']) ?></th>
                    <th>Remessa/OCR</th>
                    <th>Job</th>
                    <th>Documentos</th>
                    <th><?= $this->Paginator->sort('data_postagem', ['label' => 'Postagem']) ?></th>
                    <th>Recibos</th>
                    <th>Etapa</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!$atividade->isEmpty()) : ?>
                    <?php foreach ($atividade as $atividade) : ?>
                        <tr>
                            <td><input type="checkbox" name="selecionados[]" value="<?= $atividade->id ?>" class="btn-shadow"></td>
                            <td><?= $this->Html->link($atividade->servico->nome_servico, ['action' => 'view', $atividade->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                            <td><?= h($atividade->data_cadastro) ?></td>
                            <td><?= h($atividade->remessa_atividade) ?></td>
                            <td><?= h($atividade->job) ?></td>
                            <td><?= $this->Number->format($atividade->quantidade_documentos) ?></td>
                            <td><?= h($atividade->data_postagem) ?></td>
                            <td><?= h($atividade->recibo_postagem) ?></td>
                            <td class="bg-warning-subtle"><b><?= h($atividade->status_atividade->status_atual) ?></b></td>
                            <td>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $atividade->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                                <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $atividade->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $atividade->servico->nome_servico)]) ?>
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