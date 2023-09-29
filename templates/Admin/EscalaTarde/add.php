<h3 class="text-center mt-2 mb-4">CADASTRAR ESCALA</h3>
<?= $this->Form->create($escalaTarde, ['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
<div class="container align-items-center"> 
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Data Inicial</label>
            <?= $this->Form->control('data_inicial', ['class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Data Final</label>
            <?= $this->Form->control('data_final', ['class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]) ?>
        </div>
    </div>
    <div class="row g-3 mt-5">
        <h4 class="text-center"><b>Impressão</b></h4>
        <div class="col-md-6">
            <label class="form-label">Funcionário 1</label>
            <?= $this->Form->control('imp_func1', ['class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Funcionário 2</label>
            <?= $this->Form->control('imp_func2', ['class' => 'form-control', 'label' => false]) ?>
        </div>
        <h4 class="text-center mt-5"><b>Conferência</b></h4>
        <div class="col-md-6  offset-md-3">
            <label class="form-label">Funcionário</label>
            <?= $this->Form->control('conf_func', ['class' => 'form-control', 'label' => false]) ?>
        </div>
        <h4 class="text-center mt-5"><b>Envelopamento</b></h4>
        <div class="col-md-6  offset-md-3">
            <label class="form-label">Funcionário</label>
            <?= $this->Form->control('env_func', ['class' => 'form-control', 'label' => false]) ?>
        </div>
        <h4 class="text-center mt-5"><b>Triagem</b></h4>
        <div class="col-md-4">
            <label class="form-label">Funcionário 1</label>
            <?= $this->Form->control('tri_func1', ['class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-4">
            <label class="form-label">Funcionário 2</label>
            <?= $this->Form->control('tri_func2', ['class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-4">
            <label class="form-label">Funcionário 3</label>
            <?= $this->Form->control('tri_func3', ['class' => 'form-control', 'label' => false]) ?>
        </div>
        <h4 class="text-center mt-5"><b>Expedição</b></h4>
        <div class="col-md-6  offset-md-3">
            <label class="form-label">Funcionário </label>
            <?= $this->Form->control('exp_func', ['class' => 'form-control', 'label' => false]) ?>
        </div>


        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
    </div>
<?= $this->Form->end() ?>
