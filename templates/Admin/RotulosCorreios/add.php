<h3>Cadastrar Rótulos - Correios</h4>
                <?= $this->Form->create($rotulosCorreios, ['id' => 'form', 'class' => 'mx-auto p-3 form']) ?>
                <div class="row">
                    <div class="col-md-2">
                        <label class="form-label">Serviço:</label>
                        <select name="servico" class="form-control">
                            <option value="" hidden selected disabled>Selecione...</option>
                            <?php foreach ($servicos as $servico) : ?>
                            <option value="<?= $servico['nome_servico'] ?>"><?= $servico['nome_servico'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Espécie:</label>
                        <?= $this->Form->select('especie', ['RM/LC' => 'RM/LC', 'LC' => 'LC', 'RM' => 'RM'], ['class' => 'form-select', 'required', 'label' => false]) ?>
                    </div>
                    <div class="mt-2">
                        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
                        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                    </div>
                </div>