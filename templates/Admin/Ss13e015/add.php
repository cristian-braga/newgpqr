<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<hr>
<?= $this->Form->create($ss13e015, ['id' => 'form', 'class' => 'mx-auto p-3 form']) ?>
<div class="row">
    <div class="form-group col-md-12">
        <label class="form-label">Serviço:</label>
        <p><b>SS13E015</b></p>
    </div>
    <div class="col-md-2">
        <label class="form-label">Referência</label>
        <?php echo $this->Form->control('referencia', ['type' => 'month', 'class' => 'form-control', 'placeholder' => 'Referência', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Data Atual</label>
        <?php echo $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
    </div>
    <div class="col-md-8"></div>
    <div class="col-md-2 mt-2">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]); ?>
    </div>
    <div class="col-md-2 mt-2">
        <label class="form-label">Páginas</label>
        <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
    </div>
    <div class="col-md-2 mt-2">
        <label class="form-label">N° do JOB</label>
        <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Job', 'label' => false]); ?>
    </div>
</div>
<div class="col-12 mt-3">
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
</div>