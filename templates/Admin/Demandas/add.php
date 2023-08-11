<h3 class="text-center mt-2 mb-4">ADICIONAR DEMANDA</h3>
<?= $this->Form->create($demanda, ['class' => 'mx-auto p-3 form', 'style' => 'width: 50%']) ?>
<div class="row g-3">
    <div class="col-md-12">
        <label class="form-label">Título</label>
        <?= $this->Form->control('demanda_resumo', ['type' => 'text', 'class' => 'form-control', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Prioridade</label>
        <?= $this->Form->select('demanda_prioridade', ['Urgente' => 'Urgente', 'Alto' => 'Alto', 'Médio' => 'Médio', 'Baixo' => 'Baixo'], ['class' => 'form-select', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Tipo</label>
        <?= $this->Form->select('demanda_tipo', ['Criação' => 'Criação', 'Melhoria' => 'Melhoria', 'Erro' => 'Erro'], ['class' => 'form-select', 'required', 'label' => false]) ?>
    </div>
    <div class="col-md-12">
        <label class="form-label">Descrição</label>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" id="demanda_descricao" name="demanda_descricao"
                style="height: 100px"></textarea>
            <label for="floatingTextarea2">Digite...</label>
        </div>
    </div>
    <div class="col-12 mt-5">
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary float-end']) ?>
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary float-end mb-3']) ?>

    </div>
</div>
<?= $this->Form->end() ?>
