<div class="container text-center mt-4">
<h2 class="text-center text-gpqr mt-2 mb-4">PMMG > ETIQUETAS</h2>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?php echo $this->Html->link(
                '<i class="fa-solid fa-ticket fa-3x spin" aria-hidden="true"></i>
                <h5>SMAFE008</h5>',
                ['controller' => 'Smafe008', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?php echo $this->Html->link(
                '<i class="fa-solid fa-ticket fa-3x spin" aria-hidden="true"></i>
                <h5>SMAFE008B</h5>',
                ['controller' => 'Smafe008b', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?php echo $this->Html->link(
                '<i class="fa-solid fa-ticket fa-3x spin" aria-hidden="true"></i>
                <h5>SMAFE 009/010</h5>',
                ['controller' => 'Smafe009/010', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?php echo $this->Html->link(
                '<i class="fa-solid fa-ticket fa-3x spin" aria-hidden="true"></i>
                <h5>ETIQUETAS PMMG</h5>',
                ['controller' => 'EtiquetasPm', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
    </div>
</div>