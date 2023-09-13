<h2 class="text-center text-gpqr mt-3 mb-4">FUNCIONÁRIOS GIM</h2>


<div class="funcionariosGim index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn bg-secondary bg-gradient text-white float-start mb-4']) ?>
    <?= $this->Html->link('Exportar Excel', ['action' => 'exportarExcel'], ['class' => 'btn btn-success float-end mb-4']) ?>

    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th class="w-25 "> Nome</th>
                    <th class=" col-1">Matrícula</th>
                    <th class="">Email</th>
                    <th class="">Telefone</th>
                    <th class="">Turno</th>
                    <th class="actions  col-2"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($funcionariosGim as $funcionariosGim): ?>
                <tr>
                    <td class="h6 text-uppercase"><?= h($funcionariosGim->nome) ?></td>
                    <td><?= h($funcionariosGim->matricula) ?></td>
                    <td><?= h($funcionariosGim->email) ?></td>
                    <td><?= h($funcionariosGim->tel) ?></td>
                    <td><?= h($funcionariosGim->turno) ?></td>
                    <td>
                        <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $funcionariosGim->id], ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $funcionariosGim->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $funcionariosGim->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow ', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $funcionariosGim->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->element('pagination') ?>
