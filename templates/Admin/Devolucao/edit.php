<h3 class="text-center mt-2 mb-4">EDITAR ATIVIDADE</h3>
<?= $this->Form->create($devolucao, ['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Serviço</label>
            <?= $this->Form->control('servico_id', ['options' => $servicos, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Cadastro</label>
            <?= $this->Form->control('data_cadastro', ['type' => 'date', 'class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Remessa/OCR</label>
            <?= $this->Form->control('remessa_atividade', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 11, 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Job</label>
            <?= $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 10, 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Documentos</label>
            <?= $this->Form->control('quantidade_documentos', ['type' => 'number', 'class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Postagem</label>
            <?= $this->Form->control('data_postagem', ['type' => 'date', 'class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Recibo(s) Postagem</label>
            <?= $this->Form->select('recibo_postagem', [0, 1, 2, 3], ['class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>