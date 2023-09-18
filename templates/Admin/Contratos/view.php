<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contrato'), ['action' => 'edit', $contrato->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contrato'), ['action' => 'delete', $contrato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contratos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contrato'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contratos view content">
            <h3><?= h($contrato->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Contrato') ?></th>
                    <td><?= h($contrato->contrato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Empresa') ?></th>
                    <td><?= h($contrato->empresa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Maquina') ?></th>
                    <td><?= h($contrato->maquina) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contrato->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valo Mensal') ?></th>
                    <td><?= $this->Number->format($contrato->valo_mensal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Parcelas') ?></th>
                    <td><?= $this->Number->format($contrato->parcelas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saldo Contratual') ?></th>
                    <td><?= $this->Number->format($contrato->saldo_contratual) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vencimento') ?></th>
                    <td><?= h($contrato->vencimento) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
