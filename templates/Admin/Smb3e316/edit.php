        <h3 class="text-center">Editar</h3>
        <?= $this->Form->create($smb3e316, ['class' => 'mx-auto p-3 form', 'style' => 'width: 60%']) ?>
        <div class="row">
            <div class="col-md-6">
                <label class="form-label">Código da Cidade</label>
                <?= $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'label' => false]) ?>
            </div>
            <div class="col-md-6">
                <label class="form-label">Job</label>
                <?= $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 10, 'label' => false]) ?>
            </div>
            <div class="col-md-6">
                <label class="form-label">Cópias</label>
                <?= $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 10, 'label' => false]) ?>
            </div>
            <div class="col-md-6">
                <label class="form-label">N° de Páginas</label>
                <?= $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 10, 'label' => false]) ?>
            </div>
            <div class="col-md-6">
                <label class="form-label">Capas</label>
                <?= $this->Form->control('capas', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 10, 'label' => false]) ?>
            </div>
            <div class="col-md-6">
                <label class="form-label">Cópias</label>
                <?= $this->Form->control('dataAtual', ['type' => 'date', 'class' => 'form-control','label' => false]) ?>
            </div>
        </div>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>