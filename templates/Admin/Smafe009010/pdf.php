<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Smafe009010 $smafe009010
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Smafe009010'), ['action' => 'edit', $smafe009010->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Smafe009010'), ['action' => 'delete', $smafe009010->id], ['confirm' => __('Are you sure you want to delete # {0}?', $smafe009010->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Smafe009010'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Smafe009010'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="smafe009010 view content">
            <h3><?= h($smafe009010->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Servico') ?></th>
                    <td><?= h($smafe009010->servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Referencia') ?></th>
                    <td><?= h($smafe009010->referencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Concurso') ?></th>
                    <td><?= h($smafe009010->concurso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= h($smafe009010->funcionario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($smafe009010->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade Etiquetas') ?></th>
                    <td><?= $smafe009010->quantidade_etiquetas === null ? '' : $this->Number->format($smafe009010->quantidade_etiquetas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Job') ?></th>
                    <td><?= $smafe009010->job === null ? '' : $this->Number->format($smafe009010->job) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data') ?></th>
                    <td><?= h($smafe009010->data) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
