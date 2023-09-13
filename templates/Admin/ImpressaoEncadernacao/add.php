<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<hr>
<?= $this->Form->create($impressaoEncadernacao, ['id' => 'form', 'class' => 'mx-auto p-3 form']) ?>
<div class="row">
    <div class="form-group col-md-12">
        <label class="form-label">Serviço:</label>
        <p><b>ENCADERNAÇÃO - IMPRESSÃO</b></p>
    </div>

    <?= $this->Form->create($impressaoEncadernacao) ?>
    <div class="row">
        <div class="form-group col-md-2">
            <label class="form-label">Data</label>
            <?php echo $this->Form->control('dataAtual', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
        </div>
        <div class="form-group col-md-2">
            <label class="form-label">Ocorrência</label>
            <input class="form-control" type="number" name="ocorrencia" placeholder="Somente Números" required maxlength="6">
        </div>
        <div class="form-group col-md-2">
            <label class="form-label">Quantidade de Páginas</label>
            <input class="form-control" type="number" name="paginas_imp" placeholder="Nº de documentos">
        </div>
        <div class="form-group col-md-3">
            <label class="form-label">Solicitante</label>
            <input class="form-control" type="text" name="solicitante" required placeholder="Solicitante">
        </div>
        <div class="form-group col-md-3">
            <label class="form-label">Descrição</label>
            <input class="form-control" type="text" name="descricao" placeholder="Descrição">
        </div>
    </div>

    <!-- IMPRESSÃO E ENCADERNAÇÃO -->
    <div class="row">
        <div class="form-group col-md-3" style="margin-top: 1%;">
        <label class="form-label">Tipo de Impressão</label>
            <select name="tipo_imp" class="form-control">
                <option value="">Selecione</option>
                <option value="Somente Frente">Somente Frente</option>
                <option value="Frente e Verso">Frente e Verso</option>
            </select>
        </div>
        <div class="form-group col-md-3" style="margin-top: 1%;">
            <label class="form-label">Tipo de Capa</label>
            <select name="tipo_capa" class="form-control">
                <option value="">Selecione</option>
                <option value="Capa - Plástica">Capa - Plástica</option>
                <option value="Capa - Prodemge">Capa - Prodemge</option>
            </select>
        </div>
        <div class="form-group col-md-2" style="margin-top: 1%;">
            <label class="form-label">Cópias</label>
            <input class="form-control" type="number" name="copias_imp" placeholder="Nº de cópias" maxlength="5">
        </div>
        <div class="form-group col-md-2" style="margin-top: 1%;">
            <label class="form-label">Capas</label>
            <input class="form-control" type="number" name="quant_capa" placeholder="Número de capas">
        </div>
        <div class="form-group col-md-2" style="margin-top: 1%;">
            <label class="form-label">Qnt. Encadernada</label>
            <input class="form-control" type="number" name="numero_encar" placeholder="Nº de Encadernações">
        </div>
    <div class="form-group" style="margin-top: 1%;">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:1%;']) ?>
        <?= $this->Form->end() ?>
    </div>
    <?= $this->Form->end() ?>
</div>
