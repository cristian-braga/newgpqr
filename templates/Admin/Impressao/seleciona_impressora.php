<h3 class="text-center mt-2 mb-4">CONFIRMAR IMPRESSÃO</h3>
<?= $this->Form->create(null, ['url' => ['controller' => 'Impressao', 'action' => 'atualizaImpressao'], 'class' => 'mx-auto', 'style' => 'width: 80%']) ?>
    <div class="table-responsive table-gpqr mb-4">
        <table class="table table-borderless table-hover table-striped text-center">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Postagem</th>
                    <th>Remessa/OCR</th>
                    <th>Quantidade de documentos</th>
                    <th>Recibo(s)</th>
                    <th>Selecione a impressora:</th>
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
                            <?= $this->Form->control('impressora[]', ['options' => $impressora, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
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