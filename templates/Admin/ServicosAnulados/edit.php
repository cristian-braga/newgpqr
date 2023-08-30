<h3 class="text-center mt-2 mb-4">EDITAR SERVIÇO ANULADO</h3>
<?= $this->Form->create($servicoAnulado, ['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Serviço</label>
            <?= $this->Form->control('servico', ['class' => 'form-control', 'value' => $servicoAnulado->atividade->servico->nome_servico, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Postagem</label>
            <?= $this->Form->control('data_postagem', ['class' => 'form-control', 'value' => $servicoAnulado->atividade->data_postagem, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Remessa/OCR</label>
            <?= $this->Form->control('remessa_atividade', ['class' => 'form-control', 'value' => $servicoAnulado->atividade->remessa_atividade, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Job</label>
            <?= $this->Form->control('job', ['class' => 'form-control', 'value' => $servicoAnulado->atividade->job, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Documentos</label>
            <?= $this->Form->control('quantidade_documentos', ['class' => 'form-control', 'value' => $servicoAnulado->atividade->quantidade_documentos, 'disabled', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Etapa do erro</label>
            <?= $this->Form->control('etapa', ['options' => $etapas, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Tipo do erro</label>
            <?= $this->Form->control('status_atividade_id', ['options' => $erros, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Responsável</label>
            <?= $this->Form->control('funcionario', ['class' => 'form-control', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <label class="form-label">Descrição</label>
            <?= $this->Form->textarea('observacao', ['class' => 'form-control', 'placeholder' => 'Descreva brevemente o problema ocorrido...', 'rows' => '3', 'required', 'label' => false]) ?>
        </div>
        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>