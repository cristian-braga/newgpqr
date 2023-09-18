<h3 class="text-center mt-2 mb-4">EDITAR CONTRATO</h3>


<div class="row">
    <?= $this->Form->create($contrato, ['id' => 'form','class' => 'mx-auto p-3 form ']) ?>

    <div class="row">
        <div class="col-md-3">
            <label class="form-label">Contrato</label>
            <?= $this->Form->control('contrato', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Empresa</label>
            <?= $this->Form->control('empresa', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Máquina</label>
            <?= $this->Form->control('maquina', ['class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Valor Mensal</label>
            <?= $this->Form->control('valo_mensal', ['type' => 'number', 'class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Parcelas</label>
            <?= $this->Form->control('parcelas', ['type' => 'number', 'class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Saldo Contratual</label>
            <?= $this->Form->control('saldo_contratual', ['type' => 'number', 'class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Vencimento</label>
            <?= $this->Form->control('vencimento', ['type' => 'date', 'class' => 'form-control', 'label' => false]) ?>
        </div>
    </div>

    <div class="mt-5">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
    </div>
    <?= $this->Form->end() ?>
