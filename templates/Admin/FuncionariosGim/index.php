<h2 class="text-center text-gpqr mt-2 mb-4">Funcionários Gim</h2>


<div class="funcionariosGim index content">
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary float-end mb-4']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('matricula') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('tel') ?></th>
                    <th><?= $this->Paginator->sort('turno') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($funcionariosGim as $funcionariosGim): ?>
                <tr>
                    <td><?= h($funcionariosGim->nome) ?></td>
                    <td><?= h($funcionariosGim->matricula) ?></td>
                    <td><?= h($funcionariosGim->email) ?></td>
                    <td><?= h($funcionariosGim->tel) ?></td>
                    <td><?= h($funcionariosGim->turno) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $funcionariosGim->id]) ?>
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



