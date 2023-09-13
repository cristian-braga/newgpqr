<h3 class="text-center">Encadernação</h3>
<?= $this->Form->create($encadernacao, ['id' => 'form', 'class' => 'mx-auto p-3 form']) ?>
<div class="row">
    <div class="col-md-12 mt-2">
        <label class="form-label">Serviço:<p><b>Encadernação</b></p></label>
    </div>
    <div class="col-md-3 mt-2">
        <label class="form-label">Ocorrência</label>
        <?php echo $this->Form->control('ocorrencia', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Ocorrência', 'label' => false]); ?>
    </div>
    <div class="col-md-3 mt-2">
        <label class="form-label">Descrição</label>
        <?php echo $this->Form->control('descricao', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Descrição', 'label' => false]); ?>
    </div>
    <div class="col-md-3 mt-2">
        <label class="form-label">Solicitante</label>
        <?php echo $this->Form->control('solicitante', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Solicitante', 'label' => false]); ?>
    </div>
    <div class="col-md-2 mt-2">
        <label class="form-label">Tipo de Capa</label>
        <select class="form-select" name ="tipo_capa" aria-label="Default select example">
            <option selected>Selecione:</option>
            <option value="Somente Frente">Capa - Plástica</option>
            <option value="Frente e Verso">Capa - Prodemge</option>
        </select>
    </div>
    <div class="col-md-2 mt-2">
        <label class="form-label">Documentos</label>
        <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Documentos', 'label' => false]); ?>
    </div>
    <div class="col-md-2 mt-2">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Cópias', 'label' => false]); ?>
    </div>
    <div class="col-md-2 mt-2">
        <label class="form-label">Data</label>
        <?php echo $this->Form->control('data_cadastro', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
    </div>
</div>
<div class="col-md-6" style="margin-top:15px;">
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
    <?= $this->Form->end() ?>
</div>