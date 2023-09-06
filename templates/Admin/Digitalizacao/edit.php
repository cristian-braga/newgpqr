<h3 class="text-center mt-2 mb-4">EDITAR DIGITALIZACAO</h3>

<?= $this->Form->create($digitalizacao, ['id' => 'form', 'class' => 'mx-auto p-3 form ']) ?>

<div class="row">
    <div class="col-md-3">
        <label class="form-label">Serviço</label>
        <?= $this->Form->control('servico_id[]', ['options' => $servico, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-3">
        <label class="form-label">Quantidade de Documentos</label>
        <?= $this->Form->control('quantidade_documentos[]', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 10, 'placeholder' => 'Quantidade', 'label' => false]) ?>
    </div>
    <div class="col-md-3">
        <label class="form-label">Período</label>
        <?= $this->Form->control('periodo[]', ['type' => 'month', 'class' => 'form-control', 'maxlenght' => 11, 'label' => false]) ?>
    </div>
</div>
<div class="mt-5">
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
</div>
<?= $this->Form->end() ?>
