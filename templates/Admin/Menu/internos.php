<div class="container text-center mt-4">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-print fa-3x" aria-hidden="true"></i>
                <h5>IMPRESSÕES INTERNAS</h5>',
                ['controller' => 'ImpInternas', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-book fa-3x" aria-hidden="true"></i>
                <h5>ENCADERNAÇÃO</h5>',
                ['controller' => 'Encadernacao', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-book-bookmark fa-3x" aria-hidden="true"></i>
                <h5>IMPRESSÃO E ENCADERNAÇÃO</h5>',
                ['controller' => 'ImpressaoEncadernacao', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
    </div>
</div>