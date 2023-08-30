<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<hr>
        <?= $this->Form->create($smafe08b) ?>
        <div class="row">
        <div class="form-group col-md-12">
            <label class="form-label">Sistema:</label>
            <p><b>SMAFE08b</b></b>
        </div>
        <div class="form-group col-md-2">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]); ?>
        </div>
        <div class="form-group col-md-2">
        <label class="form-label">Páginas</label>
        <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
        </div>
        <div class="form-group col-md-2">
            <label class="form-label">N° do Job</label>
            <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Job', 'label' => false]); ?>
        </div>
        <div class="form-group col-md-2">
            <label class="form-label">Concurso</label>
            <?php echo $this->Form->control('concurso', ['type' => 'number', 'class' => 'form-control form-control1', 'placeholder' => 'Concurso', 'label' => false]); ?>
        </div>
        <div class="form-group col-md-2"><label class="form-label">N° do Job</label><?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Job', 'label' => false]); ?>
        </div>
        <div class="form-group col-md-2"><label class="form-label">Referência</label>
        <?php echo $this->Form->control('referencia', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Referência', 'label' => false]); ?>
        </div>
        <div class="form-group col-md-2"><label class="form-label">Data</label><?php echo $this->Form->control('dataAtual', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?></div>
            <?php
            echo $this->Form->control('copias');
            echo $this->Form->control('paginas');
            echo $this->Form->control('total');
            echo $this->Form->control('concurso');
            echo $this->Form->control('job');
            echo $this->Form->control('referencia');
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('funcionario');
            ?>
            <?= $this->Form->button(__('Submit'), ['class= btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-sucess']) ?>

            <?= $this->Form->end() ?>
</div>