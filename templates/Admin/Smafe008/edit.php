<h3 class="text-center">Editar</h3>
<?= $this->Form->create($smafe008, ['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
<div class="row">
    <div class="col-md-6">
        <label class="form-label">Referência</label>
        <?php echo $this->Form->control('referencia', ['type' => 'month', 'class' => 'form-control', 'placeholder' => 'Referência', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Data</label>
        <?php echo $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'placeholder' => 'Referência', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Concurso</label>
        <?php echo $this->Form->control('concurso', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Concurso', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Job</label>
        <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Job', 'label' => false]); ?>
    </div>
    <div class="col-md-12 mt-2">
        <label class="form-label"><b>Relatório:</b></label>
    </div>
    <div class="col-md-6">
        <label for="" class="form-label"></label>
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Páginas</label>
        <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
    </div>
    <div class="col-md-12 mt-2">
        <label class="form-label"><b>Ata de Abertura e Fechamento:</b></label>
    </div>
    <div class="col-md-6">
        <label for="" class="form-label"></label>
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias1', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Páginas</label>
        <?php echo $this->Form->control('paginas1', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
    </div>
    <div class="col-md-6 mt-3">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>