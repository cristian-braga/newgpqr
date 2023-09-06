<h2 class="text-center text-gpqr">SS13A15</h2>
<div class="ss13a15 index content">
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
                <?php foreach ($ss13a15 as $ss13a15) : ?>
                    <tr>
                        <td>SS13A15</td>
                        <td><?= $ss13a15->total === null ? '' : $this->Number->format($ss13a15->total) ?></td>
                        <td><?= h($ss13a15->job) ?></td>
                        <td><?= h($ss13a15->data) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ss13a15->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $ss13a15->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow'], ['confirm' => __('Are you sure you want to delete # {0}?', $ss13a15->id)]) ?>
                            <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $ss13a15->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('pagination') ?>
</div>