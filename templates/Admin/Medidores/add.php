<h3 class="text-center mt-2 mb-4">CADASTRAR MEDIDORES</h3>
<?= $this->Form->create($medidores, ['class' => 'mx-auto p-3 form', 'style' => 'width: 40%']) ?>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Emissão do Relatório</label>
            <?= $this->Form->control('data_cadastro', ['class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]) ?>
        </div>
    </div>
    <div class="row g-3 mt-3">
        <h5 class="text-center"><b>Nuvera-1</b></h5>
        <div class="col-md-6">
            <label class="form-label">Medidor 1</label>
            <?= $this->Form->control('nuv1_medidor1', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Medidor 2</label>
            <?= $this->Form->control('nuv1_medidor2', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <h5 class="text-center mt-5"><b>Nuvera-2</b></h5>
        <div class="col-md-6">
            <label class="form-label">Medidor 1</label>
            <?= $this->Form->control('nuv2_medidor1', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Medidor 2</label>
            <?= $this->Form->control('nuv2_medidor2', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>