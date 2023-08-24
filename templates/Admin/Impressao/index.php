<h2 class="text-center text-gpqr mt-2 mb-4">IMPRESSÃO</h2>
<?= $this->Html->link(__('Serviços Impressos'), ['action' => 'servicosImpressos'], ['class' => 'btn btn-secondary float-end mb-4']) ?>
<?= $this->Form->create(null, ['url' => ['controller' => 'Impressao', 'action' => 'selecionaImpressora']]) ?>
    <?= $this->Form->button('Lançar', ['id' => 'submit', 'class' => 'btn btn-dark btn-lancar', 'style' => 'visibility: hidden;']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th></th>
                    <th><?= $this->Paginator->sort('servico_id', ['label' => 'Serviço']) ?></th>
                    <th><?= $this->Paginator->sort('data_cadastro', ['label' => 'Cadastro']) ?></th>
                    <th>Remessa/OCR</th>
                    <th>Job</th>
                    <th>Documentos</th>
                    <th><?= $this->Paginator->sort('data_postagem', ['label' => 'Postagem']) ?></th>
                    <th>Recibos</th>
                    <th>Etapa</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!$atividade->isEmpty()) : ?>
                    <?php foreach ($atividade as $atividade) : ?>
                        <tr>
                            <td><input type="checkbox" name="selecionados[]" value="<?= $atividade->id ?>" class="btn-shadow"></td>
                            <td><?= $this->Html->link($atividade->servico->nome_servico, ['controller' => 'Atividade', 'action' => 'view', $atividade->id], ['class' => 'custom-btn btn-gpqr-view']) ?></td>
                            <td><?= h($atividade->data_cadastro) ?></td>
                            <td><?= h($atividade->remessa_atividade) ?></td>
                            <td><?= h($atividade->job) ?></td>
                            <td><?= $this->Number->format($atividade->quantidade_documentos) ?></td>
                            <td><?= h($atividade->data_postagem) ?></td>
                            <td><?= h($atividade->recibo_postagem) ?></td>
                            <td class="bg-warning-subtle"><b><?= h($atividade->status_atividade->status_atual) ?></b></td>
                            <td>
                                <?= $this->Html->link(__('Editar'), ['action' => 'editAtividade', $atividade->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                                <?= $this->Html->link(__('Excluir'), ['controller' => 'Atividade', 'action' => 'delete', $atividade->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow','confirm' => __('ATENÇÃO! Essa ação apagará o registro em TODAS as etapas e não poderá ser desfeita! Realmente deseja excluir o serviço:  {0}?', $atividade->servico->nome_servico)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <td colspan="10">Ainda não existem lançamentos</td>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?= $this->Form->end() ?>
<?= $this->element('pagination') ?>
<h4 class="text-center text-gpqr mt-5 mb-4">BALANÇO MENSAL DE IMPRESSÕES</h4>
<div class="table-responsive table-gpqr mx-auto" style="width: 50%;">
    <table class="table table-borderless text-center">
        <thead>
            <tr>
                <th class="bg-body-secondary"><?= $nuv_1['nome'] ?></th>
                <th class="bg-body-secondary"><?= $nuv_2['nome'] ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="p-3"><?= $this->Number->format($nuv_1['total_mes']) ?></td>
                <td class="p-3"><?= $this->Number->format($nuv_2['total_mes']) ?></td>
            </tr>
            <?php
                if ($nuv_1['participacao'] == $nuv_2['participacao']) {
                    $classe_1 = $classe_2 = "bg-success-subtle";
                    $texto = "A quantidade de impressões está equilibrada";
                } elseif ($nuv_1['participacao'] > $nuv_2['participacao']) {
                    $classe_1 = "bg-success-subtle";
                    $classe_2 = "bg-danger-subtle";
                    $texto = "Imprima serviços na <b>" . $nuv_2['nome'] . "</b> para equilibrar a quantidade de impressões";
                } else {
                    $classe_1 = "bg-danger-subtle";
                    $classe_2 = "bg-success-subtle";
                    $texto = "Imprima serviços na <b>" . $nuv_1['nome'] . "</b> para equilibrar a quantidade de impressões";
                }
            ?>
            <tr>
                <td class="<?= $classe_1 ?>"><b><?= $nuv_1['participacao'] ?>%</b></td>
                <td class="<?= $classe_2 ?>"><b><?= $nuv_2['participacao'] ?>%</b></td>
            </tr>
            <tr>
                <td colspan="2">
                    <h6 class="pt-3"><?= $texto ?></h6>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h4 class="text-center text-gpqr mt-5 mb-4">RANKING MENSAL DE IMPRESSÕES</h4>
<div class="table-responsive table-gpqr mx-auto mb-5" style="width: 35%;">
    <table class="table table-borderless table-hover text-center align-middle">
        <thead>
            <tr>
                <th class="bg-body-secondary">Posição</th>
                <th class="bg-body-secondary">Funcionário</th>
                <th class="bg-body-secondary">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($ranking_mensal)) : ?>
                <?php foreach ($ranking_mensal as $posicao => $funcionario) : ?>
                    <tr>
                        <th><?= $posicao + 1 ?>°</th>
                        <td><?= $funcionario->nome ?></td>
                        <td><?= $this->Number->format($funcionario->total_documentos) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <td colspan="3">Ainda não existem lançamentos</td>
            <?php endif; ?>
        </tbody>
    </table>
</div>