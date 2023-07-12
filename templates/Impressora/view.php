<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Impressora $impressora
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Impressora'), ['action' => 'edit', $impressora->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Impressora'), ['action' => 'delete', $impressora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $impressora->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Impressora'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Impressora'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="impressora view content">
            <h3><?= h($impressora->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Impressora') ?></th>
                    <td><?= h($impressora->nome_impressora) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($impressora->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Impressao') ?></h4>
                <?php if (!empty($impressora->impressao)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario') ?></th>
                            <th><?= __('Data Impressao') ?></th>
                            <th><?= __('Atividade Id') ?></th>
                            <th><?= __('Servico Id') ?></th>
                            <th><?= __('Status Atividade Id') ?></th>
                            <th><?= __('Impressora Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($impressora->impressao as $impressao) : ?>
                        <tr>
                            <td><?= h($impressao->id) ?></td>
                            <td><?= h($impressao->funcionario) ?></td>
                            <td><?= h($impressao->data_impressao) ?></td>
                            <td><?= h($impressao->atividade_id) ?></td>
                            <td><?= h($impressao->servico_id) ?></td>
                            <td><?= h($impressao->status_atividade_id) ?></td>
                            <td><?= h($impressao->impressora_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Impressao', 'action' => 'view', $impressao->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Impressao', 'action' => 'edit', $impressao->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Impressao', 'action' => 'delete', $impressao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $impressao->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
