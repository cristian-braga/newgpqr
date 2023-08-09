<h3 class="text-center mt-2 mb-4">EDITAR EXPEDIÇÃO</h3>
<?= $this->Form->create($expedicao, ['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Serviço</label>
            <?= $this->Form->control('servico', ['class' => 'form-control', 'value' => $expedicao->atividade->servico->nome_servico, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Cadastro</label>
            <?= $this->Form->control('data_cadastro', ['class' => 'form-control', 'value' => $expedicao->atividade->data_cadastro, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Remessa/OCR</label>
            <?= $this->Form->control('remessa_atividade', ['class' => 'form-control', 'maxlenght' => 11, 'value' => $expedicao->atividade->remessa_atividade, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Documentos</label>
            <?= $this->Form->control('quantidade_documentos', ['class' => 'form-control', 'value' => $expedicao->atividade->quantidade_documentos, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Postagem</label>
            <?= $this->Form->control('data_postagem', ['class' => 'form-control', 'value' => $expedicao->atividade->data_postagem, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Capas</label>
            <?= $this->Form->control('capas', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'N° de capas', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Solicitante</label>
            <?= $this->Form->control('solicitante', ['class' => 'form-control', 'placeholder' => 'Nome do solicitante', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Responsável</label>
            <?= $this->Form->control('responsavel_remessa', ['class' => 'form-control', 'placeholder' => 'Nome do responsável', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <label class="form-label">Observação</label>
            <?= $this->Form->control('observacao', ['rows' => '1', 'class' => 'form-control', 'placeholder' => 'Se houver, digite uma observação', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Expedição</label>
            <?= $this->Form->control('data_expedicao', ['type' => 'date', 'class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Hora</label>
            <?= $this->Form->control('hora', ['type' => 'time', 'class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-4">
            <label class="form-label">Responsável pela Coleta</label>
            <?= $this->Form->control('responsavel_coleta', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'servicosExpedidos'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>