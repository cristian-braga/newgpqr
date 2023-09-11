<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<hr>
<?= $this->Form->create($smb3e316, ['id' => 'form', 'class' => 'mx-auto p-3 form']) ?>
<div class="row">
    <div class="form-group col-md-12">
        <label class="form-label">Sistema:</label>
        <p><b>SMB3E316</b></p>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control','placeholder' => 'Cópias', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Páginas</label>
        <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control','placeholder' => 'Páginas', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">N° do Job</label>
        <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Job', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Capa</label>
        <?php echo $this->Form->control('capa', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Capa','label' => false]); ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Código da cidade</label>
        <?php echo $this->Form->control('cod_cidade', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Código Cidade', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Data Atual</label>
        <?php echo $this->Form->control('dataAtual', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-4" style="margin-top:1%;">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:1%;']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>