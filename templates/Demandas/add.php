<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demanda $demanda
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="demandas form content">
            <?= $this->Form->create($demanda) ?>
            <fieldset>
                <legend>Adicionar Demanda</legend>
                <?php
                    echo $this->Form->label('Título');
                    echo $this->Form->text('demanda_resumo', ['type' => 'text', 'class' => 'form-control']);
                    echo $this->Form->label('Descrição');
                    echo $this->Form->textarea('demanda_descricao', ['type' => 'textarea', 'class' => 'form-control']);
                    echo $this->Form->label('Prioridade');
                    echo $this->Form->select('demanda_prioridade', ['Alto'=>'Alto', 'Médio'=>'Médio', 'Baixo'=>'Baixo'], ['empty' => '-- Selecione --']);
                    echo $this->Form->label('Tipo');
                    echo $this->Form->select('demanda_tipo', ['Erro'=>'Erro', 'Melhoria'=>'Melhoria', 'Criação'=>'Criação'], ['empty' => '-- Selecione --']);

                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
