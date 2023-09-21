<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'RotulosCorreios', 'action' => 'index'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?><br><br>
<h3>Cadastrar Rótulos - Correios</h4>
    <?= $this->Form->create($rotulosCorreios, ['id' => 'form', 'class' => 'mx-auto p-3 form']) ?>
    <div class="row">
        <div class="col-md-2">
            <label class="form-label">Destino:</label>
            <select name="destino" class="form-control">
                <option value="" hidden selected disabled>Selecione...</option>
                <option value="CTC BH MG LOCAL">CTC BH MG LOCAL</option>
                <option value="CTC BH MG ESTADUAL">CTC BH MG ESTADUAL</option>
                <option value="OUTROS ESTADOS">OUTROS ESTADOS</option>
            </select>
        </div>
        <div class="col-md-2">
            <label class="form-label">Ano:</label>
            <?php $anos = [
                date("Y") => date("Y"),               // Ano atual
                date("Y") - 1 => date("Y") - 1,       // Ano passado
            ];

            echo $this->Form->select(
                'ano',
                $anos,
                [
                    'class' => 'form-select',
                    'required',
                    'label' => false
                ]
            ); ?></div>
        <div class="mt-2">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary'], ['redirect' => 'index1']) ?>
            <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>