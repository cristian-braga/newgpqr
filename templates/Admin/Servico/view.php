<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servico $servico
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Servico'), ['action' => 'edit', $servico->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Servico'), ['action' => 'delete', $servico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servico->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Servico'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Servico'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="servico view content">
            <h3><?= h($servico->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Servico') ?></th>
                    <td><?= h($servico->nome_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao Servico') ?></th>
                    <td><?= h($servico->descricao_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cliente Responsavel Servico') ?></th>
                    <td><?= h($servico->cliente_responsavel_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cliente Servico') ?></th>
                    <td><?= h($servico->cliente_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correios Servico') ?></th>
                    <td><?= h($servico->correios_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Impressa Servico') ?></th>
                    <td><?= h($servico->impressa_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Impressao Servico') ?></th>
                    <td><?= h($servico->tipo_impressao_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Preparo Servico') ?></th>
                    <td><?= h($servico->tipo_preparo_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Envelopamento Servico') ?></th>
                    <td><?= h($servico->envelopamento_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Separador Servico') ?></th>
                    <td><?= h($servico->separador_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Entrega Servico') ?></th>
                    <td><?= h($servico->entrega_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cod Sistema Servico') ?></th>
                    <td><?= h($servico->cod_sistema_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao Sistema Servico') ?></th>
                    <td><?= h($servico->descricao_sistema_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($servico->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Servico') ?></th>
                    <td><?= $servico->valor_servico === null ? '' : $this->Number->format($servico->valor_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Folha Rosto') ?></th>
                    <td><?= $servico->folha_rosto === null ? '' : $this->Number->format($servico->folha_rosto) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Atividade') ?></h4>
                <?php if (!empty($servico->atividade)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Job') ?></th>
                            <th><?= __('Data Atividade') ?></th>
                            <th><?= __('Data Postagem') ?></th>
                            <th><?= __('Data Cadastro') ?></th>
                            <th><?= __('Funcionario') ?></th>
                            <th><?= __('Remessa Atividade') ?></th>
                            <th><?= __('Quantidade Documentos') ?></th>
                            <th><?= __('Quantidade Folhas') ?></th>
                            <th><?= __('Quantidade Paginas') ?></th>
                            <th><?= __('Recibo Postagem') ?></th>
                            <th><?= __('Servico Id') ?></th>
                            <th><?= __('Status Atividade Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($servico->atividade as $atividade) : ?>
                        <tr>
                            <td><?= h($atividade->id) ?></td>
                            <td><?= h($atividade->job) ?></td>
                            <td><?= h($atividade->data_atividade) ?></td>
                            <td><?= h($atividade->data_postagem) ?></td>
                            <td><?= h($atividade->data_cadastro) ?></td>
                            <td><?= h($atividade->funcionario) ?></td>
                            <td><?= h($atividade->remessa_atividade) ?></td>
                            <td><?= h($atividade->quantidade_documentos) ?></td>
                            <td><?= h($atividade->quantidade_folhas) ?></td>
                            <td><?= h($atividade->quantidade_paginas) ?></td>
                            <td><?= h($atividade->recibo_postagem) ?></td>
                            <td><?= h($atividade->servico_id) ?></td>
                            <td><?= h($atividade->status_atividade_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Atividade', 'action' => 'view', $atividade->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Atividade', 'action' => 'edit', $atividade->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Atividade', 'action' => 'delete', $atividade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atividade->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Digitalizacao') ?></h4>
                <?php if (!empty($servico->digitalizacao)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Servico Id') ?></th>
                            <th><?= __('Status Digitalizacao Id') ?></th>
                            <th><?= __('Quantidade Documentos') ?></th>
                            <th><?= __('Funcionario') ?></th>
                            <th><?= __('Data Digitalizacao') ?></th>
                            <th><?= __('Periodo') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($servico->digitalizacao as $digitalizacao) : ?>
                        <tr>
                            <td><?= h($digitalizacao->id) ?></td>
                            <td><?= h($digitalizacao->servico_id) ?></td>
                            <td><?= h($digitalizacao->status_digitalizacao_id) ?></td>
                            <td><?= h($digitalizacao->quantidade_documentos) ?></td>
                            <td><?= h($digitalizacao->funcionario) ?></td>
                            <td><?= h($digitalizacao->data_digitalizacao) ?></td>
                            <td><?= h($digitalizacao->periodo) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Digitalizacao', 'action' => 'view', $digitalizacao->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Digitalizacao', 'action' => 'edit', $digitalizacao->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Digitalizacao', 'action' => 'delete', $digitalizacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $digitalizacao->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Envelopamento') ?></h4>
                <?php if (!empty($servico->envelopamento)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario') ?></th>
                            <th><?= __('Data Envelopamento') ?></th>
                            <th><?= __('Atividade Id') ?></th>
                            <th><?= __('Servico Id') ?></th>
                            <th><?= __('Status Atividade Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($servico->envelopamento as $envelopamento) : ?>
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
            </div>
            <div class="related">
                <h4><?= __('Related Expedicao') ?></h4>
                <?php if (!empty($servico->expedicao)) : ?>
                <div class="table-responsive">
                    <table>
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
                        <?php foreach ($servico->expedicao as $expedicao) : ?>
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
            </div>
            <div class="related">
                <h4><?= __('Related Impressao') ?></h4>
                <?php if (!empty($servico->impressao)) : ?>
                <div class="table-responsive">
                    <table>
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
                        <?php foreach ($servico->impressao as $impressao) : ?>
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
            </div>
            <div class="related">
                <h4><?= __('Related Triagem') ?></h4>
                <?php if (!empty($servico->triagem)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario') ?></th>
                            <th><?= __('Data Triagem') ?></th>
                            <th><?= __('Atividade Id') ?></th>
                            <th><?= __('Servico Id') ?></th>
                            <th><?= __('Status Atividade Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($servico->triagem as $triagem) : ?>
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
            </div>
        </div>
    </div>
</div>
