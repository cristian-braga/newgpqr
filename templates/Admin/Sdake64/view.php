<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sdake64 $sdake64
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sdake64'), ['action' => 'edit', $sdake64->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sdake64'), ['action' => 'delete', $sdake64->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sdake64->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sdake64'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sdake64'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sdake64 view content">
            <h3><?= h($sdake64->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Job') ?></th>
                    <td><?= h($sdake64->job) ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= h($sdake64->funcionario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sdake64->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copias') ?></th>
                    <td><?= $sdake64->copias === null ? '' : $this->Number->format($sdake64->copias) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paginas') ?></th>
                    <td><?= $this->Number->format($sdake64->paginas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $sdake64->total === null ? '' : $this->Number->format($sdake64->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total1') ?></th>
                    <td><?= $sdake64->total1 === null ? '' : $this->Number->format($sdake64->total1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copias1') ?></th>
                    <td><?= $sdake64->copias1 === null ? '' : $this->Number->format($sdake64->copias1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paginas1') ?></th>
                    <td><?= $sdake64->paginas1 === null ? '' : $this->Number->format($sdake64->paginas1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total2') ?></th>
                    <td><?= $sdake64->total2 === null ? '' : $this->Number->format($sdake64->total2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copias2') ?></th>
                    <td><?= $sdake64->copias2 === null ? '' : $this->Number->format($sdake64->copias2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paginas2') ?></th>
                    <td><?= $sdake64->paginas2 === null ? '' : $this->Number->format($sdake64->paginas2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totaltudo') ?></th>
                    <td><?= $sdake64->totaltudo === null ? '' : $this->Number->format($sdake64->totaltudo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total3') ?></th>
                    <td><?= $sdake64->total3 === null ? '' : $this->Number->format($sdake64->total3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copias3') ?></th>
                    <td><?= $sdake64->copias3 === null ? '' : $this->Number->format($sdake64->copias3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paginas3') ?></th>
                    <td><?= $sdake64->paginas3 === null ? '' : $this->Number->format($sdake64->paginas3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total4') ?></th>
                    <td><?= $sdake64->total4 === null ? '' : $this->Number->format($sdake64->total4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copias4') ?></th>
                    <td><?= $sdake64->copias4 === null ? '' : $this->Number->format($sdake64->copias4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paginas4') ?></th>
                    <td><?= $sdake64->paginas4 === null ? '' : $this->Number->format($sdake64->paginas4) ?></td>
                </tr>
                <tr>
                    <th><?= __('DataAtual') ?></th>
                    <td><?= h($sdake64->dataAtual) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
