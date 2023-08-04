
<div class="row">
    <div class="column-responsive column-80">
        <div class="demandas form content">
            <?= $this->Form->create($demanda) ?>
            <fieldset>
                <legend>Motivo da reabertura</legend>
                <?php
                 
                    echo $this->Form->textarea('reabertura', ['class' => 'form-control']);
                    
                    

                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
