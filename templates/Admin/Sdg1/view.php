<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sdg1 $sdg1
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sdg1'), ['action' => 'edit', $sdg1->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sdg1'), ['action' => 'delete', $sdg1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sdg1->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sdg1'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sdg1'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sdg1 view content">
            <h3><?= h($sdg1->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Job') ?></th>
                    <td><?= h($sdg1->job) ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= h($sdg1->funcionario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sdg1->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copias') ?></th>
                    <td><?= $sdg1->copias === null ? '' : $this->Number->format($sdg1->copias) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paginas') ?></th>
                    <td><?= $this->Number->format($sdg1->paginas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Capa') ?></th>
                    <td><?= $sdg1->capa === null ? '' : $this->Number->format($sdg1->capa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $sdg1->total === null ? '' : $this->Number->format($sdg1->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('DataAtual') ?></th>
                    <td><?= h($sdg1->dataAtual) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
