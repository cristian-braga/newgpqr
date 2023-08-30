<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sdake64 $sdake64
 */
?>
<h3 class="text-center mt-2 mb-4">EDITAR SDAKE64</h3>

<?= $this->Form->create($sdake64,['class' => 'mx-auto p-3 form', 'style' => 'width: 90%']) ?>
    <div class="row g-3">
        <div class="col-md-2">
            <label class="form-label">N° do JOB</label>
            <?php echo $this->Form->control('job', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Job', 'label' => false]); ?>
            <label class="form-label">Data</label>
            <?php echo $this->Form->control('dataAtual', ['type' => 'date', 'class' => 'form-control', 'value' => date('Y-m-d'), 'required', 'label' => false]); ?>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-md-2">
            <label class="form-label" style="margin-bottom: 32px;">Veículos com Averbação Incluída</label>
            <?php echo $this->Form->control('copias', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]); ?>
            <?php echo $this->Form->control('paginas', ['type' => 'number', 'class' => 'form-control mt-2', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
        </div>
        <div class="col-md-2">
            <label class="form-label">Veículos Não Incluídos - Fora de Circulação</label>
            <?php echo $this->Form->control('copias1', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]);
            echo $this->Form->control('paginas1', ['type' => 'number', 'class' => 'form-control mt-2', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
        </div>
        <div class="col-md-2">
            <label class="form-label">Veículos Não Incluídos - Com Comunicação de Venda</label>
            <?php echo $this->Form->control('copias2', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]);
            echo $this->Form->control('paginas2', ['type' => 'number', 'class' => 'form-control mt-2', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
        </div>
        <div class="col-md-2">
            <label class="form-label">Veículos Não Incluídos - Com Reserva de Restrição</label>
            <?php echo $this->Form->control('copias3', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]);
            echo $this->Form->control('paginas3', ['type' => 'number', 'class' => 'form-control mt-2', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
        </div>
        <div class="col-md-2">
            <label class="form-label" style="margin-bottom: 32px;">Veículos em Processo de Leilão</label>
            <?php echo $this->Form->control('copias4', ['type' => 'number', 'class' => 'form-control', 'maxlenght' => 4, 'placeholder' => 'Cópias', 'label' => false]);
            echo $this->Form->control('paginas4', ['type' => 'number', 'class' => 'form-control mt-2', 'maxlenght' => 4, 'placeholder' => 'Páginas', 'label' => false]); ?>
        </div>
    </div><br>
    <div>
        <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary'], ['style' => 'margin-left:15px;']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>