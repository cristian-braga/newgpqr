<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Digitalizacao> $digitalizacao
 */
?>
<h2 class="text-center text-gpqr mt-2 mb-4">Digitalização</h2>

<div class="digitalizacao index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary float-start mb-4']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('quantidade_documentos') ?></th>
                    <th><?= $this->Paginator->sort('periodo') ?></th>
                    <th><?= $this->Paginator->sort('servico_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($digitalizacao as $dtg): ?>
                <tr>
                    <td><?= $this->Number->format($dtg->quantidade_documentos) ?></td>
                    <td><?= h($dtg->periodo) ?></td>
                    <td><?= $dtg->has('servico') ? $this->Html->link($dtg->servico->id, ['controller' => 'Servico', 'action' => 'view', $dtg->servico->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('<i class="fa-regular fa-pen-to-square fa-lg" style="color: #ffc107"></i>' . __('')), ['action' => 'edit', $dtg->id], ['escape' => false, 'class' => 'p-2']); ?>
                        <?= $this->Form->postLink(__('<i class="fa-regular fa-trash-can fa-lg" style="color: #dc3545;"></i>' . __('')), ['action' => 'delete', $dtg->id], ['escape' => false, 'class' => 'p-2'], ['confirm' => __('Tem certeza que quer deletar essa Digitalizacao # {0}?', $dtg->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('pagination') ?>



