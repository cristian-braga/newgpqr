<h2 class="text-center text-gpqr mt-2 mb-4">IMPRESSÃO</h2>
<?= $this->Html->link(__('Serviços Impressos'), ['action' => 'servicosImpressos'], ['class' => 'btn btn-secondary float-end mb-4']) ?>
<?= $this->Form->create(null, ['url' => ['controller' => 'Impressao', 'action' => 'selecionaImpressora']]) ?>
    <?= $this->Form->button('Lançar', ['id' => 'submit', 'class' => 'btn btn-dark btn-lancar', 'style' => 'visibility: hidden;']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-hover table-striped text-center">
            <thead>
                <tr>
                    <th></th>
                    <th>Serviço</th>
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
                <?php foreach ($impressao as $impressao) : ?>
                    <tr>
                        <td><input type="checkbox" name="selecionados[]" value="<?= $impressao->id ?>"></td>
                        <td><?= $this->Html->link($impressao->atividade->servico->nome_servico, ['controller' => 'Atividade', 'action' => 'view', $impressao->atividade->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                        <td><?= h($impressao->atividade->data_cadastro) ?></td>
                        <td><?= h($impressao->atividade->remessa_atividade) ?></td>
                        <td><?= h($impressao->atividade->job) ?></td>
                        <td><?= $this->Number->format($impressao->atividade->quantidade_documentos) ?></td>
                        <td><?= h($impressao->atividade->data_postagem) ?></td>
                        <td><?= h($impressao->atividade->recibo_postagem) ?></td>
                        <td><?= h($impressao->status_atividade->status_atual) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $impressao->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $impressao->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow','confirm' => __('Realmente deseja excluir o serviço:  {0}?', $impressao->atividade->servico->nome_servico)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?= $this->Form->end() ?>
<?= $this->element('pagination'); ?>
<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-hover table-striped text-center">
        <thead>
            <tr>
                <th><?= $nuv_1->nome_impressora ?></th>
                <th><?= $nuv_2->nome_impressora ?></th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <tr>
                <td><?= $nuv_1->total_documentos ?></td>
                <td><?= $nuv_2->total_documentos ?></td>
            </tr>
        </tbody>
    </table>
</div>

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