<div class="row">
    <div class="column-responsive column-80">
        <div class="digitalizacao form content">
            <?= $this->Form->create($digitalizacao) ?>
            <fieldset>
                <legend><?= __('Adicionar Digitalizacao') ?></legend>
                <?= $this->Form->control('quantidade_documentos'); ?>
                <?= $this->Form->control('periodo'); ?>
                <?=   $this->Form->control('servico_id', ['options' => $servicos, 'class' => 'form-select']); ?>
                
            </fieldset>
            <!-- <?= $this->Form->control('servico_id[]', ['options' => $servicos, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?> -->


            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
