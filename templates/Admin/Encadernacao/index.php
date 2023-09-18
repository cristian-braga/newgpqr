    <h3 class="text-center text-gpqr">ENCADERNAÇÃO</h3>
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary float-start mb-4']) ?>
    <div class="table-responsive table-gpqr">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Páginas</th>
                    <th>Ocorrência</th>
                    <th>Cópias</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($encadernacao as $encadernacao): ?>
                <tr>
                    <td><?= h($encadernacao->descricao) ?></td>
                    <td><?= $this->Number->format($encadernacao->paginas) ?></td>
                    <td><?= h($encadernacao->ocorrencia) ?></td>
                    <td><?= $encadernacao->copias === null ? '' : $this->Number->format($encadernacao->copias) ?></td>
                    <td><?= h($encadernacao->data_cadastro) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $encadernacao->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $encadernacao->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Deseja realmente excluir o serviço ENCADERNAÇÃO: {0}?', $encadernacao->id)]) ?>
                        <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $encadernacao->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->element('pagination') ?>