<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ss13e015 $ss13e015
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ss13e015'), ['action' => 'edit', $ss13e015->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ss13e015'), ['action' => 'delete', $ss13e015->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ss13e015->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ss13e015'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ss13e015'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ss13e015 view content">
            <h3><?= h($ss13e015->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Job') ?></th>
                    <td><?= h($ss13e015->job) ?></td>
                </tr>
                <tr>
                    <th><?= __('Referencia') ?></th>
                    <td><?= h($ss13e015->referencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= h($ss13e015->funcionario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ss13e015->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copias') ?></th>
                    <td><?= $ss13e015->copias === null ? '' : $this->Number->format($ss13e015->copias) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paginas') ?></th>
                    <td><?= $ss13e015->paginas === null ? '' : $this->Number->format($ss13e015->paginas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $ss13e015->total === null ? '' : $this->Number->format($ss13e015->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data') ?></th>
                    <td><?= h($ss13e015->data) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
