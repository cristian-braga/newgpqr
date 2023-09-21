<h3 class="text-center mt-2 mb-4">EDITAR</h3>
<?= $this->Form->create($ss13a15, ['class' => 'mx-auto p-3 form', 'style' => 'width: 50%']) ?>
<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label class="form-label">JOB</label>
        <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Somente números', 'label' => false]); ?>
    </div>
   <div class="col-md-6">
        <label class="form-label">Data</label>
        <?= $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
   <div class="col-md-6">
        <label class="form-label">Referência</label>
        <?= $this->Form->control('referencia', ['type' => 'month', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
   <div class="col-md-6"><label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'N° de Cópias', 'label' => false]);?>
    </div>
   <div class="col-md-6"><label class="form-label">Páginas</label>
        <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'N° de Páginas', 'label' => false]); ?>
    </div>
    <div class="col-md-12" style="margin-top:15px;">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
