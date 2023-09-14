<h3 class="text-center mt-2 mb-4">EDITAR</h3>
<hr>
<?= $this->Form->create($cd,['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
<div class="row g-3">
    <div class="col-md-6">
        <label for="sistema">Serviço:</label>
        <div class="form-check form-check-inline">
            <label><b>CD</b></label>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-md-3">
            <label class="form-label">Data Atual</label>
            <?= $this->Form->control('dataAtual', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-2">
            <label class="form-label">Ocorrência</label>
            <?php echo $this->Form->control('ocorrencia', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Ocorrência', 'label' => false]); ?>
        </div>
            <div class="col-md-2">
            <label class="form-label">Quantidade</label>
            <?php echo $this->Form->control('quantidade', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Quantidade', 'label' => false]); ?>
        </div>
        <div class="col-md-5">
            <label class="form-label">Cliente</label>
            <?php echo $this->Form->control('cliente', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Cliente', 'label' => false]); ?>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-md-4">
            <label class="form-label">Solicitante</label>
            <?php echo $this->Form->control('solicitante', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Solicitante', 'label' => false]) ?>
        </div>

        <div class="col-md-4">
            <label class="form-label">Descrição</label>
            <?php echo $this->Form->control('descricao', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Descrição', 'label' => false]); ?>
        </div>
        <div class="col-md-4">
            <label class="form-label">Observação Email:</label>
            <?php echo $this->Form->control('observacao', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Observacao', 'label' => false]); ?>
        </div>
        <!-- <div class="col-md-2">
            <label class="form-label">Observação Email:</label>
            <?php echo $this->Form->control('funcionario', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Observacao', 'label' => false]); ?>
        </div> -->
    </div>
    <div class="col-md-6" style="margin-top: 15px;">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
        <?= $this->Form->end() ?>
    </div>

</div>