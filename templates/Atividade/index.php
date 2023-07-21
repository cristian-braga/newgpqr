<h3 class="text-center mt-2 mb-4">ATIVIDADE</h3>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-gpqr-success ']) ?>
<div class="table-responsive mt-4 table-gpqr">
    <?= $this->Form->create(null, ['url' => ['controller' => 'Atividade', 'action' => 'confirmaAtividade']]) ?>
        <table class="table table-borderless table-hover table-striped text-center">
            <thead>
                <tr>
                    <th></th>
                    <th><?= $this->Paginator->sort('servico_id', ['label' => 'Serviço']) ?></th>
                    <th><?= $this->Paginator->sort('data_cadastro', ['label' => 'Cadastro']) ?></th>
                    <th><?= $this->Paginator->sort('remessa_atividade', ['label' => 'Remessa/OCR']) ?></th>
                    <th><?= $this->Paginator->sort('job') ?></th>
                    <th><?= $this->Paginator->sort('quantidade_documentos', ['label' => 'Documentos']) ?></th>
                    <th><?= $this->Paginator->sort('data_postagem', ['label' => 'Postagem']) ?></th>
                    <th><?= $this->Paginator->sort('recibo_postagem', ['label' => 'Recibos']) ?></th>
                    <th>Etapa</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php foreach ($atividade as $atividade) : ?>
                    <tr>
                        <td><?= $this->Form->checkbox('selecionados[]', ['value' => $atividade->id]) ?></td>
                        <td><?= $this->Html->link($atividade->servico->nome_servico, ['action' => 'view', $atividade->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                        <td><?= h($atividade->data_cadastro) ?></td>
                        <td><?= h($atividade->remessa_atividade) ?></td>
                        <td><?= h($atividade->job) ?></td>
                        <td><?= $this->Number->format($atividade->quantidade_documentos) ?></td>
                        <td><?= h($atividade->data_postagem) ?></td>
                        <td><?= h($atividade->recibo_postagem) ?></td>
                        <td><?= h($atividade->status_atividade->status_atual) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $atividade->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow']) ?>
                            <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $atividade->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $atividade->servico->nome_servico)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $this->Form->button('Lançar', ['id' => 'submit', 'class' => 'btn btn-outline-dark', 'disabled']) ?>
    <?= $this->Form->end() ?>
</div>
<?= $this->element('pagination'); ?>

<script>
    const botao = document.getElementById('submit');
    let checkboxes = document.querySelectorAll('input[type="checkbox"]');

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('click', function() {
            botao.disabled = !document.querySelector('input[type="checkbox"]:checked');
        });
    });
</script>