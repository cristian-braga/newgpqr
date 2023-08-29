<div class="container text-center mt-4">
<h2 class="text-center text-gpqr mt-2 mb-4">SERVIÇOS INTERNOS</h2>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?php echo $this->Html->link(
                '<i class="fa-solid fa-print fa-3x spin" aria-hidden="true"></i>
                <h5>IMPRESSÕES INTERNAS</h5>',
                ['controller' => 'Sdake64', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?php echo $this->Html->link(
                '<i class="fa-solid fa-book fa-3x spin" aria-hidden="true"></i>
                <h5>ENCADERNAÇÃO</h5>',
                ['controller' => 'Sdake64', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?php echo $this->Html->link(
                '<i class="fa-solid fa-paste fa-3x spin" aria-hidden="true"></i>
                <h5>IMPRESSÃO E ENCADERNAÇÃO</h5>',
                ['controller' => 'Sdake64', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
    </div>
</div>