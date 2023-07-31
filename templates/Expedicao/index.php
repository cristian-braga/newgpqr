<h2 class="text-center text-gpqr mt-2 mb-4">EXPEDIÇÃO</h2>
<?= $this->Html->link(__('Serviços Expedidos'), ['action' => 'servicosExpedidos'], ['class' => 'btn btn-secondary float-end mb-4']) ?>
<?= $this->Form->create(null, ['url' => ['controller' => 'Expedicao', 'action' => 'confirmaExpedicao']]) ?>
    <?= $this->Form->button('Lançar', ['id' => 'submit', 'class' => 'btn btn-dark btn-lancar', 'style' => 'visibility: hidden;']) ?>
    <div class="table-responsive table-gpqr">
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
                <?php foreach ($expedicao as $expedicao) : ?>
                    <tr>
                        <td><input type="checkbox" name="selecionados[]" value="<?= $expedicao->id ?>"></td>
                        <td><?= $this->Html->link($expedicao->atividade->servico->nome_servico, ['controller' => 'Atividade', 'action' => 'view', $expedicao->atividade->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                        <td><?= h($expedicao->atividade->data_cadastro) ?></td>
                        <td><?= h($expedicao->atividade->remessa_atividade) ?></td>
                        <td><?= h($expedicao->atividade->job) ?></td>
                        <td><?= $this->Number->format($expedicao->atividade->quantidade_documentos) ?></td>
                        <td><?= h($expedicao->atividade->data_postagem) ?></td>
                        <td><?= h($expedicao->atividade->recibo_postagem) ?></td>
                        <td><?= h($expedicao->status_atividade->status_atual) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $expedicao->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $expedicao->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $expedicao->atividade->servico->nome_servico)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?= $this->Form->end() ?>
<?= $this->element('pagination') ?>

<script>
    const botao = document.getElementById('submit');
    let checkboxes = document.querySelectorAll('input[type="checkbox"]');

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('click', function() {
            if (document.querySelector('input[type="checkbox"]:checked')) {
                botao.style.visibility = 'visible'; // Mostra o botão quando algum checkbox é selecionado
            } else {
                botao.style.visibility = 'hidden'; // Esconde o botão quando nenhum checkbox é selecionado
            }
        });
    });
</script>