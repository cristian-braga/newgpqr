<div class="content">
    <?= $this->Form->create(null, ['url' => ['controller' => 'Atividade', 'action' => 'atualizaAtividade']]) ?>
        <table>
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th><?= $this->Paginator->sort('data_postagem') ?></th>
                    <th><?= $this->Paginator->sort('Remessa/OCR') ?></th>
                    <th><?= $this->Paginator->sort('quantidade_documentos') ?></th>
                    <th><?= $this->Paginator->sort('recibo_postagem') ?></th>
                    <th>Será impresso?</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($servicos as $servico): ?>
                <tr>
                    <td><?= h($servico->servico->nome_servico) ?></td>
                    <td><?= h($servico->data_postagem) ?></td>
                    <td><?= h($servico->remessa_atividade) ?></td>
                    <td><?= $this->Number->format($servico->quantidade_documentos) ?></td>
                    <td><?= h($servico->recibo_postagem) ?></td>
                    <td>
                        <select name="impresso[]">
                            <option value="1" selected>Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <input type="hidden" name="servico_id[]" value="<?= $servico->id ?>">
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $this->Form->button('Enviar') ?>
    <?= $this->Form->end() ?>
</div>