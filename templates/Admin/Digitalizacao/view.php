
    <div class="conteudo" style="width: 45%;">
        <div class="digitalizacao view content">
            <h3 class="text-center text-primary-emphasis mt-2 mb-4"><?= h($digitalizacao->servico->nome_servico) ?></h3>
            <table class="table table-borderless table-striped mb-4 align-middle">
                <!-- <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= h($digitalizacao->funcionario) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Servico') ?></th>
                    <td><?= h($digitalizacao->servico->nome_servico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade Documentos') ?></th>
                    <td><?= $this->Number->format($digitalizacao->quantidade_documentos) ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Data Digitalizacao') ?></th>
                    <td><?= h($digitalizacao->data_digitalizacao) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Periodo') ?></th>
                    <td><?= h($digitalizacao->periodo) ?></td>
                </tr>
            </table>
        </div>
    </div>




     