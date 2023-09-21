<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'pmmg'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h2 class="text-center text-gpqr mt-2 mb-4">ETIQUETAS PMMG</h2>
<div class="container text-center mt-4">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-tag fa-3x" aria-hidden="true"></i>
                <h5>SMAFE 009/010</h5>',
                ['controller' => 'Smafe009010', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-tag fa-3x" aria-hidden="true"></i>
                <h5>ETIQUETAS PMMG</h5>',
                ['controller' => 'EtiquetasPm', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
    </div>
</div>