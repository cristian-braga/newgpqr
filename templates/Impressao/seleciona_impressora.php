<h3 class="text-center mt-2 mb-4">CONFIRMAR IMPRESSÃO</h3>
<?= $this->Form->create(null, ['url' => ['controller' => 'Impressao', 'action' => 'atualizaImpressao']]) ?>
    <div class="table-responsive table-gpqr mb-4">
        <table class="table table-borderless table-hover table-striped text-center">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Postagem</th>
                    <th>Remessa/OCR</th>
                    <th>Quantidade de documentos</th>
                    <th>Recibo(s)</th>
                    <th>Impressora</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php foreach ($servicos as $servico) : ?>
                    <tr>
                        <td><?= h($servico->atividade->servico->nome_servico) ?></td>
                        <td><?= h($servico->atividade->data_postagem) ?></td>
                        <td><?= h($servico->atividade->remessa_atividade) ?></td>
                        <td><?= $this->Number->format($servico->atividade->quantidade_documentos) ?></td>
                        <td><?= h($servico->atividade->recibo_postagem) ?></td>
                        <td>
                            <select name="impressora[]" class="form-select" required>
                                <option value="" hidden selected disabled>-- Selecione --</option>
                                <option value="1">Nuvera 1 - Z8PB</option>
                                <option value="2">Nuvera 2 - Z7PK</option>
                                <option value="3">Impressora Matricial</option>
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