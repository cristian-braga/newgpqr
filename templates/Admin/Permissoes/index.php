<h2 class="text-center text-gpqr mt-2 mb-4">PERMISSÕES</h2>
<div class="d-flex">
    <?= $this->Form->button('Conceder Permissão', ['type' => 'button',  'class' => 'btn btn-secondary mb-4 mx-auto', 'data-bs-toggle' => 'modal', 'data-bs-target' => '#addModal']) ?>
</div>
<h4 class="text-center text-gpqr mt-4 mb-4">NÍVEL ADMINISTRADOR</h4>
<div class="table-responsive table-gpqr mx-auto" style="width: 55%;">
    <table class="table table-borderless table-striped text-center align-middle">
        <thead>
            <tr>
                <th></th>
                <th>Funcionário</th>
                <th>Matrícula</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($queryAdmins as $admin) : ?>
                <?php $foto = 'http://intranet3.prodemge.gov.br/images/contatos/' . substr($admin->matricula, 1, 3) . '/' . substr($admin->matricula, 1, 6) . '.jpg'; ?>
                <tr>
                    <td><img style="border-radius: 5px; width: 50px; height: 60px;" src="<?= $foto ?>"></td>
                    <td><?= h($admin->funcionario) ?></td>
                    <td><?= h($admin->matricula) ?></td>
                    <td>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $admin->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir a permissão para o funcionário:  {0}?', $admin->funcionario)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<h4 class="text-center text-gpqr mt-5 mb-4">NÍVEL FUNCIONÁRIO</h4>
<div class="table-responsive table-gpqr mx-auto mb-5" style="width: 55%;">
    <table class="table table-borderless table-striped text-center align-middle">
        <thead>
            <tr>
                <th></th>
                <th>Funcionário</th>
                <th>Matrícula</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($queryFuncionarios as $funcionario) : ?>
                <?php $foto = 'http://intranet3.prodemge.gov.br/images/contatos/' . substr($funcionario->matricula, 1, 3) . '/' . substr($funcionario->matricula, 1, 6) . '.jpg'; ?>
                <tr>
                    <td><img style="border-radius: 5px; width: 50px; height: 60px;" src="<?= $foto ?>"></td>
                    <td><?= h($funcionario->funcionario) ?></td>
                    <td><?= h($funcionario->matricula) ?></td>
                    <td>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $funcionario->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Realmente deseja excluir a permissão para o funcionário:  {0}?', $funcionario->funcionario)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-4" id="addModalLabel">CADASTRAR</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?= $this->Form->create(null, ['url' => ['action' => 'add'], 'class' => 'p-4']) ?>
                <div class="row g-4">
                    <div class="col-12">
                        <label class="form-label">Matrícula</label>
                        <?= $this->Form->control('matricula', ['class' => 'form-control', 'placeholder' => 'Digite a matrícula com o "p"', 'required', 'label' => false]) ?>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Funcionário</label>
                        <?= $this->Form->control('funcionario', ['class' => 'form-control', 'placeholder' => 'Digite o primeiro nome do funcionário', 'required', 'label' => false]) ?>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Permissão</label>
                        <?= $this->Form->control('permissao', ['options' => $opcoes, 'class' => 'form-select', 'empty' => '-- Selecione --', 'required', 'label' => false]) ?>
                    </div>
                </div>
                <div class="mt-5">
                    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>