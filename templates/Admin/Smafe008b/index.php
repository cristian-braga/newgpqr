<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'pmmg'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h3 class="text-center text-gpqr mt-2 mb-4">SMAFE008B</h3>
<div class="smafe008b index content">
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
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($smafe008b as $smafe008b): ?>
                <tr>
                    <td>SMAFE008B</td>
                    <td><?= h($smafe008b->concurso) ?></td>
                    <td><?= h($smafe008b->job) ?></td>
                    <td><?= h($smafe008b->data) ?></td>
                    <td><?= $smafe008b->total === null ? '' : $this->Number->format($smafe008b->total) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $smafe008b->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $smafe008b->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Deseja realmente excluir o serviço SMAFE008B: {0}?', $smafe008b->id)]) ?>
                        <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $smafe008b->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('pagination') ?>
</div>