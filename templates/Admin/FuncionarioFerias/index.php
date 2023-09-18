<h2 class="text-center text-gpqr mt-3 mb-4">PROGRAMAÇÃO DE FÉRIAS</h2>


<div class="funcionarioFerias index content">
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn bg-secondary bg-gradient text-white float-end mb-4']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Funcionário') ?></th>
                    <th><?= $this->Paginator->sort('Quantidade de dias') ?></th>
                    <th><?= $this->Paginator->sort('Data de início') ?></th>
                    <th><?= $this->Paginator->sort('Data final') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($funcionarioFerias as $funcionarioFeria): ?>
                <tr> 
                    <td><?= h($funcionarioFeria->funcionario_nome) ?></td>
                    <td><?= $this->Number->format($funcionarioFeria->qtd_dias) ?></td>
                    <td><?= h($funcionarioFeria->data_inicio) ?></td>
                    <td><?= h($funcionarioFeria->data_final) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $funcionarioFeria->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $funcionarioFeria->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $funcionarioFeria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionarioFeria->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->element('pagination') ?>
