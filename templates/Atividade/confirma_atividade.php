<h3 class="text-center mt-2 mb-4">CONFIRMAR ATIVIDADE</h3>
<?= $this->Form->create(null, ['url' => ['controller' => 'Atividade', 'action' => 'atualizaAtividade']]) ?>
    <div class="table-responsive table-gpqr mb-4">
        <table class="table table-borderless table-hover table-striped text-center">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Postagem</th>
                    <th>Remessa/OCR</th>
                    <th>Quantidade de documentos</th>
                    <th>Recibo(s)</th>
                    <th>Será impresso?</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php foreach ($servicos as $servico) : ?>
                    <tr>
                        <td><?= h($servico->servico->nome_servico) ?></td>
                        <td><?= h($servico->data_postagem) ?></td>
                        <td><?= h($servico->remessa_atividade) ?></td>
                        <td><?= $this->Number->format($servico->quantidade_documentos) ?></td>
                        <td><?= h($servico->recibo_postagem) ?></td>
                        <td>
                            <select name="impresso[]" class="form-select" required>
                                <option value="1" selected>Sim</option>
                                <option value="0">Não</option>
                            </select>
                            <input type="hidden" name="servico_id[]" value="<?= $servico->id ?>">
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
<?= $this->Form->end() ?>