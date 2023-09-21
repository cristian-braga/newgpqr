<h3 class="text-center mt-4 mb-4">EDITAR</h3>
<?= $this->Form->create($ss13a05,['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
    <div class="row g-3">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Referência</label>
                <input class="form-control" type="month" name="referencia" value="<?php echo $ss13a05['referencia'] ?>">
            </div>

            <div class="col-md-6">
                    <?php echo $this->Form->control('data', ['type' => 'date', 'label' => 'Data', 'id' => 'calendario', 'class' => 'form-control', 'autocomplete' => 'off']); ?>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="copias">Cópias</label>
                <input class="form-control" type="number" name="copias" id="copias" value="<?php echo $ss13a05['copias'] ?>">
            </div>

            <div class="col-md-6">
                <label for="paginas">Páginas</label>
                <input class="form-control" type="number" name="paginas" id="paginas" value="<?php echo $ss13a05['paginas'] ?>">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="job">JOB</label>
                <input class="form-control" type="number" name="job" id="job" value="<?php echo $ss13a05['job'] ?>">
            </div>
        </div><br>

        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
 <?= $this->Form->end() ?>
