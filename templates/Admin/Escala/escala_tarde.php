<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'escalas'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h2 class="text-center text-gpqr mt-2 mb-4">ESCALA TARDE</h2>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add', '?' => ['turnoEscala' => 'tarde']], ['class' => 'btn btn-secondary mb-4']) ?>
<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-striped text-center align-middle">
        <thead>
            <tr>
                <th colspan="2"><?= $this->Paginator->sort('data_inicial', ['label' => 'Semana']) ?></th>
                <th>Impressão</th>
                <th>Conferência</th>
                <th>Envelopamento</th>
                <th>Triagem</th>
                <th>Expedição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!$escalas->isEmpty()) : ?>
                <?php foreach ($escalas as $escala) : ?>
                    <tr>
                        <td><?= h($escala->data_inicial) ?></td>
                        <td><?= h($escala->data_final) ?></td>
                        <td><?= h($escala->impressao) ?></td>
                        <td><?= h($escala->conferencia) ?></td>
                        <td><?= h($escala->envelopamento) ?></td>
                        <td><?= h($escala->triagem) ?></td>
                        <td><?= h($escala->expedicao) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $escala->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $escala->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir o registro?')]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <td colspan="8">Ainda não existem lançamentos</td>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>