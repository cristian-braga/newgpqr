<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Smafe08b'), ['action' => 'edit', $smafe08b->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Smafe08b'), ['action' => 'delete', $smafe08b->id], ['confirm' => __('Are you sure you want to delete # {0}?', $smafe08b->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Smafe08b'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Smafe08b'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="smafe08b view content">
            <h3><?= h($smafe08b->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Concurso') ?></th>
                    <td><?= h($smafe08b->concurso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Job') ?></th>
                    <td><?= h($smafe08b->job) ?></td>
                </tr>
                <tr>
                    <th><?= __('Referencia') ?></th>
                    <td><?= h($smafe08b->referencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= h($smafe08b->funcionario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($smafe08b->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copias') ?></th>
                    <td><?= $smafe08b->copias === null ? '' : $this->Number->format($smafe08b->copias) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paginas') ?></th>
                    <td><?= $smafe08b->paginas === null ? '' : $this->Number->format($smafe08b->paginas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $smafe08b->total === null ? '' : $this->Number->format($smafe08b->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data') ?></th>
                    <td><?= h($smafe08b->data) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
