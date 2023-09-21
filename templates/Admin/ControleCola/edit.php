<h3 class="text-center mt-2 mb-4">EDITAR COLA</h3>
<?= $this->Form->create($controle_cola, ['class' => 'mx-auto p-3 form', 'style' => 'width: 30%']) ?>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Tipo de operação</label>
        </div>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="operacao" id="entrada" value="Entrada" required>
        <label class="form-check-label" for="entrada">Entrada</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="operacao" id="saida" value="Saída">
        <label class="form-check-label" for="saida">Saída</label>
    </div>
    <div class="row g-3 mt-1">
        <div class="col-md-12">
            <label class="form-label">Data</label>
            <?= $this->Form->control('data_operacao', ['class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <label class="form-label">Quantidade</label>
            <?= $this->Form->control('quantidade', ['class' => 'form-control', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <label class="form-label">Nota</label>
            <?= $this->Form->control('nota', ['class' => 'form-control', 'id' => 'nota', 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>

<script>
    const entrada = document.getElementById("entrada");
    const saida = document.getElementById("saida");
    const nota = document.getElementById("nota");

    entrada.addEventListener('change', () => {
        nota.toggleAttribute('disabled');
    });

    saida.addEventListener('change', () => {
        nota.toggleAttribute('disabled');
    });
</script>