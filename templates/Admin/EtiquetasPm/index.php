<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'etiquetas'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h3 class="text-center text-gpqr">Etiquetas PMMG</h3>
<br>
<?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
<div class="table-responsive table-gpqr" style="margin-top: 1%;">
    <table class="table table-borderless table-striped text-center align-middle">
        <thead>
            <tr>
                <th>Sistema</th>
                <th>Concurso</th>
                <th>Data</th>
                <th>Total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etiquetasPm as $etiquetasPm): ?>
            <tr>
                <td><?= h($etiquetasPm->descricao) ?></td>
                <td><?= h($etiquetasPm->concurso) ?></td>
                <td><?= h($etiquetasPm->data) ?></td>
                <td><?= $etiquetasPm->total === null ? '' : $this->Number->format($etiquetasPm->total) ?></td>
                <td>                    
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $etiquetasPm->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                    <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $etiquetasPm->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Deseja realmente excluir o serviço ETIQUETAS PM: {0}?', $etiquetasPm->id)]) ?>
                    <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $etiquetasPm->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->element('pagination') ?>
</div>