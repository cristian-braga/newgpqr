<h3 class="text-center">Cadastrar</h3>
<?= $this->Form->create($etiquetasPm, ['id' => 'form', 'class' => 'mx-auto p-3 form']) ?>
<div class="row">
    <div class="col-md-2">
        <label class="form-label">Data</label>
        <?= $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Concurso</label>
        <?= $this->Form->control('concurso', ['type' => 'number', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-4">
        <label class="form-label">Descrição</label>
        <?= $this->Form->control('descricao', ['type' => 'text', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Cópias</label>
        <?= $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Etiquetas</label>
        <?= $this->Form->control('quantidade_etiquetas', ['type' => 'number', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="col-12 mt-3">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
    </div>
</div>