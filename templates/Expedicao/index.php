<div class="expedicao index content">
    <h3><?= __('Expedicao') ?></h3>
    <div class="table-responsive">
        <?= $this->Form->create(null, ['url' => ['controller' => 'Expedicao', 'action' => 'confirmaExpedicao']]) ?>
            <?= $this->Form->button('Enviar', ['id' => 'submit', 'disabled']) ?>
            <table>
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
                <tbody>
                    <?php foreach ($expedicao as $expedicao): ?>
                    <tr>
                        <td><input type="checkbox" name="selecionados[]" value="<?= $expedicao->id ?>"></td>
                        <td><?= $this->Html->link($expedicao->servico->nome_servico, ['controller' => 'Atividade', 'action' => 'view', $expedicao->atividade->id]) ?></td>
                        <td><?= h($expedicao->atividade->data_cadastro) ?></td>
                        <td><?= h($expedicao->atividade->remessa_atividade) ?></td>
                        <td><?= h($expedicao->atividade->job) ?></td>
                        <td><?= $this->Number->format($expedicao->atividade->quantidade_documentos) ?></td>
                        <td><?= h($expedicao->atividade->data_postagem) ?></td>
                        <td><?= h($expedicao->atividade->recibo_postagem) ?></td>
                        <td><?= h($expedicao->status_atividade->status_atual) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $expedicao->id]) ?>
                            <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $expedicao->id], ['confirm' => __('Tem certeza que você quer excluir? # {0}?', $expedicao->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?= $this->Form->end() ?>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

<script>
    const botao = document.getElementById('submit');
    let checkboxes = document.querySelectorAll('input[type="checkbox"]');

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('click', function() {
            botao.disabled = !document.querySelector('input[type="checkbox"]:checked');
        });
    });
</script>