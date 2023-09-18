<?= $this->Html->link(
    '<i class="fa-solid fa-circle-arrow-left fa-2xl"></i>',
    ['controller' => 'Menu', 'action' => 'remessas'],
    ['class' => 'btn-voltar', 'escape' => false]
) ?>
<h2 class="text-center text-gpqr mt-2 mb-4">REMESSAS PMMG</h2>
<div class="container text-center mt-4">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-note-sticky fa-3x" aria-hidden="true"></i>
                <h5>ETIQUETAS</h5>',
                ['controller' => 'Menu', 'action' => 'etiquetas'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-regular fa-folder-open fa-3x" aria-hidden="true"></i>
                <h5>SAALM005</h5>',
                ['controller' => 'Saalm', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-regular fa-folder-open fa-3x" aria-hidden="true"></i>
                <h5>SMB3E316</h5>',
                ['controller' => 'Smb3e316', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-regular fa-folder-open fa-3x" aria-hidden="true"></i>
                <h5>SMB3E329</h5>',
                ['controller' => 'Sdake64', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
        
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-regular fa-folder-open fa-3x" aria-hidden="true"></i>
                <h5>SMB3E356</h5>',
                ['controller' => 'Sdake64', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
    </div>
</div>