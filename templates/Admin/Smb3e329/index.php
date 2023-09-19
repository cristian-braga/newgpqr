<h3 class="text-center text-gpqr">SMB3E329</h3>
    <?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    <div class="table-responsive table-gpqr" style="margin-top: 1%;">
        <table class="table table-borderless table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Total</th>
                    <th>Job</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($smb3e329 as $smb3e329): ?>
                <tr>
                    <td>SMB3E329</td>
                    <td><?= $this->Number->format($smb3e329->total) ?></td>
                    <td><?= h($smb3e329->job) ?></td>
                    <td><?= h($smb3e329->data_cadastro) ?></td>
                    <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $smb3e329->id], ['class' => 'btn btn-outline-warning btn-sm btn-shadow']) ?>
                        <?= $this->Html->link(__('Excluir'), ['action' => 'delete', $smb3e329->id], ['class' => 'btn btn-outline-danger btn-sm btn-shadow', 'confirm' => __('Deseja realmente excluir o serviço SMB3E329: {0}?', $smb3e329->id)]) ?>
                        <?= $this->Html->link(__('PDF'), ['action' => 'pdf', $smb3e329->id], ['class' => 'btn btn-outline-primary btn-sm btn-shadow', 'target' => '_blank']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('pagination') ?>
    </div>