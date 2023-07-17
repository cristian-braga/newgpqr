<div class="expedicao form content">
    <?= $this->Form->create(null, ['url' => ['controller' => 'Expedicao', 'action' => 'atualizaExpedicao']]) ?>
    <legend><?= __('Lançar Expedição') ?></legend>
    <?php foreach ($servicos as $servico): ?>
        <fieldset>
            <?php
                echo $this->Form->control('Serviço', ['value' => $servico->servico->nome_servico, 'disabled']);
                echo $this->Form->control('quantidade_documentos', ['value' => $servico->atividade->quantidade_documentos, 'disabled']);
                echo $this->Form->control('data_postagem', ['value' => $servico->atividade->data_postagem, 'disabled']);
                echo $this->Form->control('remessa_atividade', ['value' => $servico->atividade->remessa_atividade, 'disabled']);
                echo $this->Form->control('capas');
                echo $this->Form->control('solicitante');
                echo $this->Form->control('responsavel_remessa');
            ?>
        </fieldset>
        <hr>
    <?php endforeach; ?>
    <fieldset>
        <?php
            echo $this->Form->control('data_lancamento', ['value' => date('Y-m-d')]);
            echo $this->Form->control('hora', ['value' => date('H:i:s')]);
            echo $this->Form->control('responsavel_coleta');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


- Servico
- quantidade_documentos
- data_postagem
- remessa_atividade

- solicitante
- responsavel pela Remessa (Funcionario impresso na Remessa de Serviço)
- capas (opcional)