<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<hr>
<?= $this->Form->create($ss13a15, ['id' => 'form', 'class' => 'mx-auto p-3 form']) ?>
<div class="row">
    <div class="col-md-12">
        <label class="form-label">Serviço: <b>SS13A15</b></label>
    </div>
    <div class="form-group col-md-2"><label class="form-label">Job</label>
        <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Somente números', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Data</label>
        <?= $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Referência</label>
        <?= $this->Form->control('referencia', ['type' => 'month', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-2"><label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Cópias', 'label' => false]);?>
    </div>
    <div class="form-group col-md-2"><label class="form-label">Páginas</label>
        <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Páginas', 'label' => false]); ?>
    </div>
</div>
<div class="col-12 mt-3">
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
</div>