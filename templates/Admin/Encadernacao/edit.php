<h3 class="text-center mt-2 mb-4">Editar</h3>
<?= $this->Form->create($encadernacao, ['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Data</label>
        <?php echo $this->Form->control('data_cadastro', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Ocorrência</label>
        <?php echo $this->Form->control('ocorrencia', ['type' => 'number', 'class' => 'form-control', 'required', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Solicitante</label>
        <?php echo $this->Form->control('solicitante', ['type' => 'text', 'class' => 'form-control', 'required', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Descrição</label>
        <?php echo $this->Form->control('descricao', ['type' => 'text', 'class' => 'form-control', 'required', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Documentos</label>
        <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'required', 'label' => false]); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'required', 'label' => false]); ?>
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Tipo de Capa</label>
        <select class="form-select" name ="tipo_capa" aria-label="Default select example">
            <option selected>Selecione:</option>
            <option value="Somente Frente">Capa - Plástica</option>
            <option value="Frente e Verso">Capa - Prodemge</option>
        </select>
    </div>
    <!-- <?php
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('paginas');
                    echo $this->Form->control('ocorrencia');
                    echo $this->Form->control('solicitante');
                    echo $this->Form->control('data_cadastro');
                    echo $this->Form->control('funcionario');
                    echo $this->Form->control('tipo_capa');
                    echo $this->Form->control('copias');
                    echo $this->Form->control('total');
                    echo $this->Form->control('capas');
                ?> -->
    <div class="col-12 mt-3">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
    </div>
</div>
<?= $this->Form->end() ?>