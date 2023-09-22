<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Envelopamento', 'action' => 'index'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h2 class="text-center text-gpqr mt-2 mb-4">CONTROLE DE COLA</h2>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary mb-4']) ?>
<div class="table-responsive table-gpqr mx-auto" style="width: 65%;">
    <table class="table table-borderless table-striped text-center align-middle">
        <caption class="caption-top ms-2">Posicione o mouse sobre a operação "Entrada" para visualizar o número da Nota Fiscal</caption>
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('data_operacao', ['label' => 'Cadastro']) ?></th>
                <th><?= $this->Paginator->sort('funcionario', ['label' => 'Funcionário']) ?></th>
                <th>Quantidade</th>
                <th><?= $this->Paginator->sort('operacao', ['label' => 'Operação']) ?></th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!$controle_cola->isEmpty()) : ?>
                <?php foreach ($controle_cola as $cola) : ?>
                    <tr>
                        <td><?= h($cola->data_operacao) ?></td>
                        <td><?= h($cola->funcionario) ?></td>
                        <td><?= h($cola->quantidade) ?></td>
                        <td title="<?= ($cola->operacao == 'Entrada') ? 'Nota Fiscal: ' . h($cola->nota) : '' ?>"><?= h($cola->operacao) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cola->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $cola->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir os dados?')]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <td colspan="5">Ainda não existem lançamentos</td>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>

<h4 class="text-center text-gpqr mt-5 mb-4">ESTOQUE</h4>
<div class="table-responsive table-gpqr mx-auto mb-5" style="width: 40%;">
    <table class="table table-borderless text-center">
        <tbody>
            <?php
                if ($saldo <= 5) {
                    $classe = "table-danger";
                    $texto = "VAZIO";
                } elseif ($saldo <= 10) {
                    $classe = "table-warning";
                    $texto = "ACABANDO";
                } else {
                    $classe = "table-success";
                    $texto = "CHEIO";
                }
            ?>
            <tr>
                <td colspan="2" class="<?= $classe ?>">
                    <h6 class="pt-2"><b><?= $texto ?></b></h6>
                </td>
            </tr>
            <tr>
                <th class="table-light p-3">Entradas</th>
                <td class="p-3"><?= $this->Number->format($total_entrada) ?></td>
            </tr>
            <tr>
                <th class="table-light p-3">Saídas</th>
                <td class="p-3"><?= $this->Number->format($total_saida) ?></td>
            </tr>
            <tr class="table-secondary">
                <th>Saldo</th>
                <th><?= h($saldo) ?></th>
            </tr>
        </tbody>
    </table>
</div>