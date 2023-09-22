<h2 class="text-center text-gpqr mt-2 mb-4">ENVELOPAMENTO</h2>
<div class="btn-group dropstart float-end mb-4">
    <?= $this->Form->button('Outras Páginas', ['type' => 'button', 'class' => 'btn btn-secondary dropdown-toggle', 'data-bs-toggle' => 'dropdown', 'aria-expanded' => false]) ?>
    <ul class="dropdown-menu dropdown-menu-dark">
        <li><?= $this->Html->link(__('Serviços Envelopados'), ['action' => 'servicosEnvelopados'], ['class' => 'dropdown-item']) ?></li>
        <li><hr class="dropdown-divider"></li>
        <li><?= $this->Html->link(__('Passagem de Turno'), ['controller' => 'PassagemTurno', 'action' => 'index'], ['class' => 'dropdown-item']) ?></li>
        <li><?= $this->Html->link(__('Controle de Cola'), ['controller' => 'ControleCola', 'action' => 'index'], ['class' => 'dropdown-item']) ?></li>
    </ul>
</div>
<?= $this->Form->create(null, ['url' => ['controller' => 'Envelopamento', 'action' => 'add']]) ?>
    <?= $this->Form->button('Lançar', ['id' => 'submit', 'class' => 'btn btn-dark btn-lancar', 'style' => 'visibility: hidden;']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th><?= !$atividade->isEmpty() ? '<input type="checkbox" id="selec_todos" class="btn-shadow">' : '' ?></th>
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
            <tbody>
                <?php if (!$atividade->isEmpty()) : ?>
                    <?php foreach ($atividade as $atividade) : ?>
                        <tr>
                            <td><input type="checkbox" name="selecionados[]" value="<?= $atividade->id ?>" class="btn-shadow"></td>
                            <td><?= $this->Html->link($atividade->servico->nome_servico, ['controller' => 'Atividade', 'action' => 'view', $atividade->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                            <td><?= h($atividade->data_cadastro) ?></td>
                            <td><?= h($atividade->remessa_atividade) ?></td>
                            <td><?= h($atividade->job) ?></td>
                            <td><?= $this->Number->format($atividade->quantidade_documentos) ?></td>
                            <td><?= h($atividade->data_postagem) ?></td>
                            <td><?= h($atividade->recibo_postagem) ?></td>
                            <td class="bg-warning-subtle"><b><?= h($atividade->status_atividade->status_atual) ?></b></td>
                            <td>
                                <?= $this->Html->link(__('Editar'), ['action' => 'editAtividade', $atividade->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                                <?= $this->Html->link(__('Excluir'), ['controller' => 'Atividade', 'action' => 'delete', $atividade->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('ATENÇÃO! Essa ação apagará o registro em TODAS as etapas e não poderá ser desfeita! Realmente deseja excluir o serviço:  {0}?', $atividade->servico->nome_servico)]) ?>
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