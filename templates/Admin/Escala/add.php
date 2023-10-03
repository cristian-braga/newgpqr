<h3 class="text-center mt-2 mb-4">CADASTRAR ESCALA</h3>
<?= $this->Form->create($escala, ['class' => 'mx-auto p-3 form', 'style' => 'width: 45%']) ?>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Turno</label>
        </div>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="turno" id="manha" value="Manhã" required>
        <label class="form-check-label" for="manha">Manhã</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="turno" id="tarde" value="Tarde">
        <label class="form-check-label" for="tarde">Tarde</label>
    </div>
    <div class="row g-3 mt-1">
        <div class="col-md-6">
            <label class="form-label">Data inicial</label>
            <?= $this->Form->control('data_inicial', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Data final</label>
            <?= $this->Form->control('data_final', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <label class="form-label">Impressão</label>
            <?= $this->Form->control('impressao', ['class' => 'form-control', 'placeholder' => 'Ex: Nome 1 / Nome 2 / Nome 3', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <label class="form-label">Conferência</label>
            <?= $this->Form->control('conferencia', ['class' => 'form-control', 'placeholder' => 'Ex: Nome 1 / Nome 2 / Nome 3', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <label class="form-label">Envelopamento</label>
            <?= $this->Form->control('envelopamento', ['class' => 'form-control', 'placeholder' => 'Ex: Nome 1 / Nome 2 / Nome 3', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <label class="form-label">Triagem</label>
            <?= $this->Form->control('triagem', ['class' => 'form-control', 'placeholder' => 'Ex: Nome 1 / Nome 2 / Nome 3', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <label class="form-label">Expedição</label>
            <?= $this->Form->control('expedicao', ['class' => 'form-control', 'placeholder' => 'Ex: Nome 1 / Nome 2 / Nome 3', 'label' => false]) ?>
        </div>
        <input type="hidden" id="turno_escala" name="turno_escala">
        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>

<script>
    const radios = document.querySelectorAll('input[type="radio"]');
    const hidden = document.getElementById('turno_escala');

    radios.forEach(radio => {
        radio.addEventListener('click', () => {
            hidden.value = radio.getAttribute('value');
        });
    });
</script>