<h2 class="text-center text-gpqr mt-3 mb-4">PROGRAMAÇÃO DE FÉRIAS</h2>


<div class="funcionarioFerias index content">
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn bg-secondary bg-gradient text-white float-end mb-4']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Funcionário') ?></th>
                    <th><?= $this->Paginator->sort('Status') ?></th>
                    <th><?= $this->Paginator->sort('Dias') ?></th>
                    <th><?= $this->Paginator->sort('Data de início') ?></th>
                    <th><?= $this->Paginator->sort('Data final') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($funcionarioFerias as $funcionarioFeria): ?>
                <tr> 
                    <td><?= h($funcionarioFeria->funcionario_nome) ?></td>
                    <?php $dataAtual = date('y-m-d'); ?>
                    <?php if($funcionarioFeria->data_inicio->getTimeStamp() > strtotime(date('y-m-d'))) { ?>
                    <td class="">Férias Marcadas</td>
                    <?php } elseif($funcionarioFeria->data_inicio < $dataAtual && date('y-m-d', strtotime("+". $funcionarioFeria->qtd_dias . " days", $funcionarioFeria->data_inicio->getTimeStamp())) >= $dataAtual) { ?>
                    <td class="">Em Férias</td>
                    <?php } else { ?>
                    <td class="">Férias finalizadas</td>
                    <?php }; ?>
                    <td><?= $this->Number->format($funcionarioFeria->qtd_dias) ?></td>
                    <td><?= h($funcionarioFeria->data_inicio) ?></td>
                    <td>data final</td>
                    <td class="">
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $funcionarioFeria->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $funcionarioFeria->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow ', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $funcionarioFeria->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->element('pagination') ?>
