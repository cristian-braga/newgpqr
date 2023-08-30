<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cd $cd
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cd'), ['action' => 'edit', $cd->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cd'), ['action' => 'delete', $cd->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cd->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cd'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cd'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cd view content">
            <h3><?= h($cd->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($cd->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= h($cd->funcionario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Solicitante') ?></th>
                    <td><?= h($cd->solicitante) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= h($cd->cliente) ?></td>
                </tr>
                <tr>
                    <th><?= __('Observacao') ?></th>
                    <td><?= h($cd->observacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cd->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $this->Number->format($cd->quantidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ocorrencia') ?></th>
                    <td><?= $this->Number->format($cd->ocorrencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('DataAtual') ?></th>
                    <td><?= h($cd->dataAtual) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
