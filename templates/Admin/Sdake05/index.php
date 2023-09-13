<h2 class="text-center text-gpqr mt-2 mb-4">SDAKE05</h2>
<div class="sdake05 index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    <div class="table-responsive table-gpqr" style="margin-top:1%;">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>N° Páginas</th>
                    <th>Job</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sdake05 as $sdake05): ?>
                <tr>
                    <td>SDAKE05</td>
                    <td><?= $this->Number->format($sdake05->paginas) ?></td>
                    <td><?= h($sdake05->job) ?></td>
                    <td><?= h($sdake05->data_cadastro) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $sdake05->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $sdake05->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Deseja realmente excluir o serviço SDAKE05: {0}?', $sdake05->id)]) ?>
                        <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $sdake05->id],['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('pagination') ?>
</div>
