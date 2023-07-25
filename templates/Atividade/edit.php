<h3 class="text-center mt-2 mb-4">EDITAR ATIVIDADE</h3>
<?= $this->Form->create($atividade, ['class' => 'mx-auto p-3 form']) ?>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Serviço</label>
            <?= $this->Form->control('servico', ['options' => $servico, 'name' => 'servico_id', 'class' => 'form-select', 'default' => $atividade->servico_id, 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Remessa/OCR</label>
            <?= $this->Form->control('remessa_atividade', ['type' => 'number', 'name' => 'remessa_atividade', 'class' => 'form-control', 'maxlenght' => 11, 'placeholder' => 'N° da Remessa/OCR', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Documentos</label>
            <?= $this->Form->control('quantidade_documentos', ['type' => 'number', 'name' => 'quantidade_documentos', 'class' => 'form-control', 'placeholder' => 'Quantidade de documentos', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Job</label>
            <?= $this->Form->control('job', ['type' => 'number', 'name' => 'job', 'class' => 'form-control', 'maxlenght' => 10, 'placeholder' => 'Job', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Recibo Postagem</label>
            <?= $this->Form->select('recibo_postagem', [0, 1, 2, 3], ['name' => 'recibo_postagem', 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Postagem</label>
            <?= $this->Form->control('data_postagem', ['type' => 'date', 'name' => 'data_postagem', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]) ?>
        </div>
        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>