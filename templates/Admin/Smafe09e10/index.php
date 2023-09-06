<h2 class="text-center text-gpqr mt-2 mb-4">Etiquetas</h2>
<div class="smafe09e10 index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    <div class="table-responsive table-gpqr" style="margin-top: 1%;">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>Sistema</th>
                    <th>Concurso</th>
                    <th>Job</th>
                    <th>Data</th>
                    <th>Total</th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($smafe09e10 as $smafe09e10): ?>
                <tr>
                    <td>SMAFE009/10</td>
                    <td><?= h($smafe09e10->concurso) ?></td>
                    <td><?= h($smafe09e10->job) ?></td>
                    <td><?= h($smafe09e10->data) ?></td>
                    <td><?= $smafe09e10->quantidade_etiquetas === null ? '' : $this->Number->format($smafe09e10->quantidade_etiquetas) ?></td>
                    <td>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $smafe09e10->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $smafe09e10->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow'], ['confirm' => __('Are you sure you want to delete # {0}?', $smafe09e10->id)]) ?>
                            <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $smafe09e10->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                        </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('pagination') ?>
</div>