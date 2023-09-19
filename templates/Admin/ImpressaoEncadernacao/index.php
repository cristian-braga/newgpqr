<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'internos'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h3 class="text-center text-gpqr mt-2 mb-4">ENCADERNAÇÃO - IMPRESSÃO</h3>
<div class="impressaoEncadernacao index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    <div class="table-responsive table-gpqr" style="margin-top:1%;">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Páginas</th>
                    <th>Ocorrência</th>
                    <th>Cópias</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($impressaoEncadernacao as $impressaoEncadernacao): ?>
                <tr>
                    <td><?= h($impressaoEncadernacao->descricao) ?></td>
                    <td><?= $impressaoEncadernacao->paginas_imp === null ? '' : $this->Number->format($impressaoEncadernacao->paginas_imp) ?></td>
                    <td><?= h($impressaoEncadernacao->ocorrencia) ?></td>
                    <td><?= $impressaoEncadernacao->copias_imp === null ? '' : $this->Number->format($impressaoEncadernacao->copias_imp) ?></td>
                    <td><?= h($impressaoEncadernacao->dataAtual) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $impressaoEncadernacao->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $impressaoEncadernacao->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Deseja realmente excluir o serviço Impressão e Encadernação {0}?', $impressaoEncadernacao->id)]) ?>
                        <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $impressaoEncadernacao->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('pagination') ?>  
</div>
