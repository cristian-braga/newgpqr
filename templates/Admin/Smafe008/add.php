<h3 class="text-center mt-2 mb-4">CADASTRAR</h3><hr>
<?= $this->Form->create($smafe008, ['id' => 'form', 'class' => 'mx-auto p-3 form']) ?>
<div class="row">
    <div class="form-group col-md-12">
        <label class="form-label">Sistema:</label>
        <p><b>Smafe008</b></p>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">N° do Job</label>
        <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Job', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Data</label>
        <?php echo $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Referência</label>
        <?php echo $this->Form->control('referencia', ['type' => 'month', 'class' => 'form-control','required', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Concurso</label>
        <?php echo $this->Form->control('concurso', ['type' => 'number', 'class' => 'form-control', 'label' => false]); ?>
    </div>
    <div class="col-md-6" style="margin-top:1%;"><label class="form-label"><b>Relatório:</b></label></div>
    <div class="col-md-6" style="margin-top:1%;"><label class="form-label"><b>Ata de Abertura e Fechamento:</b></label>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Páginas</label>
        <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-2">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias1', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Páginas</label>
        <?php echo $this->Form->control('paginas1', ['type' => 'number', 'class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
    </div>
    <div class="col-md-4" style="margin-top: 1%;">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>