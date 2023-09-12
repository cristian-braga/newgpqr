<div class="ss13a20 index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    <div class="table-responsive table-gpqr" style="margin-top: 1%;">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>Sistema</th>
                    <th>Total</th>
                    <th>Job</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ss13a20 as $ss13a20): ?>
                <tr>
                    <td>SS13A20</td>
                    <td><?= $ss13a20->total === null ? '' : $this->Number->format($ss13a20->total) ?></td>
                    <td><?= h($ss13a20->job) ?></td>
                    <td><?= h($ss13a20->data) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ss13a20->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $ss13a20->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow'], ['confirm' => __('Are you sure you want to delete # {0}?', $ss13a20->id)]) ?>
                        <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $ss13a20->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->element('pagination') ?>