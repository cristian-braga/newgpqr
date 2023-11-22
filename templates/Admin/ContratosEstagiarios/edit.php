<h3 class="text-center mt-2 mb-4">EDITAR ESTAGIÁRIO</h3>


<div class="row">
    <?= $this->Form->create($contratosEstagiario, ['id' => 'form','class' => 'mx-auto p-3 form ']) ?>

    <div class="row">
        <div class="col-md-3">
            <label class="form-label">Nome do funcionário</label>
            <?= $this->Form->control('funcionario_nome', ['class' => 'form-control', 'required', 'placeholder' => 'digite o nome', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Matrícula</label>
            <?= $this->Form->control('matricula', ['class' => 'form-control', 'required', 'placeholder' => 'digite a matrícula', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Início de Contrato</label>
            <?= $this->Form->control('inicio_contrato', ['type' => 'date', 'class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Fim do Contrato</label>
            <?= $this->Form->control('fim_contrato', ['type' => 'date', 'class' => 'form-control', 'label' => false]) ?>
        </div>
    </div>

    <div class="mt-5">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
    </div>
    <?= $this->Form->end() ?>

    