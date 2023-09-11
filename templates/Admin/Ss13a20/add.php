<h3 class="text-center">CADASTRAR</h3>
<?= $this->Form->create($ss13a20, ['id' => 'form', 'class' => 'mx-auto p-3 form']) ?>
<div class="row">
    <div class="col-md-12">
        <label class="form-label">Sistema: <b>SS13A20</b></label>
    </div>
    <div class="col-md-2">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]); ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Páginas</label>
        <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
    </div>
    <!-- <div class="col-md-2">
        <label class="form-label">Capas</label>
        <?php echo $this->Form->control('capas', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Capas', 'label' => false]); ?>
    </div> -->
    <div class="col-md-2">
        <label class="form-label">Job</label>
        <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Job', 'label' => false]); ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Referência</label>
        <?php echo $this->Form->control('referencia', ['type' => 'month', 'class' => 'form-control', 'required', 'label' => false]); ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Data</label>
        <?php echo $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
    </div>
    <div class="col-12 mt-3">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
</div>