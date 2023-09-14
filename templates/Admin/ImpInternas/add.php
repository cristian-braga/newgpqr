<h3 class="text-center mt-2 mb-4">Cadastrar</h3>
<?= $this->Form->create($impInternas, ['id' => 'form', 'class' => 'mx-auto p-3 form']) ?>
<div class="row">
    <div class="col-md-12">
        <label class="form-label">Serviço:</label>
        <p><b>IMPRESSÕES INTERNAS</b></p>
    </div>
    <div class="col-md-2">
        <label class="form-label">Data</label>
        <?php echo $this->Form->control('data_cadastro', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
    </div>
    <div class="col-md-10"></div>
    <div class="col-md-2">
        <label class="form-label">Ocorrência</label>
        <?php echo $this->Form->control('ocorrencia', ['type' => 'number', 'class' => 'form-control form-control1', 'placeholder' => 'Ocorrência', 'label' => false]); ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Solicitante</label>
        <?php echo $this->Form->control('solicitante', ['type' => 'text', 'class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'Solicitante', 'label' => false]); ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Descrição</label>
        <?php echo $this->Form->control('descricao', ['type' => 'text', 'class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'Descrição', 'label' => false]); ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Tipo de Impressão</label>
        <select class="form-select" name ="tipo" aria-label="Default select example">
            <option selected>Selecione:</option>
            <option value="Somente Frente">Somente Frente</option>
            <option value="Frente e Verso">Frente e Verso</option>
        </select>
    </div>
    <div class="col-md-2">
        <label class="form-label">Páginas</label>
        <?php echo $this->Form->control('documentos', ['type' => 'number', 'class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'Quant. de páginas', 'label' => false]); ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]); ?>
    </div>
</div>
<div class="col-md-6" style="margin-top:15px;">
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
    <?= $this->Form->end() ?>
</div>