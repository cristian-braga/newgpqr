<h3 class="text-center mt-2 mb-4">EDITAR</h3>
<?= $this->Form->create($digitalizacao, ['class' => 'mx-auto p-3 form', 'style' => 'width: 35%']) ?>
    <div class="row g-3">
        <div class="col-md-12">
            <label class="form-label">Serviço</label>
            <?= $this->Form->control('servico_id', ['options' => $servicos, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <label class="form-label">Documentos</label>
            <?= $this->Form->control('quantidade_documentos', ['type' => 'number', 'class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <label class="form-label">Período</label>
            <?= $this->Form->control('periodo', ['type' => 'month', 'class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>