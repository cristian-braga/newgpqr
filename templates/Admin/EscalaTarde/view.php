<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EscalaTarde $escalaTarde
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Escala Tarde'), ['action' => 'edit', $escalaTarde->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Escala Tarde'), ['action' => 'delete', $escalaTarde->id], ['confirm' => __('Are you sure you want to delete # {0}?', $escalaTarde->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Escala Tarde'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Escala Tarde'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="escalaTarde view content">
            <h3><?= h($escalaTarde->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Imp Func1') ?></th>
                    <td><?= h($escalaTarde->imp_func1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Conf Func') ?></th>
                    <td><?= h($escalaTarde->conf_func) ?></td>
                </tr>
                <tr>
                    <th><?= __('Env Func') ?></th>
                    <td><?= h($escalaTarde->env_func) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tri Func1') ?></th>
                    <td><?= h($escalaTarde->tri_func1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tri Func2') ?></th>
                    <td><?= h($escalaTarde->tri_func2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tri Func3') ?></th>
                    <td><?= h($escalaTarde->tri_func3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exp Func') ?></th>
                    <td><?= h($escalaTarde->exp_func) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($escalaTarde->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Inicial') ?></th>
                    <td><?= h($escalaTarde->data_inicial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Final') ?></th>
                    <td><?= h($escalaTarde->data_final) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
