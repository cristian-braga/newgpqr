<h3 class="text-center mt-2 mb-4">EDITAR FUNCIONÁRIO</h3>

<?= $this->Form->create($funcionariosGim, ['id' => 'form', 'class' => 'mx-auto p-3 form ']) ?>

<div class="row">
    <div class="col-md-3">
        <label class="form-label">Nome</label>
        <?= $this->Form->control('nome', ['class' => 'form-control', 'required', 'placeholder' => 'digite o nome', 'label' => false]) ?>
    </div>
    <div class="col-md-3">
        <label class="form-label">Matrícula</label>
        <?= $this->Form->control('matricula', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 10, 'placeholder' => 'N° da matrícula', 'label' => false]) ?>
    </div>
    <div class="col-md-3">
        <label class="form-label">Email</label>
        <?= $this->Form->control('email', ['type' => 'email', 'class' => 'form-control', 'placeholder' => 'nome@email.com', 'label' => false]) ?>
    </div>
    <div class="col-md-3">
        <label class="form-label">Telefone</label>
        <?= $this->Form->control('tel', ['type' => 'tel', 'class' => 'form-control', 'onkeyup' => 'handlePhone(event)', 'placeholder' => '(00) 00000-0000', 'label' => false]) ?>
    </div>
    <div class="col-md-3 mt-3">
        <label class="form-label">Contato Alternativo</label>
        <?= $this->Form->control('contatoAlt', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'nome do contato alternativo', 'label' => false]) ?>
    </div>
    <div class="col-md-3 mt-3">
        <label class="form-label">Telefone Alternativo</label>
        <?= $this->Form->control('telAlt', ['type' => 'telAlt', 'class' => 'form-control', 'onkeyup' => 'handlePhone(event)', 'placeholder' => '(00) 00000-0000', 'label' => false]) ?>
    </div>
    <div class="col-md-3 mt-3">
        <label class="form-label">Endereço</label>
        <?= $this->Form->control('endereco', ['type' => 'endereco', 'class' => 'form-control', 'placeholder' => 'seu endereço (opcional)', 'label' => false]) ?>
    </div>
    <div class="col-md-3 mt-3">
        <label class="form-label">Turno</label>
        <?= $this->Form->select('turno', ['Manhã' => 'Manhã', 'Tarde' => 'Tarde', 'Noite' => 'Noite'], ['class' => 'form-select', 'empty' => '-- Selecione --', 'label' => false]) ?>
    </div>
</div>
<div class="mt-5">
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
</div>
<?= $this->Form->end() ?>


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
