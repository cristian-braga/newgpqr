<h3 class="text-center mt-2 mb-4">EDITAR CONFERÊNCIA</h3>
<?= $this->Form->create($conferencia, ['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Serviço</label>
            <?= $this->Form->control('servico', ['class' => 'form-control', 'value' => $conferencia->atividade->servico->nome_servico, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Cadastro</label>
            <?= $this->Form->control('data_cadastro', ['class' => 'form-control', 'value' => $conferencia->atividade->data_cadastro, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Remessa/OCR</label>
            <?= $this->Form->control('remessa_atividade', ['class' => 'form-control', 'maxlenght' => 11, 'value' => $conferencia->atividade->remessa_atividade, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Job</label>
            <?= $this->Form->control('job', ['class' => 'form-control', 'maxlenght' => 10, 'value' => $conferencia->atividade->job, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Documentos</label>
            <?= $this->Form->control('quantidade_documentos', ['class' => 'form-control', 'value' => $conferencia->atividade->quantidade_documentos, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Postagem</label>
            <?= $this->Form->control('data_postagem', ['class' => 'form-control', 'value' => $conferencia->atividade->data_postagem, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Recibo(s) Postagem</label>
            <?= $this->Form->control('recibo_postagem', ['class' => 'form-control', 'value' => $conferencia->atividade->recibo_postagem, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Responsável</label>
            <?= $this->Form->control('funcionario', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'servicosImpressos'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>