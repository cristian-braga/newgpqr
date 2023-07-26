<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demanda $demanda
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Demanda'), ['action' => 'edit', $demanda->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Demanda'), ['action' => 'delete', $demanda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demanda->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Demandas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Demanda'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="demandas view content">
            <h3><?= h($demanda->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Demanda Resumo') ?></th>
                    <td><?= h($demanda->demanda_resumo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Demanda Descricao') ?></th>
                    <td><?= h($demanda->demanda_descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($demanda->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Demanda Prioridade') ?></th>
                    <td><?= h($demanda->demanda_prioridade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Demanda Tipo') ?></th>
                    <td><?= h($demanda->demanda_tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Demanda Responsavel') ?></th>
                    <td><?= h($demanda->demanda_responsavel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Demanda Solicitante') ?></th>
                    <td><?= h($demanda->demanda_solicitante) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($demanda->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Abertura') ?></th>
                    <td><?= h($demanda->data_abertura) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Termino') ?></th>
                    <td><?= h($demanda->data_termino) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodo') ?></th>
                    <td><?= h($demanda->periodo) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
