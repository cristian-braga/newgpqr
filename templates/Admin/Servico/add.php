<h3 class="text-center mt-2 mb-4">CADASTRAR SERVIÇO</h3>
<?= $this->Form->create($servico, ['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Nome do Serviço</label>
            <?= $this->Form->control('nome_servico', ['class' => 'form-control text-uppercase', 'placeholder' => 'Ex: A0DMD11, SDAKD11...', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Código do Sistema</label>
            <?= $this->Form->control('cod_sistema_servico', ['class' => 'form-control text-uppercase', 'placeholder' => 'Ex: A0DM, SDAK...', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <label class="form-label">Cliente Responsável Serviço</label>
            <?= $this->Form->control('cliente_responsavel_servico', ['class' => 'form-control', 'placeholder' => 'Ex: Polícia Civil do Estado de MG...', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <label class="form-label">Cliente Serviço</label>
            <?= $this->Form->control('cliente_servico', ['class' => 'form-control', 'placeholder' => 'Ex: DETRAN - Departamento de Trânsito de MG...', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-8">
            <label class="form-label">Descrição Serviço</label>
            <?= $this->Form->control('descricao_servico', ['options' => $descricao, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-4">
            <label class="form-label">Ativo</label>
            <?= $this->Form->control('ativo', ['options' => $ativo, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Correios Serviço</label>
            <?= $this->Form->control('correios_servico', ['options' => $correios, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Impressão Serviço</label>
            <?= $this->Form->control('impressao_servico', ['options' => $impressao_servico, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Tipo de Impressão</label>
            <?= $this->Form->control('tipo_impressao_servico', ['options' => $tipo_impressao, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Tipo de Preparo</label>
            <?= $this->Form->control('tipo_preparo_servico', ['options' => $tipo_preparo, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Tipo de Envelopamento</label>
            <?= $this->Form->control('envelopamento_servico', ['options' => $env_servico, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Separador</label>
            <?= $this->Form->control('separador_servico', ['options' => $separador, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Tipo de Entrega</label>
            <?= $this->Form->control('entrega_servico', ['options' => $entrega, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Descrição do Sistema</label>
            <?= $this->Form->control('descricao_sistema_servico', ['options' => $desc_sistema, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Valor</label>
            <?= $this->Form->control('valor_servico', ['options' => $valor_servico, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-md-6">
            <label class="form-label">Folhas de Rosto</label>
            <?= $this->Form->control('folha_rosto', ['options' => $folha_rosto, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
        </div>
        <div class="col-12 mt-5">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>