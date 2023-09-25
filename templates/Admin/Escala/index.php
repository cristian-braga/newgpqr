<h2 class="text-center text-gpqr mt-3 mb-4">ESCALA MANHÃ</h2>



<div class="escala index content">
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn bg-secondary bg-gradient text-white float-start mb-4']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th class=""> Data Inicial </th>
                    <th class="">Data Final </th>
                    <th class="" colspan="2">Impressão</th>
                    <th class="">Conferência</th>
                    <th class="">Envelopamento</th>
                    <th class="" colspan="3">Triagem</th>
                    <th class="">Expedição</th>
                    <th class="actions  col-2"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($escala as $escalas): ?>
                <tr>
                    <td><?= h($escalas->data_inicial) ?></td>
                    <td ><?= h($escalas->data_final) ?></td>
                    <td class="bg-secondary bg-opacity-25"><?= h($escalas->imp_func1) ?></td>
                    <td class="bg-secondary bg-opacity-25"><?= h($escalas->imp_func2) ?></td>
                    <td><?= h($escalas->conf_func) ?></td>
                    <td><?= h($escalas->env_func) ?></td>
                    <td class="bg-secondary bg-opacity-25"><?= h($escalas->tri_func1) ?></td>
                    <td class="bg-secondary bg-opacity-25"><?= h($escalas->tri_func2) ?></td>
                    <td class="bg-secondary bg-opacity-25"><?= h($escalas->tri_func3) ?></td>
                    <td><?= h($escalas->exp_func) ?></td>
                    <td class="">
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $escalas->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $escalas->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow ', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $escalas->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>
<?= $this->element('pagination') ?>
