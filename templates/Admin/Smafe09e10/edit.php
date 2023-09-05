<h3 class="text-center mt-4 mb-4">EDITAR</h3>
<?= $this->Form->create($smafe09e10,['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>

<div class="row g-3">
        <div class="col-md-6">
            <label for="sistema">Serviço:</label>
            <div class="form-check form-check-inline">
                <label><b>SMAFE009/10</b></label>
            </div>
        </div>
    
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Referência</label>
                <input class="form-control" type="month" name="referencia" id="referencia" value="<?php echo $smafe09e10['referencia'] ?>">
            </div>

            <div class="col-md-6">
                <label class="form-label">Concurso</label>
                <input class="form-control" type="number" name="concurso" id="concurso" placeholder="Digite o concurso" value="<?php echo $smafe09e10['concurso'] ?>">
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
            <label class="form-label">Job</label>
                <input class="form-control" type="number" name="job" id="job" placeholder="Somente números" required maxlength="5" value="<?php echo $smafe09e10['job'] ?>">
            </div>

            <div class="col-md-6">
                <label class="form-label">Data</label>
                <?= $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'required', 'label' => false]) ?>
            </div>
        </div>

        <div class="col-md-6">
                <label class="form-label">Quantidade</label>
                <input class="form-control" type="number" name="quantidade_etiquetas" id="quantidade_etiquetas" placeholder="quantidade_etiquetas" required value="<?php echo $smafe09e10['quantidade_etiquetas'] ?>">
        </div>

        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>
