<h2 class="text-center text-gpqr mt-2 mb-4">CONFERÊNCIA</h2>
<?= $this->Html->link(__('Serviços Conferidos'), ['action' => 'servicosConferidos'], ['class' => 'btn btn-secondary float-end mb-4']) ?>
<?= $this->Form->create(null, ['url' => ['controller' => 'Conferencia', 'action' => 'atualizaConferencia']]) ?>
    <?= $this->Form->button('Lançar', ['id' => 'submit', 'class' => 'btn btn-dark btn-lancar', 'style' => 'visibility: hidden;']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-hover table-striped text-center">
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
                <?php foreach ($conferencia as $conferencia) : ?>
                    <tr>
                        <td><input type="checkbox" name="selecionados[]" value="<?= $conferencia->id ?>" class="btn-shadow"></td>
                        <td><?= $this->Html->link($conferencia->atividade->servico->nome_servico, ['controller' => 'Atividade', 'action' => 'view', $conferencia->atividade_id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                        <td><?= h($conferencia->atividade->data_cadastro) ?></td>
                        <td><?= h($conferencia->atividade->remessa_atividade) ?></td>
                        <td><?= h($conferencia->atividade->job) ?></td>
                        <td><?= $this->Number->format($conferencia->atividade->quantidade_documentos) ?></td>
                        <td><?= h($conferencia->atividade->data_postagem) ?></td>
                        <td><?= h($conferencia->atividade->recibo_postagem) ?></td>
                        <td><?= h($conferencia->status_atividade->status_atual) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['action' => 'editAtividade', $conferencia->atividade_id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $conferencia->atividade_id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('ATENÇÃO! Essa ação apagará o registro em TODAS as etapas e não poderá ser desfeita! Realmente deseja excluir o serviço:  {0}?', $conferencia->atividade->servico->nome_servico)]) ?>
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