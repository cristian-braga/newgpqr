<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demanda $demanda
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $demanda->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $demanda->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Demandas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="demandas form content">
            <?= $this->Form->create($demanda) ?>
            <fieldset>
                <legend>Editar Demanda</legend>
                <?php
                    echo $this->Form->label('Título');
                    echo $this->Form->text('demanda_resumo', ['type' => 'text', 'class' => 'form-control']);
                    echo $this->Form->label('Descrição');
                    echo $this->Form->textarea('demanda_descricao', ['class' => 'form-control']);
                    echo $this->Form->label('Prioridade');
                    echo $this->Form->select('demanda_prioridade', ['Alto'=>'Alto', 'Médio'=>'Médio', 'Baixo'=>'Baixo'], ['empty' => '-- Selecione --', 'name' => 'demanda_prioridade']);
                    echo $this->Form->label('Tipo');
                    echo $this->Form->select('demanda_tipo', ['Erro'=>'Erro', 'Melhoria'=>'Melhoria', 'Criação'=>'Criação'], ['empty' => '-- Selecione --', 'name' => 'demanda_prioridade']);
                    

                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
