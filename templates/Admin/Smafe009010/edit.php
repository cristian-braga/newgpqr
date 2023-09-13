<?= $this->Form->create($smafe009010, ['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
<div class="row">
    <div class="col-md-6">
        <label class="form-label">Serviço:</label>
        <select class="form-select" name="servico" required>
            <option selected disabled>Selecione:</option>
            <option value="SMAFE009">SMAFE009</option>
            <option value="SMAFE010">SMAFE010</option>
        </select>
    </div>
    <div class="col-md-6">
        <label class="form-label">Referência</label>
        <?php echo $this->Form->control('referencia', ['type' => 'month', 'class' => 'form-control', 'autocomplete' => 'off', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Data</label>
        <?php echo $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'autocomplete' => 'off', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Concurso</label>
        <?php echo $this->Form->control('concurso', ['type' => 'number', 'class' => 'form-control', 'autocomplete' => 'off', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Quantidade de Etiquetas</label>
        <?php echo $this->Form->control('quantidade_etiquetas', ['type' => 'number', 'class' => 'form-control', 'autocomplete' => 'off', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Job</label>
        <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'autocomplete' => 'off', 'label' => false]); ?>
    </div>
</div>
<div class="col-12 mt-2">
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;', 'label' => false]) ?>
    <?= $this->Form->end() ?>
</div>