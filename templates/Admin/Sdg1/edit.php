<h3 class="text-center mt-2 mb-4">EDITAR</h3>
<?= $this->Form->create($sdg1, ['class' => 'mx-auto p-3 form', 'style' => 'width: 50%']) ?>
<div class="row g-3">
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">JOB</label>
            <input class="form-control" type="number" name="job" id="job" placeholder="Somente números" required maxlength="5" value="<?php echo $sdg1['job'] ?>">
        </div>
        <div class="col-md-6">
            <?php echo $this->Form->control('dataAtual', ['type' => 'date', 'label' => 'Data', 'id' => 'calendario', 'class' => 'form-control', 'autocomplete' => 'off']); ?>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Cópias</label>
            <input class="form-control" type="number" name="copias" id="copias" placeholder="Número de cópias" required maxlength="5" value="<?php echo $sdg1['copias'] ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Páginas</label>
            <input class="form-control" type="number" name="paginas" id="paginas" placeholder="Número de páginas" required value="<?php echo $sdg1['paginas'] ?>">
        </div>
    </div>
    <div class="col-md-6" style="margin-top:15px;">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
<?= $this->Form->end() ?>