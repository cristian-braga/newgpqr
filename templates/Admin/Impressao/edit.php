<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Impressao $impressao
 * @var string[]|\Cake\Collection\CollectionInterface $atividade
 * @var string[]|\Cake\Collection\CollectionInterface $servico
 * @var string[]|\Cake\Collection\CollectionInterface $statusAtividade
 * @var string[]|\Cake\Collection\CollectionInterface $impressora
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $impressao->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $impressao->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Impressao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="impressao form content">
            <?= $this->Form->create($impressao) ?>
            <fieldset>
                <legend><?= __('Edit Impressao') ?></legend>
                <?php
                    echo $this->Form->control('funcionario');
                    echo $this->Form->control('data_impressao', ['empty' => true]);
                    echo $this->Form->control('atividade_id', ['options' => $atividade]);
                    echo $this->Form->control('servico_id', ['options' => $servico]);
                    echo $this->Form->control('status_atividade_id', ['options' => $statusAtividade]);
                    echo $this->Form->control('impressora_id', ['options' => $impressora]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
