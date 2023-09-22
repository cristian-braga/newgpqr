<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<?= $this->Form->create($encadernacao, ['id' => 'form', 'class' => 'mx-auto p-3 form', 'style' => 'width: 50%']) ?>
<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label class="form-label">Ocorrência</label>
        <?php echo $this->Form->control('ocorrencia', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Ocorrência', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Descrição</label>
        <?php echo $this->Form->control('descricao', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Descrição', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Solicitante</label>
        <?php echo $this->Form->control('solicitante', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Solicitante', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Tipo de Capa</label>
        <select class="form-select" name ="tipo_capa">
            <option selected>Selecione:</option>
            <option value="Capa Plástica">Capa - Plástica</option>
            <option value="Capa PRODEMGE">Capa - Prodemge</option>
        </select>
    </div>
    <div class="col-md-6">
        <label class="form-label">Páginas</label>
        <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Quant. de Páginas', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Cópias', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Data</label>
        <?php echo $this->Form->control('data_cadastro', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
    </div>
    <div class="col-md-12" style="margin-top:15px;">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
