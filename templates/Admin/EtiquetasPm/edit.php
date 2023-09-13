<h3 class="text-center">EDITAR</h3>
<?= $this->Form->create($etiquetasPm, ['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
<div class="col-md-6">
    <label for="sistema">Serviço:</label>
    <div class="form-check form-check-inline">
        <label><b>ETIQUETAS PMMG</b></label>
    </div>
</div>
<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Concurso</label>
        <?php echo $this->Form->control('concurso', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Job', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Data</label>
        <?php echo $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Data', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Descrição</label>
        <?php echo $this->Form->control('descricao', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Descrição', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Etiquetas</label>
        <?php echo $this->Form->control('quantidade_etiquetas', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Data', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label"></label>
    </div>
    <div class="col-md-6" style="margin-top:15px;">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>