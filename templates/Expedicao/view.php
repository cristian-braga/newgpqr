<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expedicao $expedicao
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Expedicao'), ['action' => 'edit', $expedicao->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Expedicao'), ['action' => 'delete', $expedicao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expedicao->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Expedicao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Expedicao'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="expedicao view content">
            <h3><?= h($expedicao->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= h($expedicao->funcionario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ocorrencia') ?></th>
                    <td><?= h($expedicao->ocorrencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Solicitante') ?></th>
                    <td><?= h($expedicao->solicitante) ?></td>
                </tr>
                <tr>
                    <th><?= __('Responsavel Remessa') ?></th>
                    <td><?= h($expedicao->responsavel_remessa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Responsavel Expedicao') ?></th>
                    <td><?= h($expedicao->responsavel_expedicao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Responsavel Coleta') ?></th>
                    <td><?= h($expedicao->responsavel_coleta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Atividade') ?></th>
                    <td><?= $expedicao->has('atividade') ? $this->Html->link($expedicao->atividade->id, ['controller' => 'Atividade', 'action' => 'view', $expedicao->atividade->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Servico') ?></th>
                    <td><?= $expedicao->has('servico') ? $this->Html->link($expedicao->servico->id, ['controller' => 'Servico', 'action' => 'view', $expedicao->servico->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Atividade') ?></th>
                    <td><?= $expedicao->has('status_atividade') ? $this->Html->link($expedicao->status_atividade->id, ['controller' => 'StatusAtividade', 'action' => 'view', $expedicao->status_atividade->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($expedicao->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Capas') ?></th>
                    <td><?= $expedicao->capas === null ? '' : $this->Number->format($expedicao->capas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Lancamento') ?></th>
                    <td><?= h($expedicao->data_lancamento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Expedicao') ?></th>
                    <td><?= h($expedicao->data_expedicao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora') ?></th>
                    <td><?= h($expedicao->hora) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observacao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($expedicao->observacao)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
