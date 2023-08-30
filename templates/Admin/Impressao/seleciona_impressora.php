<h3 class="text-center mt-2 mb-4">CONFIRMAR IMPRESSÃO</h3>
<?= $this->Form->create(null, ['url' => ['controller' => 'Impressao', 'action' => 'add'], 'class' => 'mx-auto', 'style' => 'width: 80%']) ?>
    <div class="table-responsive table-gpqr mb-4">
        <table class="table table-borderless table-striped text-center align-middle">
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
            <tbody>
                <?php foreach ($servicos as $servico) : ?>
                    <tr>
                        <td><?= h($servico->servico->nome_servico) ?></td>
                        <td><?= h($servico->data_postagem) ?></td>
                        <td><?= h($servico->remessa_atividade) ?></td>
                        <td><?= $this->Number->format($servico->quantidade_documentos) ?></td>
                        <td><?= h($servico->recibo_postagem) ?></td>
                        <td>
                            <?= $this->Form->control('impressora[]', ['options' => $impressoras, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
                            <input type="hidden" name="servico_id[]" value="<?= $servico->id ?>">
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary mb-4']) ?>
    <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary mb-4']) ?>
<?= $this->Form->end() ?>