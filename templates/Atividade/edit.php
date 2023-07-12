<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atividade $atividade
 * @var string[]|\Cake\Collection\CollectionInterface $servico
 * @var string[]|\Cake\Collection\CollectionInterface $statusAtividade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $atividade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $atividade->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Atividade'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="atividade form content">
            <?= $this->Form->create($atividade) ?>
            <fieldset>
                <legend><?= __('Edit Atividade') ?></legend>
                <?php
                    echo $this->Form->control('job');
                    echo $this->Form->control('data_atividade', ['empty' => true]);
                    echo $this->Form->control('data_postagem', ['empty' => true]);
                    echo $this->Form->control('data_cadastro', ['empty' => true]);
                    echo $this->Form->control('funcionario');
                    echo $this->Form->control('remessa_atividade');
                    echo $this->Form->control('quantidade_documentos');
                    echo $this->Form->control('quantidade_folhas');
                    echo $this->Form->control('quantidade_paginas');
                    echo $this->Form->control('recibo_postagem');
                    echo $this->Form->control('servico_id', ['options' => $servico, 'empty' => true]);
                    echo $this->Form->control('status_atividade_id', ['options' => $statusAtividade, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
