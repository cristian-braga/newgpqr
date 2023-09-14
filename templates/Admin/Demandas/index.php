<div class="demandas index content">
    <h2 class="text-center text-gpqr mt-2 mb-4">DEMANDAS</h2>
    <?= $this->Html->link(__('Cadastrar Demanda'), ['action' => 'add'], ['class' => 'btn btn-secondary float-end mb-4 me-2']) ?>


    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-hover table-striped text-center mt-3">
            <thead>
                <tr>
                    <!-- gera ordenação dos resultados da tabela (no padrão cakePHP) -->
                    <th><?= __('Demanda') ?></th>
                    <th><?= $this->Paginator->sort('demanda_tipo', ['label' => 'Tipo']) ?></th>
                    <th><?= $this->Paginator->sort('data_abertura', ['label' => 'Data abertura']); ?></th>
                    <th><?= $this->Paginator->sort('data_termino', ['label' => 'Data Término']) ?></th>
                    <th><?= $this->Paginator->sort('demanda_prioridade', ['label' => 'Prioridade']) ?></th>
                    <th><?= $this->Paginator->sort('status', ['label' => 'Status']) ?></th>
                    <th><?= __('Responsável') ?></th>
                    <th><?= __('Solicitante') ?> </th>
                    <th><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <!-- inicialização do loop foreach para percorrer cada elemento registrado na tabela Demandas -->
                <?php foreach ($demandas as $demanda): ?>
                <tr>
                    <td><?= $this->Html->link(__('Detalhes'), ['action' => 'view', $demanda->id], ['class' => 'btn btn-outline-secondary btn-sm btn-shadow']) ?>
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
                    <td class="">
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
