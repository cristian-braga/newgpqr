<div class="relatorio index content">
    <h4>Demanda <?= h($demanda->id) ?> - <?= h($demanda->demanda_resumo) ?> </h4>
    <hr>
    <?= $this->Html->link(__('Registrar Log'), ['action' => 'add'], ['class' => 'btn btn-success']); ?>

    <div class="container table-responsive ">
    <table class="table table-borderless text-center table-gpqr"> 
        <thead> 
        <tr>
            <th>Desenvolvedor</th>
            <th>Log de desenvolvimento</th>
            <th>Relatório de Conclusão</th>
            <th>Ações</th>
        </tr>
        </thead>
    <tbody>
        <tr>
            <td>ae</td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
    </table>
</div>
</div>