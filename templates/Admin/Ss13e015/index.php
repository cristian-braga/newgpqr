<h3 class="text-center text-gpqr mt-2 mb-4">SS13E015</h3>
<div class="ss13e015 index content">
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
                <?php foreach ($ss13e015 as $ss13e015): ?>
                <tr>
                    <td>SS13e015</td>
                    <td><?= $ss13e015->total === null ? '' : $this->Number->format($ss13e015->total) ?></td>
                    <td><?= h($ss13e015->job) ?></td>
                    <td><?= h($ss13e015->data) ?></td>
                    <td>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ss13e015->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ss13e015->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow'], ['confirm' => __('Are you sure you want to delete # {0}?', $ss13e015->id)]) ?>
                        <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $ss13e015->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('pagination') ?>
</div>
