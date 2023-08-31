<h2 class="text-center text-gpqr mt-2 mb-4">Digitalização</h2>

<div class="conteudo mt-5">
    <?= $this->Form->create(null, ['type' => 'get']) ?>
        <div class="row g-3">
            <div class="col-md-2">
                <label class="form-label">Serviço:</label>
                <?= $this->Form->control('servico', ['options' => $servicos, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
            </div>
            <div class="col-md-2" style="margin-top: 3.2rem;">
                <?= $this->Form->button(__('Buscar'), ['class' => 'btn btn-outline-dark btn-sm btn-shadow']) ?>
                <?= $this->Html->link(__('Limpar'), ['action' => 'index'], ['class' => 'btn btn-outline-dark btn-sm btn-shadow']) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>

<div class="digitalizacao index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary float-end mb-4']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('servico_id', ['label' => 'Serviços']) ?></th>

                    <th><?= $this->Paginator->sort('quantidade_documentos') ?></th>
                    <th><?= $this->Paginator->sort('periodo') ?></th>
                    <th><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($servicosExist as $dtg) : ?>
                <tr>
                    <td><?= $this->Html->link($dtg->servico->nome_servico, ['action' => 'view', $dtg->id], ['class' => 'custom-btn btn-gpqr-view']) ?>
                    </td>
                    <td><?= $this->Number->format($dtg->quantidade_documentos) ?></td>
                    <td><?= h($dtg->periodo) ?></td>
                    <td>
                        <!-- <?= $this->Html->link(__('<i class="fa-regular fa-pen-to-square fa-lg" style="color: #ffc107"></i>' . __('')), ['action' => 'edit', $dtg->id], ['escape' => false, 'class' => 'p-2']); ?>
                        <?= $this->Form->postLink(__('<i class="fa-regular fa-trash-can fa-lg" style="color: #dc3545;"></i>' . __('')), ['action' => 'delete', $dtg->id], ['escape' => false, 'class' => 'p-2'], ['confirm' => __('Tem certeza que quer deletar essa Digitalizacao # {0}?', $dtg->id)]) ?> -->
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $dtg->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $dtg->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow ', 'confirm' => __('Realmente deseja excluir o serviço:  {0}?', $dtg->servico->nome_servico)]) ?>

                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('pagination') ?>
