<h3 class="text-center mt-2 mb-4">CADASTRAR DIGITALIZACAO</h3>

<?= $this->Form->create($digitalizacao, ['id' => 'form', 'class' => 'mx-auto p-3 form ']) ?>

<div class="row">
    <div class="col-md-3">
        <label class="form-label">Serviço</label>
        <?= $this->Form->control('servico_id[]', ['options' => $servicos, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-3">
        <label class="form-label">Quantidade de Documentos</label>
        <?= $this->Form->control('quantidade_documentos[]', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 10, 'placeholder' => 'Quantidade', 'label' => false]) ?>
    </div>
    <div class="col-md-3">
        <label class="form-label">Período</label>
        <?= $this->Form->control('periodo[]', ['type' => 'date', 'class' => 'form-control', 'maxlenght' => 11, 'placeholder' => 'xx/xx/xxxx', 'label' => false]) ?>
    </div>
</div>
<div id="btn_add" class="col-md-12 mt-4">
    <button type="button" id="add_campo"><i class="fa fa-plus-circle fa-2x text-warning"></i></button>
</div>
<div class="mt-5">
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
</div>
<?= $this->Form->end() ?>


<script>
    const form = document.getElementById('form');
    const divBtnAdd = document.getElementById('btn_add');
    const btnAddCampo = document.getElementById('add_campo');
    const campoMax = 20;
    let x = 1;

    btnAddCampo.addEventListener('click', () => {

            if (x < campoMax) {
                const novoCampo = document.createElement('div');
                novoCampo.innerHTML = ` 
                    <div class="col-md-3">
                       <?= $this->Form->control('servico_id[]', ['options' => $servicos, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
                    </div>
                    <div class="col-md-3">
                       <?= $this->Form->control('quantidade_documentos[]', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 10, 'placeholder' => 'Quantidade', 'label' => false]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->control('periodo[]', ['type' => 'date', 'class' => 'form-control', 'maxlenght' => 11, 'placeholder' => 'xx/xx/xxxx', 'label' => false]) ?>
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn-remove mt-1" onclick="del_campo(this)"><i class="fa-regular fa-trash-can fa-lg text-danger"></i></button>
                    </div>
                 `;

                novoCampo.classList.add('row', 'mt-4');

                form.insertBefore(novoCampo, divBtnAdd);
                x++;
            }
        }

    )

    function del_campo(btnDel) {
        const div_col = btnDel.parentNode;
        form.removeChild(div_col.parentNode);
        x--;
    }

</script>
