<div class="row">
    <div class="column-responsive column-80">
        <div class="demandas form content">
            <?= $this->Form->create($demanda) ?>
            <fieldset>
                <legend>Relatório de finalização <?= h($demanda->id) ?> - <?= h($demanda->demanda_resumo) ?></legend>
                <?php
                    echo $this->Form->textarea('demanda_log', ['class' => 'form-control', 'placeholder' => 'Digite seu Log aqui..', 'required']); 

                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success float-end']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
