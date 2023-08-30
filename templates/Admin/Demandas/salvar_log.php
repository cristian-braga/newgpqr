<h3 class="text-center mt-2 mb-4">Relatório de finalização <?= h($demanda->id) ?> - <?= h($demanda->demanda_resumo) ?></h3>
<?= $this->Form->create($demanda, ['class' => 'mx-auto p-3 form', 'style' => 'width: 50%']) ?>
<div class="row g-3">
    <div class="col-md-12">
        <label class="form-label">Descreva seu log de desenvolvimento</label>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" id="demanda_log" name="demanda_log"
                style="height: 100px"></textarea>
            <label for="floatingTextarea2">Digite...</label>
        </div>
    </div>
    <div class="col-12 mt-5">
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary float-end']) ?>
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary float-end mb-3']) ?>

    </div>
</div>
<?= $this->Form->end() ?>


