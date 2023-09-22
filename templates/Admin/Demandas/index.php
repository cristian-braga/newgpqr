<div class="demandas index content">
    <h2 class="text-center text-gpqr mt-2 mb-4">DEMANDAS</h2>
    <?= $this->Html->link(__('Cadastrar Demanda'), ['action' => 'add'], ['class' => 'btn btn-secondary float-end mb-4 me-2']) ?>

    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center mt-3">
            <thead>
                <tr>
                    <!-- gera ordenação dos resultados da tabela (no padrão cakePHP) -->
                    <th>Demanda</th>
                    <th>Tipo</th>
                    <th>Data Abertura</th>
                    <th>Data Término</th>
                    <th>Prioridade</th>
                    <th>Status</th>
                    <th>Responsável</th>
                    <th>Solicitante </th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <!-- inicialização do loop foreach para percorrer cada elemento registrado na tabela Demandas -->
                <?php foreach ($demandas as $demanda): ?>
                <tr>
    <td>                
    <?php if(isset($demanda['demanda_responsavel'])): ?>
    <?= $this->Form->postLink(__('Relatórios'), ['action' => 'relatorio', $demanda->id], ['class' => 'btn btn-outline-success']) ?>
    <?php else : ?>
        <?= $this->Form->postLink(__('Detalhes'), ['action' => 'view', $demanda->id], ['class' => 'btn btn-outline-secondary']) ?>
    <?php endif; ?>
    </td>
    <td><?= h($demanda->demanda_tipo) ?></td>
    <td><?= h($demanda->data_abertura) ?></td>
    <td><?= h($demanda->data_termino) ?> </td>
    <td><?= h($demanda->demanda_prioridade) ?></td>
    <td><?= h($demanda->status) ?></td>


                    <?php if(!$demanda['demanda_responsavel']) : ?>
                    <td> <?= $this->Form->postButton(__('Confirmar'), ['action' => 'confirmarDemanda', $demanda->id], ['class' => 'btn btn-primary'], ['confirm' => __('Tem certeza que deseja aceitar essa demanda {0}', $demanda->id)]); ?>
                    </td>
                    <?php elseif(isset($demanda['demanda_log']) && isset($demanda['demanda_responsavel'])) : ?>
                    <td><?= $this->Form->postButton(__('Dispensar'), ['action' => 'dispensarDemanda', $demanda->id], ['class' => 'btn btn-danger disabled'], ['confirm' => __('Tem certeza que deseja dispensar essa Demanda {0}?', $demanda->id)]); ?>
                    </td>
                    <?php else : ?>
                    <td> <?= $this->Form->postButton(__('Dispensar'), ['action' => 'dispensarDemanda', $demanda->id], ['class' => 'btn btn-danger'], ['confirm' => __('Tem certeza que deseja dispensar essa Demanda {0}?', $demanda->id)]); ?>
                    </td>
                    <?php endif; ?>


    <td>Pega quem ta logado</td>
    <td>
        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $demanda->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $demanda->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow ', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $demanda->id)]) ?>

    </td>

    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
</div>
<!-- Paginação do CakePHP, utilizado para gerar páginas caso, por exemplo, uma tabela seja extensa e a página tenha um limite -->
<?= $this->element('pagination') ?>
