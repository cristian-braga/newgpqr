<style>
    .btn-secondary {
        margin-left: 15px;
    }

    .form-control1 {
        margin-top: 10px;
    }
</style>
<h3 class="text-center mt-2 mb-4">CADASTRAR</h3>
<hr>
<?= $this->Form->create($smafe09e10) ?>
<div class="row">
    <div>
        <?= $this->Form->create($smafe09e10) ?>
        <div class="row">
            <div class="row">
                <div class="form-label col-md-12">
                    <h6> <label for="sistema">Serviço:</label><br><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="sistema" id="smafe009" value="SMAFE009">
                            <label class="form-check-label" for="smafe009">&nbspSMAFE009</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="sistema" id="smafe010" value="SMAFE010">
                            <label class="form-check-label" for="smafe010">&nbspSMAFE010</label>
                        </div>
                    </h6>
                </div>

                <div class="form-group col-md-3">
                    <label class="form-label">Referência</label>
                    <input class="form-control" type="month" name="referencia" id="referencia" required>
                </div>

                <div class="form-group col-md-2">
                    <label class="form-label">Concurso</label>
                    <input class="form-control" type="number" name="concurso" id="concurso"
                    placeholder="Digite o concurso" required>
                </div>

                <div class="form-group col-md-2">
                    <label class="form-label">Job</label>
                    <input class="form-control" type="number" name="job" id="job" placeholder="Somente números" required maxlength="4" value="<?php echo$smafe09e10['job'] ?>">
                </div>

                <div class="form-group col-md-2">
                    <label class="form-label">Data</label>
                    <?= $this->Form->control('data', ['type' => 'date', 'class' => 'form-control', 'required', 'label' => false]) ?>
                </div>
                
                <div class="form-group col-md-2">
                    <label class="form-label">Quantidade de Etiquetas</label>
                    <input class="form-control" type="number" name="quantidade_etiquetas" id="quantidade_etiquetas" placeholder="Quantidade" required value="<?php echo $smafe09e10['quantidade_etiquetas'] ?>">
                </div>
                
            </div>

            <div class="col-12 mt-5">
                <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            </div>
        </div>
    </div>
</div>
