<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Escala $escala
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Escala'), ['action' => 'edit', $escala->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Escala'), ['action' => 'delete', $escala->id], ['confirm' => __('Are you sure you want to delete # {0}?', $escala->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Escala'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Escala'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="escala view content">
            <h3><?= h($escala->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Imp Func1') ?></th>
                    <td><?= h($escala->imp_func1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imp Func2') ?></th>
                    <td><?= h($escala->imp_func2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Conf Func') ?></th>
                    <td><?= h($escala->conf_func) ?></td>
                </tr>
                <tr>
                    <th><?= __('Env Func') ?></th>
                    <td><?= h($escala->env_func) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tri Func1') ?></th>
                    <td><?= h($escala->tri_func1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tru Func2') ?></th>
                    <td><?= h($escala->tru_func2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tri Func3') ?></th>
                    <td><?= h($escala->tri_func3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exp Func') ?></th>
                    <td><?= h($escala->exp_func) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($escala->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Inicial') ?></th>
                    <td><?= h($escala->data_inicial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Final') ?></th>
                    <td><?= h($escala->data_final) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
