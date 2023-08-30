<h2 class="text-center text-gpqr mt-2 mb-4">Sdake75</h2>
<div class="sdake75 index content">
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    <div class="table-responsive">
    <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>Serviço</th> 
                    <th>Páginas</th>
                    <th>JOB</th>
                    <th>Data</th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sdake75 as $sdake75): ?>
                    <tr>
                        <td>SDAKE75</td>
                        <td><?= $this->Number->format($sdake75->paginas) ?></td>
                        <td><?= h($sdake75->job) ?></td>
                        <td><?= h($sdake75->data) ?></td>
                        <td>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $sdake75->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $sdake75->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow'], ['confirm' => __('Are you sure you want to delete # {0}?', $sdake75->id)]) ?>
                            <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $sdake75->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('pagination') ?>
</div>
