<div class="container text-center mt-4">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-tag fa-3x" aria-hidden="true"></i>
                <h5>SMAFE008</h5>',
                ['controller' => 'Smafe008', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-tag fa-3x" aria-hidden="true"></i>
                <h5>SMAFE008B</h5>',
                ['controller' => 'Smafe008b', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

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