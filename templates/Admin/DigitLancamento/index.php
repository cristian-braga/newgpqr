<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'digitalizacao'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h2 class="text-center text-gpqr mt-2 mb-4">LANÇAMENTO ALFRESCO</h2>
<?= $this->Html->link(__('Serviços Lançados'), ['action' => 'servicosLancados'], ['class' => 'btn btn-secondary float-end mb-4']) ?>
<?= $this->Form->create(null, ['url' => ['controller' => 'DigitLancamento', 'action' => 'add']]) ?>
    <?= $this->Form->button('Lançar', ['id' => 'submit', 'class' => 'btn btn-dark btn-lancar', 'style' => 'visibility: hidden;']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th><?= !$digitalizacao->isEmpty() ? '<input type="checkbox" id="selec_todos" class="btn-shadow">' : '' ?></th>
                    <th>Serviço</th>
                    <th>Cadastro</th>
                    <th>Remessa</th>
                    <th>Documentos</th>
                    <th>Postagem</th>
                    <th>Etapa</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!$digitalizacao->isEmpty()) : ?>
                    <?php foreach ($digitalizacao as $digitalizacao) : ?>
                        <tr>
                            <td><input type="checkbox" name="selecionados[]" value="<?= $digitalizacao->id ?>" class="btn-shadow"></td>
                            <td><?= $this->Html->link($digitalizacao->servico->nome_servico, ['controller' => 'Digitalizacao', 'action' => 'view', $digitalizacao->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                            <td><?= h($digitalizacao->data_cadastro) ?></td>
                            <td><?= h($digitalizacao->remessa) ?></td>
                            <td><?= $this->Number->format($digitalizacao->quantidade_documentos) ?></td>
                            <td><?= h($digitalizacao->data_postagem) ?></td>
                            <td class="bg-warning-subtle"><b><?= h($digitalizacao->status_digitalizacao) ?></b></td>
                            <td>
                                <?= $this->Html->link(__('Editar'), ['action' => 'editDigitalizacao', $digitalizacao->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                                <?= $this->Html->link(__('Excluir'), ['controller' => 'Digitalizacao', 'action' => 'delete', $digitalizacao->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('ATENÇÃO! Essa ação apagará o registro em TODAS as etapas e não poderá ser desfeita! Realmente deseja excluir o serviço:  {0}?', $digitalizacao->servico->nome_servico)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <td colspan="8">Ainda não existem lançamentos</td>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?= $this->Form->end() ?>
<?= $this->element('pagination') ?>