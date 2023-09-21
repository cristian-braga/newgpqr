<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<?= $this->Form->create($sdake05, ['id' => 'form', 'class' => 'mx-auto p-3 form', 'style' => 'width: 50%']) ?>
<div class="row g-3 mt-3">
    <div class="form-group col-md-6">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'N° de Cópias', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-6">
        <label class="form-label">Páginas</label>
        <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'N° de Páginas', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-6">
        <label class="form-label">JOB</label>
        <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'N° do JOB', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-6">
    <label class="form-label">Data</label>
        <?php echo $this->Form->control('data_cadastro', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
    </div>
    <div class="col-md-6" style="margin-top:15px;">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:1%;']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>