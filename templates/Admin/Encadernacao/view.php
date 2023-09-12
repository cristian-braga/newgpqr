<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Encadernacao $encadernacao
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Encadernacao'), ['action' => 'edit', $encadernacao->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Encadernacao'), ['action' => 'delete', $encadernacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $encadernacao->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Encadernacao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Encadernacao'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="encadernacao view content">
            <h3><?= h($encadernacao->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($encadernacao->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ocorrencia') ?></th>
                    <td><?= h($encadernacao->ocorrencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Solicitante') ?></th>
                    <td><?= h($encadernacao->solicitante) ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= h($encadernacao->funcionario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Capa') ?></th>
                    <td><?= h($encadernacao->tipo_capa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($encadernacao->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paginas') ?></th>
                    <td><?= $this->Number->format($encadernacao->paginas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copias') ?></th>
                    <td><?= $encadernacao->copias === null ? '' : $this->Number->format($encadernacao->copias) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $encadernacao->total === null ? '' : $this->Number->format($encadernacao->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Capas') ?></th>
                    <td><?= $encadernacao->capas === null ? '' : $this->Number->format($encadernacao->capas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Cadastro') ?></th>
                    <td><?= h($encadernacao->data_cadastro) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
