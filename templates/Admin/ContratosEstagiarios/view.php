<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContratosEstagiario $contratosEstagiario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contratos Estagiario'), ['action' => 'edit', $contratosEstagiario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contratos Estagiario'), ['action' => 'delete', $contratosEstagiario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contratosEstagiario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contratos Estagiarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contratos Estagiario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contratosEstagiarios view content">
            <h3><?= h($contratosEstagiario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= h($contratosEstagiario->funcionario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Matricula') ?></th>
                    <td><?= h($contratosEstagiario->matricula) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contratosEstagiario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Inicio Contrato') ?></th>
                    <td><?= h($contratosEstagiario->inicio_contrato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fim Contrato') ?></th>
                    <td><?= h($contratosEstagiario->fim_contrato) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
