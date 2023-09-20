<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<?= $this->Form->create($etiquetasPm, ['id' => 'form', 'class' => 'mx-auto p-3 form', 'style' => 'width: 50%']) ?>
<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label class="form-label">Data</label>
        <?= $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Concurso</label>
        <?= $this->Form->control('concurso', ['type' => 'number', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Descrição</label>
        <?= $this->Form->control('descricao', ['type' => 'text', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Cópias</label>
        <?= $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Etiquetas</label>
        <?= $this->Form->control('quantidade_etiquetas', ['type' => 'number', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-12" style="margin-top:15px;">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
    </div>
</div>