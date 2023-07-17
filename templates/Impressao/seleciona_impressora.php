<div class="content">
    <?= $this->Form->create(null, ['url' => ['controller' => 'Impressao', 'action' => 'atualizaImpressao']]) ?>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Impressora:</th>
                        <th>Serviço</th>
                        <th><?= $this->Paginator->sort('job') ?></th>
                        <th><?= $this->Paginator->sort('data_atividade') ?></th>
                        <th><?= $this->Paginator->sort('data_postagem') ?></th>
                        <th><?= $this->Paginator->sort('data_cadastro') ?></th>
                        <th><?= $this->Paginator->sort('funcionario') ?></th>
                        <th><?= $this->Paginator->sort('remessa_atividade') ?></th>
                        <th><?= $this->Paginator->sort('quantidade_documentos') ?></th>
                        <th><?= $this->Paginator->sort('quantidade_folhas') ?></th>
                        <th><?= $this->Paginator->sort('quantidade_paginas') ?></th>
                        <th><?= $this->Paginator->sort('recibo_postagem') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($servicos as $servico): ?>
                    <tr>
                        <td>
                            <select name="impressora[]">
                                <option value="" hidden selected disabled>-- Selecione --</option>
                                <option value="1">Nuvera 1 - Z8PB</option>
                                <option value="2">Nuvera 2 - Z7PK</option>
                                <option value="3">Impressora Matricial</option>
                            </select>
                            <input type="hidden" name="servico_id[]" value="<?= $servico->id ?>">
                        </td>
                        <td><?= h($servico->servico->nome_servico) ?></td>
                        <td><?= h($servico->atividade->job) ?></td>
                        <td><?= h($servico->atividade->data_atividade) ?></td>
                        <td><?= h($servico->atividade->data_postagem) ?></td>
                        <td><?= h($servico->atividade->data_cadastro) ?></td>
                        <td><?= h($servico->funcionario) ?></td>
                        <td><?= h($servico->atividade->remessa_atividade) ?></td>
                        <td><?= $this->Number->format($servico->atividade->quantidade_documentos) ?></td>
                        <td><?= $this->Number->format($servico->atividade->quantidade_folhas) ?></td>
                        <td><?= $this->Number->format($servico->atividade->quantidade_paginas) ?></td>
                        <td><?= h($servico->atividade->recibo_postagem) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?= $this->Form->button('Enviar') ?>
    <?= $this->Form->end() ?>
</div>