<h3 class="text-center mt-4 mb-4">EDITAR</h3>
<hr>
<?= $this->Form->create($sdake75,['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
    <div class="row g-3">
        <div class="col-md-6">
            <label for="sistema">Serviço:</label>
            <div class="form-check form-check-inline">
                <label><b>SDAKE75</b></label>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
            <label class="form-label">JOB</label>
                <input class="form-control" type="number" name="job" id="job" placeholder="Somente números" required maxlength="5" value="<?php echo $sdake75['job'] ?>">
            </div>

            <div class="col-md-6">
                <label class="form-label">Data</label>
                <?= $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'required', 'label' => false]) ?>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Cópias</label>
                <input class="form-control" type="number" name="copias" id="copias" placeholder="Cópias" required maxlength="5" value="<?php echo $sdake75['copias'] ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Páginas</label>
                <input class="form-control" type="number" name="paginas" id="paginas" placeholder="Páginas" required value="<?php echo $sdake75['paginas'] ?>">
            </div>
        </div>
        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
<?= $this->Form->end() ?>

