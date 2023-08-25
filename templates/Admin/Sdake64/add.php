
<style>
    .btn-secondary{
        margin-left: 15px;
    }
    .form-control1{
        margin-top: 10px;
    }
</style>

<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<hr>

<?= $this->Form->create($sdake64) ?>
<div class="row">
    <div class="form-group col-md-12">
        <label class="form-label">Sistema:</label>
        <p><b>SDAKE64</b></p>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">N° do JOB</label>
        <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Job', 'label' => false]); ?>
        <label class="form-label">Data</label>
        <?php echo $this->Form->control('dataAtual', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-10"></div>
    <div class="form-group col-md-2">
        <label class="form-label" style="margin-bottom: 32px;">Veículos com Averbação Incluída</label>
        <?php echo $this->Form->control('copias',['type' => 'number','class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]);?>
        <?php echo $this->Form->control('paginas',['type' => 'number','class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label"  style="margin-bottom: 32px;">Veículos Não Incluídos - Fora de Circulação</label>
        <?php echo $this->Form->control('copias1',['type' => 'number','class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]);
        echo $this->Form->control('paginas1',['type' => 'number','class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Veículos Não Incluídos - Com Comunicação de Venda</label>
        <?php echo $this->Form->control('copias2',['type' => 'number','class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]);
        echo $this->Form->control('paginas2',['type' => 'number','class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label">Veículos Não Incluídos - Com Reserva de Restrição</label>
        <?php echo $this->Form->control('copias3',['type' => 'number','class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]);
        echo $this->Form->control('paginas3',['type' => 'number','class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
    </div>
    <div class="form-group col-md-2">
        <label class="form-label" style="margin-bottom: 32px;">Veículos em Processo de Leilão</label>
        <?php echo $this->Form->control('copias4',['type' => 'number','class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]);
        echo $this->Form->control('paginas4',['type' => 'number','class' => 'form-control form-control1', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
    </div>
</div><br>

<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
<?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'],['style' => 'margin-left:15px;']) ?>
<?= $this->Form->end() ?>
</div>
</div>
</div>