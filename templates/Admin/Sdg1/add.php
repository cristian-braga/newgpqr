            <h3 class="tetx-center mt-2 mb-4">Cadastrar</h3>
            <hr>

            <?= $this->Form->create($sdg1) ?>
            <div class="row">
                <div class="form-group"><label class="form-label">Sistema:</label>
                    <p><b>SDG1</b></p>
                </div>
                <div class="form-group col-md-2"><label class="form-label">Job</label>
                    <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Job', 'label' => false]); ?>
                </div>
                <div class="form-group col-md-2"><label class="form-label">Cópias</label>
                    <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Cópias', 'label' => false]);?>
                </div>
                <div class="form-group col-md-2"><label class="form-label">Páginas</label>
                    <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control', 'placeholder' => 'Páginas', 'label' => false]); ?>
                </div>
                <?php
                echo $this->Form->control('copias');
                echo $this->Form->control('paginas');
                echo $this->Form->control('job');
                echo $this->Form->control('capa');
                echo $this->Form->control('dataAtual');
                echo $this->Form->control('funcionario');
                echo $this->Form->control('total');
                ?>
            </div>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Html->link(__('List Sdg1'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->end() ?>