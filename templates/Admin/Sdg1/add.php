<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<hr>
<?= $this->Form->create($sdg1) ?>
<div class="row">
        <div class="form-group col-md-12">
            <label class="form-label">Sistema:</label>
            <p><b>SDG1M001</b></p>
        </div>
    <div class="row g-3">
        <div class="form-group col-md-2"><label class="form-label">Job</label>
            <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Somente números', 'label' => false]); ?>
        </div>

        <div class="form-group col-md-2">
            <label class="form-label">Data</label>
            <?= $this->Form->control('dataAtual', ['type' => 'date', 'class' => 'form-control', 'required', 'label' => false]) ?>
        </div>

        <div class="form-group col-md-2"><label class="form-label">Cópias</label>
            <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Cópias', 'label' => false]);?>
        </div>

        <div class="form-group col-md-2"><label class="form-label">Páginas</label>
            <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Páginas', 'label' => false]); ?>
        </div>
            
        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
</div>
<?= $this->Form->end() ?>
            <?= $this->Form->create($sdg1) ?>
            <div class="row">
                <div class="form-group"><label class="form-label">Sistema:</label>
                    <p><b>SDG1</b></p>
                </div>
                <div class="form-group col-md-2"><label class="form-label">Job</label>
                    <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Job', 'label' => false]); ?>
                </div>
                <div class="form-group col-md-2"><label class="form-label">Cópias</label>
                    <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Cópias', 'label' => false]); ?>
                </div>
                <div class="form-group col-md-2">
                    <label class="form-label">Páginas</label>
                    <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Páginas', 'label' => false]); ?>
                </div>
                <div class="form-group col-md-2">
                    <label class="form-label">Data</label>
                    <?php echo $this->Form->control('dataAtual', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
                </div>
                <div class="form-group" style="margin-top: 1%;">
                    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
                    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:1%;']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
