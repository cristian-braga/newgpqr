<div class="atividade form content">
    <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cadastrar') ?></h3>
    <?= $this->Form->create($atividade, ['id' => 'form']) ?>
    <fieldset>
        <?php
            echo $this->Form->control('servico', ['options' => $servico, 'empty' => '-- Selecione --', 'name' => 'servico_id[]']);
            echo $this->Form->control('job', ['name' => 'job[]']);
            echo $this->Form->control('remessa_atividade', ['name' => 'remessa_atividade[]', 'label' => 'Remessa/OCR']);
            echo $this->Form->control('quantidade_documentos', ['name' => 'quantidade_documentos[]']);
            echo $this->Form->label('recibo_postagem');
            echo $this->Form->select('recibo_postagem', [0, 1, 2, 3], ['empty' => '-- Selecione --', 'name' => 'recibo_postagem[]']);
            echo $this->Form->control('data_postagem', ['name' => 'data_postagem[]', 'value' => date('Y-m-d')]);
        ?>
    </fieldset>
    <div id="btn_add">
        <?= $this->Form->button('+', ['type' => 'button', 'id' => 'add_campo']) ?>
    </div>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<script>
    const form = document.getElementById('form');
    const div_btn = document.getElementById('btn_add');
    const btn_add = document.getElementById('add_campo');
    const campos_max = 20;
    let x = 0;

    btn_add.addEventListener('click', function() {
        if (x < campos_max) {
            const novo_campo = document.createElement('fieldset');
            novo_campo.innerHTML = '\
                <?= $this->Form->control('servico', ['options' => $servico, 'empty' => '-- Selecione --', 'name' => 'servico_id[]']) ?>\
                <?= $this->Form->control('job', ['name' => 'job[]', 'maxlenght' => 10]) ?>\
                <?= $this->Form->control('remessa_atividade', ['name' => 'remessa_atividade[]', 'maxlenght' => 11]) ?>\
                <?= $this->Form->control('quantidade_documentos', ['name' => 'quantidade_documentos[]', 'type' => 'number']) ?>\
                <?= $this->Form->label('recibo_postagem') ?>\
                <?= $this->Form->select('recibo_postagem', [0, 1, 2, 3], ['empty' => '-- Selecione --', 'name' => 'recibo_postagem[]']) ?>\
                <?= $this->Form->control('data_postagem', ['name' => 'data_postagem[]', 'type' => 'date', 'value' => date('Y-m-d')]) ?>\
                <?= $this->Form->button('-', ['type' => 'button', 'onclick' => 'del_campo(this)']) ?>\
            ';

        form.insertBefore(novo_campo, div_btn);
        btn_add.blur();
        x++;
        }
    });

    function del_campo(btn_del) {
        btn_del.parentNode.remove();
        x--;
    }
</script>