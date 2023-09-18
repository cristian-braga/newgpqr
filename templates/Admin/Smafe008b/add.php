<h3 class="text-center">Cadastrar</h3><hr>
<?= $this->Form->create($smafe008b, ['id' => 'form', 'class' => 'mx-auto p-3 form']) ?>
<div class="row">
    <div class="col-md-2">
        <label class="form-label">Cópias</label>
        <?= $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 10, 'placeholder' => 'Cópias', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Páginas</label>
        <?= $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 10, 'placeholder' => 'Páginas', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Concurso</label>
        <?= $this->Form->control('concurso', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Concurso', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Job</label>
        <?= $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Job', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Referência</label>
        <?= $this->Form->control('referencia', ['type' => 'month', 'class' => 'form-control', 'placeholder' => 'Referência', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Data</label>
        <?= $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]) ?>
    </div>
    <div class="mt-3">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>