<div class="atividade index content">
    <?= $this->Html->link(__('New Atividade'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Atividade') ?></h3>
    <div class="table-responsive">
        <?= $this->Form->create(null, ['url' => ['controller' => 'Atividade', 'action' => 'confirmaStatus']]) ?>
            <?= $this->Form->button('Enviar', ['id' => 'submit', 'disabled']) ?>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th colspan="2"><?= $this->Paginator->sort('job') ?></th>
                        <th><?= $this->Paginator->sort('data_atividade') ?></th>
                        <th><?= $this->Paginator->sort('data_postagem') ?></th>
                        <th><?= $this->Paginator->sort('data_cadastro') ?></th>
                        <th><?= $this->Paginator->sort('funcionario') ?></th>
                        <th><?= $this->Paginator->sort('remessa_atividade') ?></th>
                        <th><?= $this->Paginator->sort('quantidade_documentos') ?></th>
                        <th><?= $this->Paginator->sort('quantidade_folhas') ?></th>
                        <th><?= $this->Paginator->sort('quantidade_paginas') ?></th>
                        <th><?= $this->Paginator->sort('recibo_postagem') ?></th>
                        <th><?= $this->Paginator->sort('servico_id') ?></th>
                        <th><?= $this->Paginator->sort('status_atividade_id') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($atividade as $atividade): ?>
                    <tr>
                        <td><input type="checkbox" name="selecionados[]" value="<?= $atividade->id ?>"></td>
                        <td colspan="2"><?= h($atividade->job) ?></td>
                        <td><?= h($atividade->data_atividade) ?></td>
                        <td><?= h($atividade->data_postagem) ?></td>
                        <td><?= h($atividade->data_cadastro) ?></td>
                        <td><?= h($atividade->funcionario) ?></td>
                        <td><?= h($atividade->remessa_atividade) ?></td>
                        <td><?= $this->Number->format($atividade->quantidade_documentos) ?></td>
                        <td><?= $this->Number->format($atividade->quantidade_folhas) ?></td>
                        <td><?= $this->Number->format($atividade->quantidade_paginas) ?></td>
                        <td><?= h($atividade->recibo_postagem) ?></td>
                        <td><?= $this->Html->link($atividade->servico->nome_servico, ['controller' => 'Servico', 'action' => 'view', $atividade->servico->id]) ?></td>
                        <td><?= $this->Html->link($atividade->status_atividade->status_atual, ['controller' => 'StatusAtividade', 'action' => 'view', $atividade->status_atividade->id]) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $atividade->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $atividade->id]) ?>
                            <?= $this->Html->link(__('Delete'), ['action' => 'delete', $atividade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atividade->id)]) ?>
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