<div class="conteudo" style="width: 65%;">
    <h3 class="text-center text-primary-emphasis mt-2 mb-4"><?= h($servicoAnulado->atividade->servico->nome_servico) ?></h3>
    <table class="table table-borderless table-striped mb-4 align-middle">
        <tr>
            <th>Data de cadastro:</th>
            <td><?= h($servicoAnulado->data_cadastro) ?></td>
        </tr>
        <tr>
            <th>Responsável:</th>
            <td><?= h($servicoAnulado->funcionario) ?></td>
        </tr>
        <tr>
            <th>Remessa/OCR:</th>
            <td><?= h($servicoAnulado->atividade->remessa_atividade) ?></td>
        </tr>
        <tr>
            <th>Job:</th>
            <td><?= h($servicoAnulado->atividade->job) ?></td>
        </tr>
        <tr>
            <th>Quantidade de documentos:</th>
            <td><?= $this->Number->format($servicoAnulado->atividade->quantidade_documentos) ?></td>
        </tr>
        <tr>
            <th>Data de postagem:</th>
            <td><?= h($servicoAnulado->atividade->data_postagem) ?></td>
        </tr>
        <tr>
            <th>Status atual:</th>
            <td class="text-danger"><b><?= h($servicoAnulado->status_atividade->status_atual) ?></b></td>
        </tr>
        <tr>
            <th>Etapa do erro:</th>
            <td><?= h($servicoAnulado->etapa) ?></td>
        </tr>
        <tr>
            <th colspan="2">Descrição do erro:</th>
        </tr>
        <tr>
            <td colspan="2"><?= h($servicoAnulado->observacao) ?></td>
        </tr>
    </table>
    <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-secondary btn-shadow']) ?>
</div>