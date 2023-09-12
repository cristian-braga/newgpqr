<h3 class="text-center mt-2 mb-4">EDITAR</h3>
<hr>
<?= $this->Form->create($smafe008b,['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Referência</label>
            <?php echo $this->Form->control('referencia', ['type' => 'month', 'class' => 'form-control', 'label' => false]); ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Data</label>
            <?php echo $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Concurso</label>
            <?php echo $this->Form->control('concurso', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Concurso', 'label' => false]); ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Job</label>
            <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Job', 'label' => false]); ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Cópias</label>
            <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]); ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Páginas</label>
            <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
        </div>

        <div class="col-md-6" style="margin-top:15px;">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
            <!-- <?= $this->Form->create($smafe008b) ?>
                <?php
                    echo $this->Form->control('copias');
                    echo $this->Form->control('paginas');
                    echo $this->Form->control('total');
                    echo $this->Form->control('concurso');
                    echo $this->Form->control('job');
                    echo $this->Form->control('referencia');
                    echo $this->Form->control('data', ['empty' => true]);
                    echo $this->Form->control('funcionario');
                ?> -->