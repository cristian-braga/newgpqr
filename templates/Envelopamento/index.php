<h3 class="text-center text-danger-emphasis mt-2 mb-4">ENVELOPAMENTO</h3>
<?= $this->Form->create(null, ['url' => ['controller' => 'Envelopamento', 'action' => 'atualizaEnvelopamento']]) ?>
<?= $this->Form->button('Lançar', ['id' => 'submit', 'class' => 'btn btn-dark mb-4 btn-lancar', 'style' => 'visibility: hidden;']) ?>
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
                <?php foreach ($envelopamento as $envelopamento) : ?>
                    <tr>
                        <td><input type="checkbox" name="selecionados[]" value="<?= $envelopamento->id ?>" class="btn-shadow"></td>
                        <td><?= $this->Html->link($envelopamento->servico->nome_servico, ['controller' => 'Atividade', 'action' => 'view', $envelopamento->atividade->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                        <td><?= h($envelopamento->atividade->data_cadastro) ?></td>
                        <td><?= h($envelopamento->atividade->remessa_atividade) ?></td>
                        <td><?= h($envelopamento->atividade->job) ?></td>
                        <td><?= $this->Number->format($envelopamento->atividade->quantidade_documentos) ?></td>
                        <td><?= h($envelopamento->atividade->data_postagem) ?></td>
                        <td><?= h($envelopamento->atividade->recibo_postagem) ?></td>
                        <td><?= h($envelopamento->status_atividade->status_atual) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $envelopamento->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $envelopamento->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $envelopamento->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?= $this->Form->end() ?>
<?= $this->element('pagination'); ?>

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