<h3 class="text-center mt-2 mb-4">CADASTRAR ESCALA</h3>
<?= $this->Form->create($escala, ['class' => 'mx-auto p-3 form', 'style' => 'width: 45%']) ?>
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
    <div class="row g-3 mt-3">
        <h5 class="text-center"><b>Impressão</b></h5>
        <div class="col-md-6">
            <label class="form-label">Funcionário 1</label>
            <?= $this->Form->control('imp_func1', ['class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Funcionário 2</label>
            <?= $this->Form->control('imp_func2', ['type' => 'number', 'class' => 'form-control', 'label' => false]) ?>
        </div>
        <h5 class="text-center mt-5"><b>Conferência</b></h5>
        <div class="col-md-6">
            <label class="form-label">Funcionário</label>
            <?= $this->Form->control('conf_func', ['type' => 'number', 'class' => 'form-control', 'label' => false]) ?>
        </div>
        <h5 class="text-center mt-5"><b>Envelopamento</b></h5>
        <div class="col-md-6">
            <label class="form-label">Funcionário</label>
            <?= $this->Form->control('env_func', ['type' => 'number', 'class' => 'form-control', 'label' => false]) ?>
        </div>
        <h5 class="text-center mt-5"><b>Triagem</b></h5>
        <div class="col-md-6">
            <label class="form-label">Funcionário 1</label>
            <?= $this->Form->control('tri_func1', ['type' => 'date', 'class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Funcionário 2</label>
            <?= $this->Form->control('tru_func2', ['type' => 'date', 'class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Funcionário 3</label>
            <?= $this->Form->control('tri_func3', ['type' => 'date', 'class' => 'form-control', 'label' => false]) ?>
        </div>
        <h5 class="text-center mt-5"><b>Expedição</b></h5>
        <div class="col-md-6">
            <label class="form-label">Funcionário </label>
            <?= $this->Form->control('exp_func', ['type' => 'date', 'class' => 'form-control', 'label' => false]) ?>
        </div>


        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>
