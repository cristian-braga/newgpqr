<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<?= $this->Form->create($ss13a05,['class' => 'mx-auto p-3 form', 'style' => 'width: 50%']) ?>
<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label class="form-label">Referência</label>
        <input class="form-control" type="month" name="referencia" id="referencia" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">Data</label>
        <?= $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Cópias</label>
        <input class="form-control" type="number" name="copias" id="copias"
                    placeholder="cópias" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">Páginas</label>
        <input class="form-control" type="number" name="paginas" id="paginas" placeholder="Páginas" required value="<?php echo $ss13a05['paginas'] ?>">
    </div>
    <div class="col-md-6">
         <label class="form-label">Job</label>
        <input class="form-control" type="number" name="job" id="job" placeholder="Somente números" required maxlength="4" value="<?php echo$ss13a05['job'] ?>">
    </div>
    <div class="col-md-12" style="margin-top:15px;">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
