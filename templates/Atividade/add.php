<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atividade $atividade
 * @var \Cake\Collection\CollectionInterface|string[] $servico
 * @var \Cake\Collection\CollectionInterface|string[] $statusAtividade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Atividade'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="atividade form content">
            <?= $this->Form->create($atividade) ?>
            <fieldset>
                <legend><?= __('Add Atividade') ?></legend>
                <?php
                    echo $this->Form->control('job');
                    echo $this->Form->control('data_postagem', ['empty' => true]);
                    echo $this->Form->control('remessa_atividade');
                    echo $this->Form->control('quantidade_documentos');
                    echo $this->Form->label('recibo_postagem');
                    echo $this->Form->select('recibo_postagem', [0, 1, 2, 3], ['empty' => '-- Selecione --']);
                    echo $this->Form->control('servico_id', ['options' => $servico, 'empty' => '-- Selecione --']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
