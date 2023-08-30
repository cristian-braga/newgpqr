<div class="container text-center mt-4">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa fa-user-secret fa-3x" aria-hidden="true"></i>
                <h5>PERMISSÕES</h5>',
                ['controller' => 'Permissoes', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa fa-address-book fa-3x" aria-hidden="true"></i>
                <h5>ADMINISTRATIVO</h5>',
                ['controller' => 'Menu', 'action' => 'menuAdmin'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-file-arrow-down fa-3x" aria-hidden="true"></i>
                <h5>ATIVIDADE</h5>',
                ['controller' => 'Atividade', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa fa-print fa-3x" aria-hidden="true"></i>
                <h5>IMPRESSÃO</h5>',
                ['controller' => 'Impressao', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-file-circle-check fa-3x" aria-hidden="true"></i>
                <h5>CONFERÊNCIA</h5>',
                ['controller' => 'Conferencia', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
                <h5>ENVELOPAMENTO</h5>',
                ['controller' => 'Envelopamento', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa fa-check-square fa-3x" aria-hidden="true"></i>
                <h5>TRIAGEM</h5>',
                ['controller' => 'Triagem', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa fa-truck fa-3x" aria-hidden="true"></i>
                <h5>EXPEDIÇÃO</h5>',
                ['controller' => 'Expedicao', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa fa-file-excel fa-3x" aria-hidden="true"></i>
                <h5>SERVIÇOS ANULADOS</h5>',
                ['controller' => 'ServicosAnulados', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa fa-cloud-upload fa-3x" aria-hidden="true"></i>
                <h5>DIGITALIZAÇÃO</h5>',
                ['controller' => 'Digitalizacao', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa fa-newspaper fa-3x" aria-hidden="true"></i>
                <h5>REMESSAS</h5>',
                ['controller' => 'Menu', 'action' => 'menuremessas'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa fa-upload fa-3x" aria-hidden="true"></i>
                <h5>RELATÓRIOS</h5>',
                ['controller' => 'Menu', 'action' => 'menurelatorios'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa fa-calendar fa-3x" aria-hidden="true"></i>
                <h5>ESCALA SEMANAL</h5>',
                ['controller' => 'Escala', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa fa-question fa-3x" aria-hidden="true"></i>
                <h5>AJUDA</h5>',
                ['controller' => 'Ajuda', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
    </div>
</div>