<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<?= $this->Form->create($saalm,['class' => 'mx-auto p-3 form', 'style' => 'width: 50%']) ?>
<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label class="form-label">JOB</label>
        <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'N° do Job', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Data</label>
        <?php echo $this->Form->control('dataAtual', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
    </div>
    <h5 class="text-center mt-3"><b>Relatório Contábil:</b></h5>
    <div class="col-md-6">
        <label class="form-label">Cópias</label>
        <input class="form-control" type="number" name="copias" id="copias" value="<?php echo $saalm['copias'] ?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Páginas</label>
        <input class="form-control" type="number" name="paginas" id="paginas"
        value="<?php echo $saalm['paginas'] ?>">
    </div>
    <h5 class="text-center mt-3"><b>Estatística:</b></h5>
    <div class="col-md-6">
        <label class="form-label">Cópias</label>
        <input class="form-control" type="number" name="copias1" id="copias1"
        value="<?php echo $saalm['copias1'] ?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Páginas</label>
        <input class="form-control" type="number" name="paginas1" id="paginas1"
        value="<?php echo $saalm['paginas1'] ?>">
    </div>
    <div class="col-md-6" style="margin-top:15px;">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>