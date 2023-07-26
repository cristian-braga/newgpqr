<div class="demandas index content">
    <?= $this->Html->link(__('Cadastrar Demanda'), ['action' => 'add'], ['class' => 'btn btn-gpqr-success float-end']) ?> <!-- padrão cakePHP de criar link -->
    <h2><?= __('Demandas') ?></h2>
    <div class="table-responsive table-gpqr mt-4 my-4">
        <table class="table table-borderless text-center mt-3">
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
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
        <tbody>
            <!-- inicialização do loop foreach para percorrer cada elemento registrado na tabela Demandas -->
            <?php foreach ($demandas as $demanda): ?>
                <tr>
                    <td>
                        <button type="button" class="btn btn-outline-secondary disabled" data-toggle="modal" data-target="#Modal-<?= h($demanda->id) ?>">
                            Detalhes
                        </button>
                         <?php if($demanda->demanda_responsavel): ?>
                        <!-- <?= $this->Form->postButton(__('Relatório'), ['action' => 'relatorio', $demanda->id], ['class' => 'btn btn-success']); ?> -->
                        <?php endif; ?>
                    </td>
                  
                    <!-- <td><?= h($demanda->demanda_resumo) ?> </td>
                    <td><?= h($demanda->demanda_descricao) ?></td> -->
                    <td><?= h($demanda->demanda_tipo) ?></td>
                    <td><?= h($demanda->data_abertura) ?></td>
                    <td><?= h($demanda->data_termino) ?> </td>
                    <td><?= h($demanda->demanda_prioridade) ?></td>
                    <td><?= h($demanda->status) ?></td>
                    <td><?= h($demanda->demanda_responsavel) ?>
                        <?php if(!$demanda->demanda_responsavel): ?>
                        <?= $this->Form->postButton(__('Confirmar'), ['action' => 'confirmarDemanda', $demanda->id], ['class' => 'btn btn-primary '], ['confirm' => __('Tem certeza que quer aceitar essa demanda?', $demanda->id)]) ?>
                        <?php endif; ?>
                         <?php if(isset($demanda['demanda_responsavel'])) : ?>  
                        <?= $this->Form->postButton(__('Dispensar'), ['action' => 'dispensarDemanda', $demanda->id], ['class' => 'btn btn-danger '], ['confirm' => __('Tem certeza que quer dispensar essa demanda?', $demanda->id)]); ?>
                        <?php endif; ?> 
                    </td>
                    <td>Pega quem ta logado</td>
                    <td class="actions">
                        <?= $this->Html->link(__('<i class="fa-regular fa-pen-to-square fa-lg"></i>' . __('')), ['action' => 'edit', $demanda->id], ['escape' => false, 'class' => 'btn btn-sm btn-outline-warning text-dark p-2']); ?>
                        <?= $this->Form->postLink(__('<i class="fa-regular fa-trash-can fa-lg"></i>' . __('')), ['action' => 'delete', $demanda->id], ['escape' => false, 'class' => 'btn btn-sm btn-outline-danger text-dark p-2'], ['confirm' => __('Tem certeza que quer deletar essa demanda # {0}?', $demanda->id)]) ?> 
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>

     <!-- Paginação do CakePHP, utilizado para gerar páginas caso, por exemplo, uma tabela seja extensa e a página tenha um limite -->
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>

</div>

<?php 
     function Modal($id, $responsavel)
     {
         echo '
             <div class="modal fade" id="Modal-' . $id . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-lg">
                     <div class="modal-content" >
                         <div class="modal-header">
                             <h4 class="modal-title" id="exampleModalLabel">' . $responsavel . '</h4>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
 
                         <div class="modal-body">
                             <b>Pauta:</b> <br> 
                         </div>
                             
                         <div class="modal-body">
                             <b>Participantes:</b> <br> 
                         </div>
 
                         <div class="modal-body">
                             <b>Súmula:</b> <br> 
                         </div>
 
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                         </div>
                     </div>
                 </div>
             </div>
         ';
     }

?>


