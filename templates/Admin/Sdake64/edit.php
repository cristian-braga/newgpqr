<h3 class="text-center mt-2 mb-4">EDITAR</h3>
<?= $this->Form->create($sdake64,['class' => 'mx-auto p-3 form', 'style' => 'width: 50%']) ?>
<div class="row g-3">
    <div class="form-group col-md-6 mt-0">
        <label class="form-label">JOB</label>
        <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'N° do JOB', 'required', 'label' => false]); ?>
    </div>  
    <div class="form-group col-md-6 mt-0">  
        <label class="form-label">Data</label>
        <?php echo $this->Form->control('dataAtual', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
    </div>
    <h5 class="text-center mt-4"><b>Veículos com Averbação Incluída</b></h5>
    <div class="col-md-6 mt-0">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'N° de Cópias', 'required', 'label' => false]); ?>
    </div>
    <div class="col-md-6 mt-0">    
        <label class="form-label">Páginas</label>
        <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'N° de Páginas', 'required', 'label' => false]); ?>
    </div>
    <h5 class="text-center mt-4"><b>Veículos Não Incluídos - Fora de Circulação</b></h5>
    <div class="form-group col-md-6 mt-0">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias1', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'N° de Cópias', 'required', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-6 mt-0">
    <label class="form-label">Páginas</label>  
        <?php echo $this->Form->control('paginas1', ['type' => 'number', 'class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'N° de Páginas', 'required', 'label' => false]); ?>
    </div>
    <h5 class="text-center mt-4"><b>Veículos Não Incluídos - Com Comunicação de Venda</b></h5>
    <div class="form-group col-md-6 mt-0">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias2', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'N° de Cópias', 'required', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-6 mt-0">
    <label class="form-label">Páginas</label>
        <?php echo $this->Form->control('paginas2', ['type' => 'number', 'class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'N° de Páginas', 'required', 'label' => false]); ?>
    </div>
    <h5 class="text-center mt-4"><b>Veículos Não Incluídos - Com Reserva de Restrição</b></h5>
    <div class="form-group col-md-6 mt-0">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias3', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'N° de Cópias', 'required', 'label' => false]); ?>
    </div> 
    <div class="form-group col-md-6 mt-0"> 
    <label class="form-label">Páginas</label>  
        <?php echo $this->Form->control('paginas3', ['type' => 'number', 'class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'N° de Páginas', 'required', 'label' => false]); ?>
    </div>
    <h5 class="text-center mt-4"><b>Veículos em Processo de Leilão</b></h5>
    <div class="form-group col-md-6 mt-0">
        <label class="form-label">Cópias</label>
        <?php echo $this->Form->control('copias4', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'N° de Cópias', 'required', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-6 mt-0">
    <label class="form-label">Páginas</label>
        <?php echo $this->Form->control('paginas4', ['type' => 'number', 'class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'N° de Páginas', 'required', 'label' => false]); ?>
    </div>
    <div class="col-md-6" style="margin-top:15px;">
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>