<h3 class="text-center mt-2 mb-4">EDITAR INFORMAÇÕES</h3>
<?= $this->Form->create($passagemTurno, ['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
    <div class="row g-3">
        <div class="col-md-4">
            <label class="form-label">Data</label>
            <?= $this->Form->control('data_cadastro', ['class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-4">
            <label class="form-label">Turno</label>
            <?= $this->Form->control('turno', ['options' => $turnos, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-4">
            <label class="form-label">Etapa</label>
            <?= $this->Form->control('etapa', ['options' => $etapas, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <label class="form-label">Assunto</label>
            <?= $this->Form->control('assunto', ['class' => 'form-control', 'placeholder' => 'Digite o assunto', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <label class="form-label">Descrição</label>
            <?= $this->Form->control('descricao', ['type' => 'textarea', 'class' => 'form-control', 'placeholder' => 'Digite as informações que deseja salvar...', 'required', 'label' => false]) ?>
        </div>
        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>