<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['action' => 'index'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h3 class="text-center mt-2 mb-4">DETALHES</h3>
<div class="text-center mx-auto p-3 form" style="width: 85%">
    <div class="row g-3">
        <div class="col-md-3">
            <p class="p-gpqr"><b>Data:</b></p>
            <?= $this->Form->control('data_cadastro', ['class' => 'form-control text-center', 'value'=> $passagemTurno->data_cadastro, 'readonly', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <p class="p-gpqr"><b>Responsável:</b></p>
            <?= $this->Form->control('funcionario', ['class' => 'form-control text-center', 'value'=> $passagemTurno->funcionario, 'readonly', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <p class="p-gpqr"><b>Turno:</b></p>
            <?= $this->Form->control('turno', ['class' => 'form-control text-center', 'value'=> $passagemTurno->turno, 'readonly', 'label' => false]) ?>
        </div>
        <div class="col-md-3">
            <p class="p-gpqr"><b>Etapa:</b></p>
            <?= $this->Form->control('etapa', ['class' => 'form-control text-center', 'value'=> $passagemTurno->etapa, 'readonly', 'label' => false]) ?>
        </div>
        <div class="col-md-12 ">
            <p class="p-gpqr"><b>Assunto:</b></p>
            <?= $this->Form->control('assunto', ['class' => 'form-control text-center', 'value'=> $passagemTurno->assunto, 'readonly', 'label' => false]) ?>
        </div>
        <div class="col-md-12">
            <p class="p-gpqr"><b>Descrição:</b></p>
            <?= $this->Form->control('descricao', ['type' => 'textarea', 'class' => 'form-control', 'rows' => 10, 'value'=> $passagemTurno->descricao, 'readonly', 'label' => false]) ?>
        </div>
    </div>
</div>