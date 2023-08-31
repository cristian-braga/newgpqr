<div class="container text-center mt-4">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-building-shield fa-3x" aria-hidden="true"></i>
                <h5>PMMG</h5>',
                ['controller' => 'Menu', 'action' => 'pmmg'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-car-rear fa-3x" aria-hidden="true"></i>
                <h5>DETRAN</h5>',
                ['controller' => 'Menu', 'action' => 'detran'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-box-archive fa-3x" aria-hidden="true"></i>
                <h5>SERVIÇOS INTERNOS</h5>',
                ['controller' => 'Menu', 'action' => 'internos'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-compact-disc fa-3x" aria-hidden="true"></i>
                <h5>CD</h5>',
                ['controller' => 'Cd', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-tags fa-3x" aria-hidden="true"></i>
                <h5>RÓTULOS</h5>',
                ['controller' => 'Menu', 'action' => 'rotulos'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
    </div>
</div>