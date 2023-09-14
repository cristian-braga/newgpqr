<h3 class="text-center mt-2 mb-4">Cadastrar</h3>
<?= $this->Form->create($smafe009010, ['id' => 'form', 'class' => 'mx-auto p-3 form']) ?>
<div class="row">
    <div class="col-md-2">
        <label class="form-label">Serviço:</label>
        <?= $this->Form->select('servico', ['SMAFE009' => 'SMAFE009', 'SMAFE010' => 'SMAFE010'], ['class' => 'form-select', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Referência</label>
        <?= $this->Form->control('referencia', ['type' => 'month', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Data Atual</label>
        <?= $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Concurso</label>
        <?= $this->Form->control('concurso', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Concurso', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Quantidade de Etiquetas</label>
        <?= $this->Form->control('quantidade_etiquetas', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Etiquetas', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Job</label>
        <?= $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'required', 'placeholder' => 'Concurso', 'label' => false]) ?>
    </div>
    <div class="col-12 mt-2">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
    </div>
</div>