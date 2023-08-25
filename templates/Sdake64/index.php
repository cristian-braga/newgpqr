<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Sdake64> $sdake64
 */
?>

<h2 class="text-center text-gpqr mt-2 mb-4">Sdake64</h2>
<div class="sdake64 index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    <div class="table-responsive">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                <th>Serviço</th>
                    <th><?= $this->Paginator->sort('paginas') ?></th>
                    <th><?= $this->Paginator->sort('job') ?></th>
                    <th><?= $this->Paginator->sort('dataAtual') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sdake64 as $sdake64) : ?>
                    <tr>
                        <td>SDAKE64</td>
                        <td><?= $this->Number->format($sdake64->paginas) ?></td>
                        <td><?= h($sdake64->job) ?></td>
                        <td><?= h($sdake64->dataAtual) ?></td>
                        <td>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sdake64->id],['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sdake64->id],['class' => 'btn btn-outline-danger btn-sm btn-shadow'], ['confirm' => __('Are you sure you want to delete # {0}?', $sdake64->id)]) ?>
                            <?= $this->Html->link(__('Pdf'), ['action' => 'pdf', $sdake64->id],['class' => 'btn btn-outline-primary btn-sm btn-shadow']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>