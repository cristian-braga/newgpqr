<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<?= $this->Form->create($atividade, ['id' => 'form', 'class' => 'mx-auto p-3 form-ativ']) ?>
    <div class="row">
        <div class="col-md-2">
            <label class="form-label">Serviço</label>
            <?= $this->Form->control('servico', ['options' => $servico, 'name' => 'servico_id[]', 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-1">
            <label class="form-label">Job</label>
            <?= $this->Form->control('job', ['type' => 'number', 'name' => 'job[]', 'class' => 'form-control', 'maxlenght' => 10, 'placeholder' => 'Job', 'label' => false]) ?>
        </div>
        <div class="col-md-2">
            <label class="form-label">Remessa/OCR</label>
            <?= $this->Form->control('remessa_atividade', ['type' => 'number','name' => 'remessa_atividade[]', 'class' => 'form-control', 'maxlenght' => 11, 'placeholder' => 'N° da Remessa/OCR', 'label' => false]) ?>
        </div>
        <div class="col-md-2">
            <label class="form-label">Documentos</label>
            <?= $this->Form->control('quantidade_documentos', ['type' => 'number','name' => 'quantidade_documentos[]', 'class' => 'form-control', 'placeholder' => 'Quantidade de documentos', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-2">
            <label class="form-label">Recibo Postagem</label>
            <?= $this->Form->select('recibo_postagem', [0, 1, 2, 3], ['name' => 'recibo_postagem[]', 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-2">
            <label class="form-label">Postagem</label>
            <?= $this->Form->control('data_postagem', ['type' => 'date', 'name' => 'data_postagem[]', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]) ?>
        </div>
    </div>
    <div id="btn_add" class="col-md-12 mt-4">
        <button type="button" id="add_campo"><i class="fa fa-plus-circle fa-2x text-warning"></i></button>
    </div>
    <div class="pt-5">
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
            novo_campo.innerHTML = '\
                <div class="col-md-2">\
                    <?= $this->Form->control('servico', ['options' => $servico, 'name' => 'servico_id[]', 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>\
                </div>\
                <div class="col-md-1">\
                    <?= $this->Form->control('job', ['type' => 'number', 'name' => 'job[]', 'class' => 'form-control', 'maxlenght' => 10, 'placeholder' => 'Job', 'label' => false]) ?>\
                </div>\
                <div class="col-md-2">\
                    <?= $this->Form->control('remessa_atividade', ['type' => 'number','name' => 'remessa_atividade[]', 'class' => 'form-control', 'maxlenght' => 11, 'placeholder' => 'N° da Remessa/OCR', 'label' => false]) ?>\
                </div>\
                <div class="col-md-2">\
                    <?= $this->Form->control('quantidade_documentos', ['type' => 'number','name' => 'quantidade_documentos[]', 'class' => 'form-control', 'placeholder' => 'Quantidade de documentos', 'required', 'label' => false]) ?>\
                </div>\
                <div class="col-md-2">\
                    <?= $this->Form->select('recibo_postagem', [0, 1, 2, 3], ['name' => 'recibo_postagem[]', 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>\
                </div>\
                <div class="col-md-2">\
                    <?= $this->Form->control('data_postagem', ['type' => 'date', 'name' => 'data_postagem[]', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]) ?>\
                </div>\
                <div class="col-md-1">\
                    <button type="button" class="btn-remove mt-1" onclick="del_campo(this)"><i class="fa-regular fa-trash-can fa-lg text-danger"></i></button>\
                </div>\
            ';

            novo_campo.classList.add('row', 'mt-4');

            form.insertBefore(novo_campo, div_btn);
            x++;
        }
    });

    function del_campo(btn_del) {
        const div_col = btn_del.parentNode;
        form.removeChild(div_col.parentNode);
        x--;
    }
</script>