<h3 class="text-center text-gpqr">SMAFE 009/010</h3>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
<div class="table-responsive table-gpqr" style="margin-top:1%;">
    <table class="table table-borderless table-striped text-center align-middle">
        <thead>
            <tr>
                <th>Serviço</th>
                <th>Concurso</th>
                <th>Data</th>
                <th>Total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($smafe009010 as $smafe009010): ?>
            <tr>
                <td><?= h($smafe009010->servico) ?></td>
                <td><?= h($smafe009010->concurso) ?></td>
                <td><?= h($smafe009010->data) ?></td>
                <td><?= $smafe009010->quantidade_etiquetas === null ? '' : $this->Number->format($smafe009010->quantidade_etiquetas) ?>
                </td>
                <td>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $smafe009010->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                    <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $smafe009010->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $smafe009010->id)]) ?>
                    <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $smafe009010->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>
</div>