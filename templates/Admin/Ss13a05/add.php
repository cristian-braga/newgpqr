<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<hr>
<?= $this->Form->create($ss13a05) ?>
<div class="row">
    <div class="form-group col-md-12">
        <label class="form-label">Serviço:</label>
        <b>SS13A05</b>
    </div>
    <div>
        <?= $this->Form->create($ss13a05) ?>
        <div class="row">
            <div class="row">
                <div class="form-group col-md-3">
                    <label class="form-label">Referência</label>
                    <input class="form-control" type="month" name="referencia" id="referencia" required>
                </div>

                <div class="form-group col-md-2">
                    <label class="form-label">Data</label>
                    <?= $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'required', 'label' => false]) ?>
                </div>

                <div class="form-group col-md-2">
                    <label class="form-label">Cópias</label>
                    <input class="form-control" type="number" name="copias" id="copias"
                    placeholder="cópias" required>
                </div>

                <div class="form-group col-md-2">
                    <label class="form-label">Páginas</label>
                    <input class="form-control" type="number" name="paginas" id="paginas" placeholder="Páginas" required value="<?php echo $ss13a05['paginas'] ?>">
                </div>

                <div class="form-group col-md-2">
                    <label class="form-label">Job</label>
                    <input class="form-control" type="number" name="job" id="job" placeholder="Somente números" required maxlength="4" value="<?php echo$ss13a05['job'] ?>">
                </div>
            </div>
            <div class="col-12 mt-5">
                <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            </div>
        </div>
    </div>
</div>
