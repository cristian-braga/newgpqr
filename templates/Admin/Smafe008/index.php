<h2 class="text-center text-gpqr mt-2 mb-4">Smafe008</h2>
<div class="smafe008 index content">
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
                    <th><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($smafe008 as $smafe008): ?>
                <tr>
                    <td>Smafe008</td>
                    <td><?= h($smafe008->concurso) ?></td>
                    <td><?= h($smafe008->job) ?></td>
                    <td><?= h($smafe008->data) ?></td>
                    <td><?= $smafe008->totaltudo === null ? '' : $this->Number->format($smafe008->totaltudo) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $smafe008->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $smafe008->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow'], ['confirm' => __('Are you sure you want to delete # {0}?', $smafe008->id)]) ?>
                        <?= $this->Html->link(__('Pdf'), ['action' => 'pdf', $smafe008->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('pagination') ?>
</div>