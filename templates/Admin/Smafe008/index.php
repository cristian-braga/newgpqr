<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'pmmg'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h2 class="text-center text-gpqr mt-2 mb-4">SMAFE008</h2>
<div class="smafe008 index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    <div class="table-responsive table-gpqr" style="margin-top: 1%;">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
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
                    <td><?= h($smafe008->concurso) ?></td>
                    <td><?= h($smafe008->job) ?></td>
                    <td><?= h($smafe008->data) ?></td>
                    <td><?= $smafe008->totaltudo === null ? '' : $this->Number->format($smafe008->totaltudo) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $smafe008->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $smafe008->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Deseja realmente excluir o serviço SMAFE008: {0}?', $smafe008->id)]) ?>
                        <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $smafe008->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('pagination') ?>
</div>