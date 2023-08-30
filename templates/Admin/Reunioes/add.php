<h3 class="text-center mt-2 mb-4">Cadastrar Reunião</h3>

<?= $this->Form->create($reunioes, ['class' => 'mx-auto p-3 form', 'style' => 'width: 80%']) ?>
<div class="row text-center mb-4">
    <div class="form-group col-md-4">
        <label class="form-label">Tema da reunião</label>
        <?= $this->Form->control('tema_abordado', ['class' => 'form-control', 'type' => 'text', 'required', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-4">
        <label class="form-label">Local da reunião</label>
        <?= $this->Form->control('local_reuniao', ['class' => 'form-control', 'type' => 'text', 'required', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Data</label>
        <?= $this->Form->control('data_reuniao', ['class' => 'form-control', 'type' => 'date', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Horário</label>
        <?= $this->Form->control('horario_reuniao', ['class' => 'form-control', 'type' => 'time', 'label' => false]) ?>
    </div>
</div>

<div class="row text-center mb-4">
    <div class="form-group col-md-4">
        <label class="form-label">Pauta</label>
        <?= $this->Form->control('pauta', ['class' => 'form-control', 'type' => 'text', 'required', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-4">
        <label class="form-label">Participantes</label>
        <?= $this->Form->control('participantes', ['class' => 'form-control', 'type' => 'text', 'required', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-4">
        <label class="form-label">Responsável</label>
        <?= $this->Form->control('responsavel', ['class' => 'form-control', 'type' => 'text', 'required', 'label' => false]) ?>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-12">
        <label class="form-label">Súmula:</label>
        <?= $this->Form->textarea('sumula', ['class' => 'form-control', 'rows' => '10', 'cols' => '30', 'required', 'label' => false]) ?>
    </div>
</div>

<div class="col-12 mt-5">
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
</div>

<?= $this->Form->end() ?>