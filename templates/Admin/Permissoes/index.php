<h2 class="text-center text-gpqr mt-2 mb-4">PERMISSÕES</h2>
<?= $this->Form->button('Cadastrar', ['type' => 'button',  'class' => 'btn btn-secondary float-start mb-4', 'data-bs-toggle' => 'modal', 'data-bs-target' => '#addModal']) ?>
<div class="table-responsive table-gpqr">
    <table class="table table-borderless table-striped text-center">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('matricula') ?></th>
                <th><?= $this->Paginator->sort('permissao') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($permissoes as $permissao) : ?>
                <tr>
                    <td><?= h($permissao->matricula) ?></td>
                    <td><?= h($permissao->permissao) ?></td>
                    <td>
                        <?= $this->Html->link(__('View'), ['action' => 'view', $permissao->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $permissao->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $permissao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permissao->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-4" id="addModalLabel">CADASTRAR</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?= $this->Form->create(null, ['url' => ['action' => 'add'], 'class' => 'mx-auto p-3']) ?>
                <div class="row g-4">
                    <div class="col-12">
                        <label class="form-label">Matrícula</label>
                        <?= $this->Form->control('matricula', ['class' => 'form-control', 'placeholder' => 'Digite a matrícula com o "p"', 'label' => false]) ?>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Permissão</label>
                        <?= $this->Form->control('permissao', ['options' => $opcoes, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
                    </div>
                </div>
                <div class="mt-5 mb-4">
                    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>