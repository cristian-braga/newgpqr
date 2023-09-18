<h2 class="text-center text-gpqr mt-3 mb-4">ESTAGIÁRIOS</h2>


<div class="contratosEstagiarios index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn bg-secondary bg-gradient text-white float-start mb-4']) ?>

    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th class="w-25 "> Funcionário</th>
                    <th class=" col-1">Matrícula</th>
                    <th class="">Início de Contrato</th>
                    <th class="">Fim do Contrato</th>
                    <th class="actions  col-2"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($contratosEstagiarios as $contratosEstagiario): ?>
                <tr>
                <td><?= $this->Number->format($contratosEstagiario->id) ?></td>
                    <td><?= h($contratosEstagiario->funcionario) ?></td>
                    <td><?= h($contratosEstagiario->matricula) ?></td>
                    <td><?= h($contratosEstagiario->inicio_contrato) ?></td>
                    <td><?= h($contratosEstagiario->fim_contrato) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $contratosEstagiario->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $contratosEstagiario->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow ', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $contratosEstagiario->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->element('pagination') ?>
