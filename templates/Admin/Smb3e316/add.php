<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<?= $this->Form->create(null, ['id' => 'form', 'class' => 'mx-auto p-3 form']) ?>
<div class="row">
    <div class="col-md-2">
        <label class="form-label">Código da Cidade</label>
        <select name="unidade" class="form-control">
            <option value="" hidden selected disabled>Selecione...</option>
            <?php foreach ($cidades as $cidade) : ?>
            <option value="<?= $cidade['nome_cidade'] ?>"><?= $cidade['codig_cidade'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-2">
        <label class="form-label">Job</label>
        <?= $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Job', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Cópias</label>
        <?= $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Páginas</label>
        <?= $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Data</label>
        <?= $this->Form->control('dataAtual', ['type' => 'date', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Data', 'label' => false]) ?>
    </div>
</div>
<div id="btn_add" class="col-md-12 mt-3">
    <button type="button" id="add_campo"><i class="fa fa-plus-circle fa-2x text-warning"></i></button>
</div>
<div class="mt-3">
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
</div>
<?= $this->Form->end() ?>

<script>
const form = document.getElementById('form');
const div_btn = document.getElementById('btn_add');
const btn_add = document.getElementById('add_campo');
const campos_max = 20;
let x = 1;

btn_add.addEventListener('click', function() {
    if (x < campos_max) {
        const novo_campo = document.createElement('div');
        novo_campo.innerHTML = `
        <div class="col-md-2">
        <label class="form-label">Código da Cidade</label>
        <select name="unidade" class="form-control">
            <option value="" hidden selected disabled>Selecione...</option>
            <?php foreach ($cidades as $cidade) : ?>
            <option value="<?= $cidade['nome_cidade'] ?>"><?= $cidade['codig_cidade'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-2">
        <label class="form-label">Job</label>
        <?= $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Job', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Cópias</label>
        <?= $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Páginas</label>
        <?= $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]) ?>
    </div>
    <div class="col-md-2">
        <label class="form-label">Data</label>
        <?= $this->Form->control('dataAtual', ['type' => 'date', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Data', 'label' => false]) ?>
    </div>
    <div class="col-md-1 mt-4">
        <button type="button" class="btn-remove mt-3" onclick="del_campo(this)"><i class="fa-regular fa-trash-can fa-lg text-danger"></i></button>
    </div> `;

        novo_campo.classList.add('row', 'mt-4');

        form.insertBefore(novo_campo, div_btn);
        x++;
    }
});

function del_campo(btnDel) {
    const div_col = btnDel.parentNode;
    form.removeChild(div_col.parentNode);
    x--;
}
</script>