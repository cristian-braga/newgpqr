<div class="expedicao form content">
    <?= $this->Form->create(null, ['url' => ['controller' => 'Expedicao', 'action' => 'atualizaExpedicao']]) ?>
    <legend><?= __('Lançar Expedição') ?></legend>
    <?php foreach ($servicos as $servico): ?>
        <fieldset>
            <?php
                echo $this->Form->control('expedicao_id', ['type' => 'hidden', 'name' => 'expedicao_id[]', 'value' => $servico->id]);
                echo $this->Form->control('Serviço', ['value' => $servico->servico->nome_servico, 'disabled']);
                echo $this->Form->control('quantidade_documentos', ['value' => $servico->atividade->quantidade_documentos, 'disabled']);
                echo $this->Form->control('data_postagem', ['value' => $servico->atividade->data_postagem, 'disabled']);
                echo $this->Form->control('remessa_atividade', ['type' => 'number', 'value' => $servico->atividade->remessa_atividade, 'disabled']);
                echo $this->Form->control('capas', ['name' => 'capas[]', 'type' => 'number']);
                echo $this->Form->control('solicitante', ['name' => 'solicitante[]']);
                echo $this->Form->control('responsavel_remessa', ['name' => 'responsavel_remessa[]']);
            ?>
        </fieldset>
        <hr>
    <?php endforeach; ?>
    <fieldset>
        <?php
            echo $this->Form->control('data_expedicao', ['name' => 'data_expedicao[]', 'type' => 'date', 'value' => date('Y-m-d')]);
            echo $this->Form->control('hora', ['name' => 'hora[]', 'type' => 'time', 'value' => date('H:i:s')]);
            echo $this->Form->control('responsavel_coleta', ['name' => 'responsavel_coleta[]']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>