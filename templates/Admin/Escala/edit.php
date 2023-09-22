<h3 class="text-center mt-2 mb-4">ADICIONAR ESCALA</h3>


<div class="row">
    <?= $this->Form->create($escala, ['id' => 'form','class' => 'mx-auto p-3 form ']) ?>

    <div class="row">
        <div class="col-md-3">
            <label class="form-label">Data Inicial</label>
            <?= $this->Form->control('data_inicial', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Data Final</label>
            <?= $this->Form->control('data_final', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <h3 class="p-3">Impressão</h3>
        <div class="col-md-3">
            <label class="form-label">Funcionário 1</label>
            <?= $this->Form->control('imp_func1', ['class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Funcionário 2</label>
            <?= $this->Form->control('imp_func2', ['type' => 'number', 'class' => 'form-control', 'label' => false]) ?>
        </div>
        <h3 class="p-3">Conferência</h3>
        <div class="col-md-3">
            <label class="form-label">Funcionário</label>
            <?= $this->Form->control('conf_func', ['type' => 'number', 'class' => 'form-control', 'label' => false]) ?>
        </div>
        <h3 class="p-3">Envelopamento</h3>
        <div class="col-md-3">
            <label class="form-label">Funcionário</label>
            <?= $this->Form->control('env_func', ['type' => 'number', 'class' => 'form-control', 'label' => false]) ?>
        </div>
        <h3 class="p-3">Triagem</h3>
        <div class="col-md-3">
            <label class="form-label">Funcionário 1</label>
            <?= $this->Form->control('tri_func1', ['type' => 'date', 'class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Funcionário 2</label>
            <?= $this->Form->control('tru_func2', ['type' => 'date', 'class' => 'form-control', 'label' => false]) ?>
        </div>
        <h3 class="p-3">Expedição</h3>
        <div class="col-md-3">
            <label class="form-label">Funcionário </label>
            <?= $this->Form->control('exp_func', ['type' => 'date', 'class' => 'form-control', 'label' => false]) ?>
        </div>
    </div>

    <div class="mt-5">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
    </div>
    <?= $this->Form->end() ?>

