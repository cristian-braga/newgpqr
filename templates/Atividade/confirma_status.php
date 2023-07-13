<div class="content">
    <?= $this->Form->create(null, ['url' => ['controller' => 'Atividade', 'action' => 'atualizaStatus']]) ?>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Será impresso?</th>
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
                            <select name="impresso[]">
                                <option value="1" selected>Sim</option>
                                <option value="0">Não</option>
                            </select>
                            <input type="hidden" name="servico_id[]" value="<?= $servico->id ?>">
                        </td>
                        <td><?= h($servico->servico->nome_servico) ?></td>
                        <td><?= h($servico->job) ?></td>
                        <td><?= h($servico->data_atividade) ?></td>
                        <td><?= h($servico->data_postagem) ?></td>
                        <td><?= h($servico->data_cadastro) ?></td>
                        <td><?= h($servico->funcionario) ?></td>
                        <td><?= h($servico->remessa_atividade) ?></td>
                        <td><?= $this->Number->format($servico->quantidade_documentos) ?></td>
                        <td><?= $this->Number->format($servico->quantidade_folhas) ?></td>
                        <td><?= $this->Number->format($servico->quantidade_paginas) ?></td>
                        <td><?= h($servico->recibo_postagem) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?= $this->Form->button('Enviar') ?>
    <?= $this->Form->end() ?>
</div>