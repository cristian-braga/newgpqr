<div class="conteudo" style="width: 65%;">
    <h3 class="text-center text-primary-emphasis mt-2 mb-4"><?= h($nome_servico) ?></h3>
    <table class="table table-borderless table-striped mb-4 align-middle">
        <tr>
            <th>Data de cadastro:</th>
            <td><?= h($atividade->data_cadastro) ?></td>
        </tr>
        <tr>
            <th>Responsável:</th>
            <td><?= h($atividade->funcionario) ?></td>
        </tr>
        <tr>
            <th>Remessa/OCR:</th>
            <td><?= h($atividade->remessa_atividade) ?></td>
        </tr>
        <tr>
            <th>Job:</th>
            <td><?= h($atividade->job) ?></td>
        </tr>
        <tr>
            <th>Quantidade de documentos:</th>
            <td><?= $this->Number->format($atividade->quantidade_documentos) ?></td>
        </tr>
        <tr>
            <th>Data de postagem:</th>
            <td><?= h($atividade->data_postagem) ?></td>
        </tr>
        <tr>
            <th>Recibo(s) de postagem:</th>
            <td><?= h($atividade->recibo_postagem) ?></td>
        </tr>
        <tr>
            <th>Status:</th>
            <td><?= h($atividade->status_atividade->status_atual) ?></td>
        </tr>
        <tr>
            <th>Folhas de rosto:</th>
            <td><?= $this->Number->format($atividade->servico->folha_rosto) ?></td>
        </tr>
        <tr>
            <th>Quantidade de folhas:</th>
            <td><?= $this->Number->format($atividade->quantidade_folhas) ?></td>
        </tr>
        <tr>
            <th>Quantidade de paginas:</th>
            <td><?= $this->Number->format($atividade->quantidade_paginas) ?></td>
        </tr>
        <tr>
            <th>Cadastro Atividade:</th>
            <td><?= h($atividade->data_atividade) ?></td>
        </tr>
    </table>
    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $atividade->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow mb-3']) ?>
    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $atividade->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow mb-3', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $nome_servico)]) ?>
</div>

<?php if (!empty($atividade->impressao)) : ?>
    <div class="conteudo" style="width: 65%;">
        <h4 class="text-center text-danger-emphasis mt-2 mb-4">IMPRESSÃO</h4>
        <div class="table-responsive">
            <table class="table table-borderless table-striped text-center align-middle">
                <tr>
                    <th>Responsável</th>
                    <th>Data da impressão</th>
                    <th>Impressora</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
                <?php foreach ($atividade->impressao as $impressao) : ?>
                    <tr>
                        <td><?= h($impressao->funcionario) ?></td>
                        <td><?= h($impressao->data_impressao) ?></td>
                        <td><?= h($impressao->impressora->nome_impressora) ?></td>
                        <td><?= h($impressao->status_atividade->status_atual) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['controller' => 'Impressao', 'action' => 'edit', $impressao->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Impressao', 'action' => 'delete', $impressao->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir a impressão do serviço:  {0}?', $nome_servico)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
<?php endif; ?>
    
<?php if (!empty($atividade->conferencia)) : ?>
    <div class="conteudo" style="width: 65%;">
        <h4 class="text-center text-danger-emphasis mt-2 mb-4">CONFERÊNCIA</h4>
        <table class="table table-borderless table-striped text-center align-middle">
            <tr>
                <th>Responsável</th>
                <th>Data da conferência</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($atividade->conferencia as $conferencia) : ?>
                <tr>
                    <td><?= h($conferencia->funcionario) ?></td>
                    <td><?= h($conferencia->data_conferencia) ?></td>
                    <td><?= h($conferencia->status_atividade->status_atual) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['controller' => 'Conferencia', 'action' => 'edit', $conferencia->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Conferencia', 'action' => 'delete', $conferencia->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir a conferência do serviço:  {0}?', $nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php endif; ?>
    
<?php if (!empty($atividade->envelopamento)) : ?>
    <div class="conteudo" style="width: 65%;">
        <h4 class="text-center text-danger-emphasis mt-2 mb-4">ENVELOPAMENTO</h4>
        <table class="table table-borderless table-striped text-center align-middle">
            <tr>
                <th>Responsável</th>
                <th>Data do envelopamento</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($atividade->envelopamento as $envelopamento) : ?>
                <tr>
                    <td><?= h($envelopamento->funcionario) ?></td>
                    <td><?= h($envelopamento->data_envelopamento) ?></td>
                    <td><?= h($envelopamento->status_atividade->status_atual) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['controller' => 'Envelopamento', 'action' => 'edit', $envelopamento->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Envelopamento', 'action' => 'delete', $envelopamento->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir o envelopamento do serviço:  {0}?', $nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php endif; ?>

<?php if (!empty($atividade->triagem)) : ?>
    <div class="conteudo" style="width: 65%;">
        <h4 class="text-center text-danger-emphasis mt-2 mb-4">TRIAGEM</h4>
        <table class="table table-borderless table-striped text-center align-middle">
            <tr>
                <th>Responsável</th>
                <th>Data da triagem</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($atividade->triagem as $triagem) : ?>
                <tr>
                    <td><?= h($triagem->funcionario) ?></td>
                    <td><?= h($triagem->data_triagem) ?></td>
                    <td><?= h($triagem->status_atividade->status_atual) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['controller' => 'Triagem', 'action' => 'edit', $triagem->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Triagem', 'action' => 'delete', $triagem->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir a triagem do serviço:  {0}?', $nome_servico)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php endif; ?>

<?php if (!empty($atividade->expedicao)) : ?>
    <div class="conteudo">
        <h4 class="text-center text-danger-emphasis mt-2 mb-4">EXPEDIÇÃO</h4>
        <div class="table-responsive">
            <table class="table table-borderless table-striped text-center align-middle">
                <tr>
                    <th>Responsável</th>
                    <th>Data da Expedição</th>
                    <th>Capas</th>
                    <th>Solicitante</th>
                    <th>Responsável Remessa</th>
                    <th>Responsável Coleta</th>
                    <th>Hora</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
                <?php foreach ($atividade->expedicao as $expedicao) : ?>
                    <tr>
                        <td><?= h($expedicao->funcionario) ?></td>
                        <td><?= h($expedicao->data_lancamento) ?></td>
                        <td><?= h($expedicao->capas) ?></td>
                        <td><?= h($expedicao->solicitante) ?></td>
                        <td><?= h($expedicao->responsavel_remessa) ?></td>
                        <td><?= h($expedicao->responsavel_coleta) ?></td>
                        <td><?= h($expedicao->hora) ?></td>
                        <td><?= h($expedicao->status_atividade->status_atual) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['controller' => 'Expedicao', 'action' => 'edit', $expedicao->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Expedicao', 'action' => 'delete', $expedicao->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir a expedição do serviço:  {0}?', $nome_servico)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
<?php endif; ?>