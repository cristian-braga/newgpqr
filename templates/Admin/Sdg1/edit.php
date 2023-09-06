<h3 class="text-center mt-2 mb-4">EDITAR</h3>
<hr>
<?= $this->Form->create($sdg1,['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
    <div class="row g-3">
        <div class="col-md-6">
            <h6> <label for="sistema">Serviço:</label>
            <div class="form-check form-check-inline">
                <label><b>SDG1M001</b></label>
            </div>
        </div>

            <div class="row">
                       
                <div class="form-group col-md-2">
                    <label for="referencia">JOB</label>
                    <input class="form-control" type="number" name="job" id="job" placeholder="Somente números" required maxlength="5" value="<?php echo $sdg1['job'] ?>"> 
                </div>
                <div class="form-group col-md-2">
                    <label for="referencia">Cópias</label>
                    <input class="form-control" type="number" name="copias" id="copias" placeholder="Número de cópias" required maxlength="5" value="<?php echo $sdg1['copias'] ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="referencia">Páginas</label>
                    <input class="form-control" type="number" name="paginas" id="paginas" placeholder="Número de páginas" required value="<?php echo $sdg1['paginas'] ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="referencia">Capas</label>
                    <input class="form-control" type="number" name="capa" id="capa" placeholder="Número de capas" required value="<?php echo $sdg1['capa'] ?>">
                </div>
                <div class="form-group col-md-2">
                    
                    <?php echo $this->Form->control('dataAtual', ['type' => 'text','label' => 'Data','id' => 'calendario', 'class' => 'form-control', 'autocomplete' => 'off']); ?> 
                </div>
            </div>
            <br>
            <div class="row">      
                <div class="col-md-12">       
                    <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button> 
                    <a href="../index" class="btn btn-outline-danger btn-sm">Cancelar</a>        
                </div>    
            </div>
             
       
    </div>
<script type="text/javascript">
    $(function() {
        $( "#calendario" ).datepicker({dateFormat: 'dd/mm/yy',changeMonth: true,changeYear: true});
    });
</script>
<?= $this->Form->end() ?>
