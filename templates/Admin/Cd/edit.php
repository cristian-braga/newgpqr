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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cd->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cd->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cd'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cd form content">
            <?= $this->Form->create($cd) ?>
            <fieldset>
                <legend><?= __('Edit Cd') ?></legend>
                <?php
                    echo $this->Form->control('quantidade');
                    echo $this->Form->control('ocorrencia');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('dataAtual');
                    echo $this->Form->control('funcionario');
                    echo $this->Form->control('solicitante');
                    echo $this->Form->control('cliente');
                    echo $this->Form->control('observacao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
