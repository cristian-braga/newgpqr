<div class="row">
    <div class="column-responsive column-80">
        <div class="demandas form content">
            <?= $this->Form->create($demanda) ?>
            <fieldset>
                <legend><?= __('Adicionar Demanda') ?></legend>
                 <?php
                    echo $this->Form->label('Título');
                    echo $this->Form->text('demanda_resumo');
                    echo $this->Form->label('Descrição');
                    echo $this->Form->text('demanda_descricao');
                    echo $this->Form->label('Prioridade');
                    echo $this->Form->select('demanda_prioridade', ['Urgente' => 'Urgente' , 'Alto' => 'Alto', 'Médio' => 'Médio', 'Baixo' => 'Baixo']); //array associativo
                    echo $this->Form->label('Tipo');
                    echo $this->Form->select('demanda_tipo', ['Erro' => 'Erro', 'Melhoria' => 'Melhoria', 'Criação' => 'Criação']);
                ?> 
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
