<h3 class="text-center mt-2 mb-4">EDITAR</h3>
<?= $this->Form->create($sdake75,['class' => 'mx-auto p-3 form', 'style' => 'width: 50%']) ?>
<div class="row g-3 mt-3">

    <div class="col-md-6">
        <label class="form-label">Job</label>
        <input class="form-control" type="number" name="job" id="job" placeholder="Somente números" required maxlength="4" value="<?php echo $sdake75['job'] ?>">
    </div>

    <div class="col-md-6">
        <label class="form-label">Data</label>
        <?= $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>

    <div class="col-md-6">
        <label class="form-label">Cópias</label>
        <input class="form-control" type="number" name="copias" id="copias" placeholder="Cópias" required maxlength="5" value="<?php echo $sdake75['copias'] ?>">
    </div>

    <div class="col-md-6">
        <label class="form-label">Páginas</label>
        <input class="form-control" type="number" name="paginas" id="paginas" placeholder="Páginas" required value="<?php echo $sdake75['paginas'] ?>">
    </div>

    <div class="col-12 mt 5">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>

