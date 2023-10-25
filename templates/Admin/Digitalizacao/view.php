<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'digitalizacao'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<div class="conteudo" style="width: 65%;">
    <h3 class="text-center text-primary-emphasis mt-2 mb-4"><?= h($digitalizacao->servico->nome_servico) ?></h3>
    <table class="table table-borderless table-striped mb-4 align-middle">
        <tr>
            <th>Data de cadastro:</th>
            <td><?= h($digitalizacao->data_digitalizacao) ?></td>
        </tr>
        <tr>
            <th>Responsável:</th>
            <td><?= h($digitalizacao->funcionario) ?></td>
        </tr>
        <tr>
            <th>Remessa:</th>
            <td><?= h($digitalizacao->remessa) ?></td>
        </tr>
        <tr>
            <th>Quantidade de documentos:</th>
            <td><?= $this->Number->format($digitalizacao->quantidade_documentos) ?></td>
        </tr>
        <tr>
            <th>Data de postagem:</th>
            <td><?= h($digitalizacao->data_postagem) ?></td>
        </tr>
        <tr>
            <th>Status atual:</th>
            <td><?= h($digitalizacao->status_digitalizacao) ?></td>
        </tr>
    </table>
    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $digitalizacao->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow mb-3']) ?>
    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $digitalizacao->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow mb-3', 'confirm' => __('ATENÇÃO! Essa ação apagará o registro em TODAS as etapas e não poderá ser desfeita! Realmente deseja excluir o serviço:  {0}?', $digitalizacao->servico->nome_servico)]) ?>
</div>

<?php if (!empty($digitalizacao->digit_qualidade)) : ?>
    <div class="conteudo" style="width: 65%;">
        <h4 class="text-center text-danger-emphasis mt-2 mb-4">CONTROLE DE QUALIDADE</h4>
        <div class="table-responsive">
            <table class="table table-borderless table-striped text-center align-middle">
                <tr>
                    <th>Responsável</th>
                    <th>Data do Controle de Qualidade</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
                <?php foreach ($digitalizacao->digit_qualidade as $digit_qualidade) : ?>
                    <tr>
                        <td><?= h($digit_qualidade->funcionario) ?></td>
                        <td><?= h($digit_qualidade->data_qualidade) ?></td>
                        <td><?= h($digit_qualidade->status_digitalizacao) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['controller' => 'DigitQualidade', 'action' => 'edit', $digit_qualidade->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Form->postLink(__('Desfazer'), ['controller' => 'DigitQualidade', 'action' => 'voltarEtapa', $digit_qualidade->digitalizacao_id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para "Aguardando Cont. Qualidade". Deseja continuar?', $digitalizacao->servico->nome_servico)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
<?php endif; ?>
    
<?php if (!empty($digitalizacao->digit_lancamento)) : ?>
    <div class="conteudo" style="width: 65%;">
        <h4 class="text-center text-danger-emphasis mt-2 mb-4">LANÇAMENTO ALFRESCO</h4>
        <table class="table table-borderless table-striped text-center align-middle">
            <tr>
                <th>Responsável</th>
                <th>Data do Lançamento Alfresco</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($digitalizacao->digit_lancamento as $digit_lancamento) : ?>
                <tr>
                    <td><?= h($digit_lancamento->funcionario) ?></td>
                    <td><?= h($digit_lancamento->data_lancamento) ?></td>
                    <td><?= h($digit_lancamento->status_digitalizacao) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['controller' => 'DigitLancamento', 'action' => 'edit', $digit_lancamento->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Desfazer'), ['controller' => 'DigitLancamento', 'action' => 'voltarEtapa', $digit_lancamento->digitalizacao_id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para "Aguardando Lançamento". Deseja continuar?', $digitalizacao->servico->nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php endif; ?>
    
<?php if (!empty($digitalizacao->digit_conferencia)) : ?>
    <div class="conteudo" style="width: 65%;">
        <h4 class="text-center text-danger-emphasis mt-2 mb-4">CONFERÊNCIA ALFRESCO</h4>
        <table class="table table-borderless table-striped text-center align-middle">
            <tr>
                <th>Responsável</th>
                <th>Data da Conferência Alfresco</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($digitalizacao->digit_conferencia as $digit_conferencia) : ?>
                <tr>
                    <td><?= h($digit_conferencia->funcionario) ?></td>
                    <td><?= h($digit_conferencia->data_conferencia) ?></td>
                    <td><?= h($digit_conferencia->status_digitalizacao) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['controller' => 'DigitConferencia', 'action' => 'edit', $digit_conferencia->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Desfazer'), ['controller' => 'DigitConferencia', 'action' => 'voltarEtapa', $digit_conferencia->digitalizacao_id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para "Aguardando Conferência". Deseja continuar?', $digitalizacao->servico->nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php endif; ?>