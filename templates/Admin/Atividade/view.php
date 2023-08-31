<div class="conteudo" style="width: 65%;">
    <h3 class="text-center text-primary-emphasis mt-2 mb-4"><?= h($atividade->servico->nome_servico) ?></h3>
    <table class="table table-borderless table-striped mb-4 align-middle">
        <tr>
            <th>Data de cadastro:</th>
            <td><?= h($atividade->data_atividade) ?></td>
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
        <?php if ($servico_com_erro) : ?>
            <tr>
                <th>Status atual:</th>
                <td class="text-danger"><b><?= h($atividade->status_atividade->status_atual) ?></b></td>
            </tr>
            <tr>
                <th>Etapa do erro:</th>
                <td><?= h($atividade->servicos_anulados[0]->etapa) ?></td>
            </tr>
            <tr>
                <th colspan="2">Descrição do erro:</th>
            </tr>
            <tr>
                <td colspan="2"><?= h($atividade->servicos_anulados[0]->observacao) ?></td>
            </tr>
        <?php else: ?>
            <tr>
                <th>Status atual:</th>
                <td><?= h($atividade->status_atividade->status_atual) ?></td>
            </tr>
        <?php endif; ?>
    </table>
    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $atividade->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow mb-3']) ?>
    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $atividade->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow mb-3', 'confirm' => __('ATENÇÃO! Essa ação apagará o registro em TODAS as etapas e não poderá ser desfeita! Realmente deseja excluir o serviço:  {0}?', $atividade->servico->nome_servico)]) ?>
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
                            <?= $this->Form->postLink(__('Desfazer'), ['controller' => 'Impressao', 'action' => 'voltarEtapa', $impressao->atividade_id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para "Aguardando Impressão". Deseja continuar?', $atividade->servico->nome_servico)]) ?>
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
                        <?= $this->Form->postLink(__('Desfazer'), ['controller' => 'Conferencia', 'action' => 'voltarEtapa', $conferencia->atividade_id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para "Aguardando Conferência". Deseja continuar?', $atividade->servico->nome_servico)]) ?>
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
                        <?= $this->Form->postLink(__('Desfazer'), ['controller' => 'Envelopamento', 'action' => 'voltarEtapa', $envelopamento->atividade_id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para "Aguardando Envelopamento". Deseja continuar?', $atividade->servico->nome_servico)]) ?>
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
                        <?= $this->Form->postLink(__('Desfazer'), ['controller' => 'Triagem', 'action' => 'voltarEtapa', $triagem->atividade_id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para "Aguardando Triagem". Deseja continuar?', $atividade->servico->nome_servico)]) ?>
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
                    <?php if ($atividade->expedicao[0]->capas) : ?>
                        <th>Capas</th>
                        <th>Solicitante</th>
                        <th>Responsável Remessa</th>
                    <?php endif; ?>
                    <th>Responsável Coleta</th>
                    <th>Hora</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
                <?php foreach ($atividade->expedicao as $expedicao) : ?>
                    <tr>
                        <td><?= h($expedicao->funcionario) ?></td>
                        <td><?= h($expedicao->data_lancamento) ?></td>
                        <?php if ($expedicao->capas) : ?>
                            <td><?= h($expedicao->capas) ?></td>
                            <td><?= h($expedicao->solicitante) ?></td>
                            <td><?= h($expedicao->responsavel_remessa) ?></td>
                        <?php endif; ?>
                        <td><?= h($expedicao->responsavel_coleta) ?></td>
                        <td><?= h($expedicao->hora) ?></td>
                        <td><?= h($expedicao->status_atividade->status_atual) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['controller' => 'Expedicao', 'action' => 'edit', $expedicao->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Form->postLink(__('Desfazer'), ['controller' => 'Expedicao', 'action' => 'voltarEtapa', $expedicao->atividade_id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Esta ação somente fará com que o serviço: {0} volte para "Aguardando Expedição/Liberação". Deseja continuar?', $atividade->servico->nome_servico)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
<?php endif; ?>

<div class="d-flex flex-column mt-5 mb-3">
    <p class="text-center">Caso tenha ocorrido algum problema com o serviço, clique no botão abaixo:</p>
    <?= $this->Form->button('Reportar Erro', ['type' => 'button',  'class' => 'btn btn-secondary mb-4 mx-auto', 'data-bs-toggle' => 'modal', 'data-bs-target' => '#erroModal']) ?>
</div>
<div class="modal fade" id="erroModal" tabindex="-1" aria-labelledby="erroModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-4" id="erroModalLabel">REPORTAR ERRO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?= $this->Form->create(null, ['url' => ['controller' => 'ServicosAnulados', 'action' => 'add'], 'class' => 'p-4']) ?>
                <div class="row g-4">
                    <div class="col-6">
                        <label class="form-label">Etapa do erro</label>
                        <?= $this->Form->control('etapa', ['options' => $etapas, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Tipo do erro</label>
                        <?= $this->Form->control('status_atividade_id', ['options' => $erros, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Descrição</label>
                        <?= $this->Form->textarea('observacao', ['class' => 'form-control', 'placeholder' => 'Descreva brevemente o problema ocorrido...', 'rows' => '3', 'required', 'label' => false]) ?>
                    </div>
                </div>
                <input type="hidden" name="atividade_id" value="<?= $atividade->id ?>">
                <input type="hidden" name="status_anterior" value="<?= $atividade->status_atividade_id ?>">
                <div class="mt-5">
                    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>