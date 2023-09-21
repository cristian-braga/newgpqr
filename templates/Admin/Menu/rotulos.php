<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'remessas'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h3 class="text-center text-gpqr mt-2 mb-4">RÓTULOS</h3>
<div class="container text-center mt-4">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-tag fa-3x" aria-hidden="true"></i>
                <h5>CORREIOS</h5>',
                ['controller' => 'Sdake64', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-tag fa-3x" aria-hidden="true"></i>
                <h5>GRALD11 / GRALS11</h5>',
                ['controller' => 'Sdake64', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
    </div>
</div>