<h2 class="text-center text-gpqr mt-2 mb-4">SAALM005</h2>
<div class="saalm index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    <table class="table table-borderless table-striped text-center align-middle">
        <thead>
            <tr>
                <th>Job</th>
                <th>Páginas</th>
                <th>Data</th>
                <th>Funcionário</th>
                <th class="actions">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($saalm as $saalm) : ?>
                <tr>
                    <td><?= h($saalm->job) ?></td>
                    <td><?= $this->Number->format($saalm->total2) ?></td>
                    <td><?= h($saalm->dataAtual) ?></td>
                    <td><?= h($saalm->funcionario) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $saalm->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $saalm->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow'], ['confirm' => __('Are you sure you want to delete # {0}?', $saalm->id)]) ?>
                        <?= $this->Html->link(__('Pdf'), ['action' => 'pdf', $saalm->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>
</div>