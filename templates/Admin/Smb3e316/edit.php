<h3 class="text-center mt-4 mb-4">EDITAR</h3>
<?= $this->Form->create($smb3e316,['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Código da Cidade</label>
        <select name="unidade" class="form-control">
            <option value="" hidden selected disabled>Selecione...</option>
            <?php foreach ($cidades as $cidade) : ?>
            <option value="<?= $cidade['nome_cidade'] ?>"><?= $cidade['codig_cidade'] ?></option>
            <?php endforeach; ?>
        </select>
        <!-- <?= $this->Form->control('cod_cidade', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Código da Cidade', 'label' => false]) ?> -->
    </div>
    <div class="col-md-6">
        <label class="form-label">Job</label>
        <?= $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Job', 'label' => false]) ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Cópias</label>
        <?= $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]) ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Páginas</label>
        <?= $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]) ?>
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">Data</label>
        <?= $this->Form->control('dataAtual', ['type' => 'date', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Data', 'label' => false]) ?>
    </div>

    <div class="mt-3">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
    </div>

</div>