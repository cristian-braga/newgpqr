<h3 class="text-center mt-2 mb-4">CADASTRAR FUNCIONÁRIO</h3>


<div class="row">
            <?= $this->Form->create($funcionariosGim, ['id' => 'form','class' => 'mx-auto p-3 form ']) ?>

            <div class="row">
    <div class="col-md-3">
        <label class="form-label">Nome</label>
        <?= $this->Form->control('nome', ['class' => 'form-control', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-3">
        <label class="form-label">Matrícula</label>
        <?= $this->Form->control('matricula', ['type' => 'text', 'class' => 'form-control', 'maxlenght' => 11, 'label' => false]) ?>
    </div>
    <div class="col-md-3">
        <label class="form-label">Email</label>
        <?= $this->Form->control('email', ['type' => 'email', 'class' => 'form-control', 'label' => false]) ?>
    </div>
    <div class="col-md-3">
        <label class="form-label">Telefone</label>
        <?= $this->Form->control('tel', ['type' => 'tel', 'class' => 'form-control', 'placeholder' => '(00) 00000-0000', 'pattern' => '\([0-9]{2}\)\s[0-9]{5}-[0-9]{4}', 'required',  'label' => false]) ?>
    </div>
    <div class="col-md-3">
        <label class="form-label">Contato alternativo</label>
        <?= $this->Form->control('contatoAlt', ['type' => 'text', 'class' => 'form-control', 'label' => false]) ?>
    </div>
    <div class="col-md-3">
        <label class="form-label">Telefone do Contato alternativo</label>
        <?= $this->Form->control('telAlt', ['type' => 'tel', 'class' => 'form-control', 'placeholder' => '(00) 00000-0000', 'onkeyup' => 'handlePhone(event)', 'required',  'label' => false]) ?>
    </div>
    <div class="col-md-3">
        <label class="form-label">Endereço</label>
        <?= $this->Form->control('endereco', ['type' => 'tel', 'class' => 'form-control', 'label' => false]) ?>
    </div>
    <div class="col-md-3">
        <label class="form-label">Turno</label>
        <?= $this->Form->control('turno', ['class' => 'form-select', 'label' => false]) ?>
    </div>
</div>

            
<div class="mt-5">
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
</div>
            <?= $this->Form->end() ?>
</div>

<script>
    const handlePhone = (event) => {
    let input = event.target;
    input.value = phoneMask(input.value);
    }

    const phoneMask = (value) => {
    if (!value) return "";
    value = value.replace(/\D/g,'');  // Remove tudo o que não é dígito
    value = value.replace(/(\d{2})(\d)/,"($1)$2");  // Coloca parênteses em volta dos dois primeiros dígitos
    value = value.replace(/(\d)(\d{4})$/,"$1-$2");  // Coloca hífen entre o quarto e o quinto dígitos
    return value;
    }
</script>

