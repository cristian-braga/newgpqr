<h3 class="text-center mt-2 mb-4">EDITAR</h3>
<?= $this->Form->create($impressaoEncadernacao, ['class' => 'mx-auto p-3 form', 'style' => 'width: 50%']) ?>
<div class="row g-3 mt-3">
<div class="col-md-6">
        <?php echo $this->Form->control('dataAtual', ['type' => 'date', 'label' => 'Data', 'id' => 'calendario', 'class' => 'form-control', 'autocomplete' => 'off']); ?>
    </div>
    <div class="col-md-6">
        <label class="form-label" for="ocorrencia">Ocorrência</label>
        <input class="form-control" type="number" name="ocorrencia" value="<?php echo $impressaoEncadernacao['ocorrencia'] ?>" required maxlength="6">
    </div>
    <div class="col-md-6">
        <label class="form-label" for="paginas">Quant. Páginas</label>
        <input class="form-control" type="number" name="paginas_imp" value="<?php echo $impressaoEncadernacao['paginas_imp'] ?>">
    </div>
    <div class="col-md-6">
        <label for="solicitante">Solicitante</label>
        <input class="form-control" type="text" name="solicitante" required value="<?php echo $impressaoEncadernacao['solicitante'] ?>">
    </div>
    <div class="col-md-6">
        <label for="Descricao">Descrição</label>
        <input class="form-control" type="text" name="descricao" value="<?php echo $impressaoEncadernacao['descricao'] ?>">
    </div>
    <!-- IMPRESSÃO E ENCADERNAÇÃO -->
    <div class="col-md-6">
        <?php if ($impressaoEncadernacao['tipo_imp'] == "Frente e Verso") { ?>
            <label>Tipo de Impressão</label>
            <select name="tipo_imp" class="form-control">
                <option value="Somente Frente">Somente Frente</option>
                <option selected value="Frente e Verso">Frente e Verso</option>
            </select>
        <?php } else { ?>
            <label>Tipo de Impressão</label>
            <select name="tipo_imp" class="form-control">
                <option selected value="Somente Frente">Somente Frente</option>
                <option value="Frente e Verso">Frente e Verso</option>
            </select>
        <?php } ?>
        </div>
    <div class="col-md-6">
        <?php if ($impressaoEncadernacao['tipo_capa'] == "Capa - Prodemge") { ?>
            <label>Tipo de Capa</label>
            <select name="tipo_capa" class="form-control">
                <option value="Capa - Plástica">Capa - Plástica</option>
                <option selected value="Capa - Prodemge">Capa - Prodemge</option>
            </select>
        <?php } else { ?>
            <label>Tipo de Capa</label>
            <select name="tipo_capa" class="form-control">
                <option selected value="Capa - Plástica">Capa - Plástica</option>
                <option value="Capa - Prodemge">Capa - Prodemge</option>
            </select>
        <?php } ?>
    </div>
    <div class="col-md-6">
        <label for="copias">Cópias</label>
        <input class="form-control" type="number" name="copias_imp" value="<?php echo $impressaoEncadernacao['copias_imp'] ?>">
    </div>
    <div class="col-md-6">
        <label for="numero_encar">Quant. Encadernada</label>
        <input class="form-control" type="number" name="numero_encar" value="<?php echo $impressaoEncadernacao['numero_encar'] ?>">
    </div>
    <div class="col-md-6">
        <label for="quant_capa">Capas</label>
        <input class="form-control" type="number" name="quant_capa" value="<?php echo $impressaoEncadernacao['quant_capa'] ?>">
    </div>
    <div class="col-md-6" style="margin-top:15px;">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
