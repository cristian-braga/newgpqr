<div class="impressao index content">
    <h3><?= __('Impressao') ?></h3>
    <div class="table-responsive">
        <?= $this->Form->create(null, ['url' => ['controller' => 'Impressao', 'action' => 'selecionaImpressora']]) ?>
            <?= $this->Form->button('Enviar', ['id' => 'submit', 'disabled']) ?>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th><?= $this->Paginator->sort('servico_id', ['label' => 'Serviço']) ?></th>
                        <th colspan="2"><?= $this->Paginator->sort('job') ?></th>
                        <th><?= $this->Paginator->sort('remessa_atividade', ['label' => 'Recibo/OCR/Remessa']) ?></th>
                        <th><?= $this->Paginator->sort('data_postagem', ['label' => 'Postagem']) ?></th>
                        <th><?= $this->Paginator->sort('quantidade_documentos', ['label' => 'Documentos']) ?></th>
                        <th><?= $this->Paginator->sort('recibo_postagem', ['label' => 'Recibos']) ?></th>
                        <th>Etapa</th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($impressao as $impressao): ?>
                    <tr>
                        <td><input type="checkbox" name="selecionados[]" value="<?= $impressao->id ?>"></td>
                        <td><?= $this->Html->link($impressao->servico->nome_servico, ['controller' => 'Servico', 'action' => 'view', $impressao->servico->id]) ?></td>
                        <td colspan="2"><?= h($impressao->atividade->job) ?></td>
                        <td><?= h($impressao->atividade->remessa_atividade) ?></td>
                        <td><?= h($impressao->atividade->data_postagem) ?></td>
                        <td><?= $this->Number->format($impressao->atividade->quantidade_documentos) ?></td>
                        <td><?= h($impressao->atividade->recibo_postagem) ?></td>
                        <td><?= $this->Html->link($impressao->status_atividade->status_atual, ['controller' => 'StatusAtividade', 'action' => 'view', $impressao->status_atividade->id]) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $impressao->id]) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $impressao->id]) ?>
                            <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $impressao->id], ['confirm' => __('Tem certeza que você quer excluir? # {0}?', $impressao->id)]) ?>
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