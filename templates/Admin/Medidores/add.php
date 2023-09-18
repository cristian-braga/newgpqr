<h3 class="text-center mt-2 mb-4">EDITAR ATIVIDADE</h3>
<?= $this->Form->create($medidores, ['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Emissão do Relatório</label>
            <?= $this->Form->control('data_cadastro', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Medidor 1</label>
            <?= $this->Form->control('nuv1-medidor1', ['class' => 'form-control', 'maxlenght' => 11, 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Medidor 2</label>
            <?= $this->Form->control('nuv1-medidor2', ['class' => 'form-control', 'maxlenght' => 10, 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Medidor 1</label>
            <?= $this->Form->control('nuv2-medidor1', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Medidor 2</label>
            <?= $this->Form->control('nuv2-medidor2', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>
