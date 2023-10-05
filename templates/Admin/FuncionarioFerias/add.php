<h3 class="text-center mt-2 mb-4">CADASTRAR PROGRAMAÇÃO DE FÉRIAS DE FUNCIONÁRIO</h3>


<div class="row">
    <?= $this->Form->create($funcionarioFeria, ['id' => 'form','class' => 'mx-auto p-3 form ']) ?>

    <div class="row">
        <div class="col-md-3">
            <label class="form-label">Nome do funcionário</label>
            <?= $this->Form->control('funcionario_nome', ['class' => 'form-control', 'empty' => '-- Selecione --', 'required', 'placeholder' => 'digite o nome', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Quantidade de Dias</label>
            <?= $this->Form->control('qtd_dias', ['class' => 'form-control', 'empty' => '-- Selecione --', 'required', 'placeholder' => 'digite a quantidade', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Data de Início</label>
            <?= $this->Form->control('data_inicio', ['type' => 'date', 'class' => 'form-control', 'label' => false]) ?>
        </div>
    </div>

    <div class="mt-5">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
    </div>
    <?= $this->Form->end() ?>
