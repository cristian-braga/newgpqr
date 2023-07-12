<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expedicao $expedicao
 * @var string[]|\Cake\Collection\CollectionInterface $atividade
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
                ['action' => 'delete', $expedicao->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $expedicao->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Expedicao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="expedicao form content">
            <?= $this->Form->create($expedicao) ?>
            <fieldset>
                <legend><?= __('Edit Expedicao') ?></legend>
                <?php
                    echo $this->Form->control('funcionario');
                    echo $this->Form->control('data_lancamento', ['empty' => true]);
                    echo $this->Form->control('data_expedicao', ['empty' => true]);
                    echo $this->Form->control('capas');
                    echo $this->Form->control('ocorrencia');
                    echo $this->Form->control('solicitante');
                    echo $this->Form->control('responsavel_remessa');
                    echo $this->Form->control('responsavel_expedicao');
                    echo $this->Form->control('responsavel_coleta');
                    echo $this->Form->control('observacao');
                    echo $this->Form->control('hora', ['empty' => true]);
                    echo $this->Form->control('atividade_id', ['options' => $atividade]);
                    echo $this->Form->control('servico_id', ['options' => $servico]);
                    echo $this->Form->control('status_atividade_id', ['options' => $statusAtividade]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
