<h2 class="text-center text-gpqr mt-3 mb-4">CONTRATOS</h2>


<div class="contratos index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn bg-secondary bg-gradient text-white float-start mb-4']) ?>

    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th class=""> Contrato </th>
                    <th class=" col-1">Empresa </th>
                    <th class="">Máquina</th>
                    <th class="">Valor Mensal</th>
                    <th class="">Parcelas</th>
                    <th class="">Saldo contratual</th>
                    <th class="">Vencimento</th>
                    <th class="actions  col-2"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($contratos as $contrato): ?>
                <tr>
                <td><?= $this->Number->format($contrato->id) ?></td>
                    <td><?= h($contrato->contrato) ?></td>
                    <td><?= h($contrato->empresa) ?></td>
                    <td><?= h($contrato->maquina) ?></td>
                    <td><?= $this->Number->format($contrato->valor_mensal) ?></td>
                    <td><?= $this->Number->format($contrato->parcelas) ?></td>
                    <td><?= $this->Number->format($contrato->saldo_contratual) ?></td>
                    <td><?= h($contrato->vencimento) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $contrato->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $contrato->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow ', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $contrato->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->element('pagination') ?>
