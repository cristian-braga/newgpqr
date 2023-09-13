<h3 class="text-center">Editar</h3>
            <?= $this->Form->create($smafe008) ?>
                <?php
                    echo $this->Form->control('copias');
                    echo $this->Form->control('paginas');
                    echo $this->Form->control('total');
                    echo $this->Form->control('concurso');
                    echo $this->Form->control('job');
                    echo $this->Form->control('referencia');
                    echo $this->Form->control('data', ['empty' => true]);
                    echo $this->Form->control('funcionario');
                ?>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Html->link(__('List Smafe008'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->end() ?>

