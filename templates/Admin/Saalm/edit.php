<h3 class="text-center mt-2 mb-4">EDITAR</h3>
    <?= $this->Form->create($saalm) ?>
    <div class="row">
        <div class="form-group col-md-2">
            <label class="form-label">N° do JOB</label>
            <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Job', 'label' => false]); ?>
        </div>
        <div class="form-group col-md-2">
            <label class="form-label">Data</label>
            <?php echo $this->Form->control('dataAtual', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
        </div>
        <div class="form-group col-md-2">
            <label class="form-label">Relatório Contábil</label>
            <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]); ?>
            <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
        </div>
        <div class="form-group col-md-2">
            <label class="form-label">Estatística </label>
            <?php echo $this->Form->control('copias1', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]); ?>
            <?php echo $this->Form->control('paginas1', ['type' => 'number', 'class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
        </div>
        <div class="col-md-6" style="margin-top:15px;">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>