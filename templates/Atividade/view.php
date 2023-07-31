<div class="conteudo view">
    <h3 class="text-center text-primary-emphasis mt-2 mb-4"><?= h($atividade->servico->nome_servico) ?></h3>
    <table class="table table-borderless table-striped mb-4">
        <tr>
            <th><?= __('Data de cadastro:') ?></th>
            <td><?= h($atividade->data_cadastro) ?></td>
        </tr>
        <tr>
            <th><?= __('Responsável:') ?></th>
            <td><?= h($atividade->funcionario) ?></td>
        </tr>
        <tr>
            <th><?= __('Remessa/OCR:') ?></th>
            <td><?= h($atividade->remessa_atividade) ?></td>
        </tr>
        <tr>
            <th><?= __('Job:') ?></th>
            <td><?= h($atividade->job) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantidade de documentos:') ?></th>
            <td><?= $this->Number->format($atividade->quantidade_documentos) ?></td>
        </tr>
        <tr>
            <th><?= __('Data de postagem:') ?></th>
            <td><?= h($atividade->data_postagem) ?></td>
        </tr>
        <tr>
            <th><?= __('Recibo(s) de postagem:') ?></th>
            <td><?= h($atividade->recibo_postagem) ?></td>
        </tr>
        <tr>
            <th><?= __('Status atual:') ?></th>
            <td><?= h($atividade->status_atividade->status_atual) ?></td>
        </tr>
        <tr>
            <th><?= __('Folhas de rosto:') ?></th>
            <td><?= $this->Number->format($atividade->servico->folha_rosto) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantidade de folhas:') ?></th>
            <td><?= $this->Number->format($atividade->quantidade_folhas) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantidade de paginas:') ?></th>
            <td><?= $this->Number->format($atividade->quantidade_paginas) ?></td>
        </tr>
        <tr>
            <th><?= __('Cadastro Atividade:') ?></th>
            <td><?= h($atividade->data_atividade) ?></td>
        </tr>
    </table>
</div>

<?php if (!empty($atividade->envelopamento)) : ?>
    <h4><?= __('Related Envelopamento') ?></h4>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Funcionario') ?></th>
                <th><?= __('Data Envelopamento') ?></th>
                <th><?= __('Atividade Id') ?></th>
                <th><?= __('Servico Id') ?></th>
                <th><?= __('Status Atividade Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($atividade->envelopamento as $envelopamento) : ?>
                <tr>
                    <td><?= h($envelopamento->id) ?></td>
                    <td><?= h($envelopamento->funcionario) ?></td>
                    <td><?= h($envelopamento->data_envelopamento) ?></td>
                    <td><?= h($envelopamento->atividade_id) ?></td>
                    <td><?= h($envelopamento->servico_id) ?></td>
                    <td><?= h($envelopamento->status_atividade_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Envelopamento', 'action' => 'view', $envelopamento->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Envelopamento', 'action' => 'edit', $envelopamento->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Envelopamento', 'action' => 'delete', $envelopamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $envelopamento->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php endif; ?>

<?php if (!empty($atividade->expedicao)) : ?>
    <h4><?= __('Related Expedicao') ?></h4>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Funcionario') ?></th>
                <th><?= __('Data Lancamento') ?></th>
                <th><?= __('Data Expedicao') ?></th>
                <th><?= __('Capas') ?></th>
                <th><?= __('Ocorrencia') ?></th>
                <th><?= __('Solicitante') ?></th>
                <th><?= __('Responsavel Remessa') ?></th>
                <th><?= __('Responsavel Expedicao') ?></th>
                <th><?= __('Responsavel Coleta') ?></th>
                <th><?= __('Observacao') ?></th>
                <th><?= __('Hora') ?></th>
                <th><?= __('Atividade Id') ?></th>
                <th><?= __('Servico Id') ?></th>
                <th><?= __('Status Atividade Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($atividade->expedicao as $expedicao) : ?>
                <tr>
                    <td><?= h($expedicao->id) ?></td>
                    <td><?= h($expedicao->funcionario) ?></td>
                    <td><?= h($expedicao->data_lancamento) ?></td>
                    <td><?= h($expedicao->data_expedicao) ?></td>
                    <td><?= h($expedicao->capas) ?></td>
                    <td><?= h($expedicao->ocorrencia) ?></td>
                    <td><?= h($expedicao->solicitante) ?></td>
                    <td><?= h($expedicao->responsavel_remessa) ?></td>
                    <td><?= h($expedicao->responsavel_expedicao) ?></td>
                    <td><?= h($expedicao->responsavel_coleta) ?></td>
                    <td><?= h($expedicao->observacao) ?></td>
                    <td><?= h($expedicao->hora) ?></td>
                    <td><?= h($expedicao->atividade_id) ?></td>
                    <td><?= h($expedicao->servico_id) ?></td>
                    <td><?= h($expedicao->status_atividade_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Expedicao', 'action' => 'view', $expedicao->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Expedicao', 'action' => 'edit', $expedicao->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Expedicao', 'action' => 'delete', $expedicao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expedicao->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php endif; ?>

<?php if (!empty($atividade->impressao)) : ?>
    <h4><?= __('Related Impressao') ?></h4>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Funcionario') ?></th>
                <th><?= __('Data Impressao') ?></th>
                <th><?= __('Atividade Id') ?></th>
                <th><?= __('Servico Id') ?></th>
                <th><?= __('Status Atividade Id') ?></th>
                <th><?= __('Impressora Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($atividade->impressao as $impressao) : ?>
                <tr>
                    <td><?= h($impressao->id) ?></td>
                    <td><?= h($impressao->funcionario) ?></td>
                    <td><?= h($impressao->data_impressao) ?></td>
                    <td><?= h($impressao->atividade_id) ?></td>
                    <td><?= h($impressao->servico_id) ?></td>
                    <td><?= h($impressao->status_atividade_id) ?></td>
                    <td><?= h($impressao->impressora_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Impressao', 'action' => 'view', $impressao->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Impressao', 'action' => 'edit', $impressao->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Impressao', 'action' => 'delete', $impressao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $impressao->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php endif; ?>

<?php if (!empty($atividade->triagem)) : ?>
    <h4><?= __('Related Triagem') ?></h4>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Funcionario') ?></th>
                <th><?= __('Data Triagem') ?></th>
                <th><?= __('Atividade Id') ?></th>
                <th><?= __('Servico Id') ?></th>
                <th><?= __('Status Atividade Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($atividade->triagem as $triagem) : ?>
                <tr>
                    <td><?= h($triagem->id) ?></td>
                    <td><?= h($triagem->funcionario) ?></td>
                    <td><?= h($triagem->data_triagem) ?></td>
                    <td><?= h($triagem->atividade_id) ?></td>
                    <td><?= h($triagem->servico_id) ?></td>
                    <td><?= h($triagem->status_atividade_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Triagem', 'action' => 'view', $triagem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Triagem', 'action' => 'edit', $triagem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Triagem', 'action' => 'delete', $triagem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $triagem->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php endif; ?>