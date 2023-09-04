<div class="container text-center mt-4">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-square-poll-vertical fa-3x" aria-hidden="true"></i>
                <h5>BOLETIM MENSAL</h5>',
                ['controller' => 'Sdake64', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-dollar-sign fa-3x" aria-hidden="true"></i>
                <h5>FATURAMENTO</h5>',
                ['controller' => 'Sdake64', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-print fa-3x" aria-hidden="true"></i>
                <h5>SERVIÇOS IMPRESSOS</h5>',
                ['controller' => 'Sdake64', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-envelope fa-3x" aria-hidden="true"></i>
                <h5>ENVELOPAMENTO</h5>',
                ['controller' => 'RelatorioEnvelopamento', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-truck fa-3x" aria-hidden="true"></i>
                <h5>RESUMO EXPEDIÇÃO</h5>',
                ['controller' => 'Sdake64', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-car fa-3x" aria-hidden="true"></i>
                <h5>MULTAS</h5>',
                ['controller' => 'RelatorioMultas', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-users-between-lines fa-3x" aria-hidden="true"></i>
                <h5>MULTAS POR CLIENTE</h5>',
                ['controller' => 'Sdake64', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?= $this->Html->link(
                '<i class="fa-solid fa-file-invoice fa-3x" aria-hidden="true"></i>
                <h5>PLANILHA GPDC</h5>',
                ['controller' => 'Sdake64', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
            ) ?>
        </div>
    </div>
</div>