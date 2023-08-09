<nav class="navbar navbar-expand-sm navbar-gpqr">
    <div class="perfil d-flex align-items-center">
        <img src="https://github.com/ricardodev10.png" alt="">
        <div>
            <p class="text-light mb-0">Ricardo</p>
            <span class="text-danger">Desenvolvedor</span>
        </div>
    </div>
    <div class="collapse navbar-collapse justify-content-center">
        <ul class="navbar-nav navbar-ul-gpqr">
            <li>
                <?= $this->Html->link(
                    '<i class="fa fa-home" aria-hidden="true"></i><span>MENU</span>',
                    ['controller' => 'Menu', 'action' => 'index'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>

            <li class="d-none d-xl-block">
                <?= $this->Html->link(
                    '<i class="fa-solid fa-file-arrow-down"></i>
                        <span>ATIVIDADE</span>',
                    ['controller' => 'Atividade', 'action' => 'index'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>

            <li class="d-none d-xl-block">
                <?= $this->Html->link(
                    '<i class="fa fa-print"></i>
                        <span>IMPRESSÃO</span>',
                    ['controller' => 'Impressao', 'action' => 'index'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>

            <li class="d-none d-xl-block">
                <?= $this->Html->link(
                    '<i class="fa-solid fa-file-circle-check"></i>
                        <span>CONFERÊNCIA</span>',
                    ['controller' => 'Conferencia', 'action' => 'index'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>

            <li class="d-none d-xl-block">
                <?= $this->Html->link(
                    '<i class="fa fa-envelope"></i>
                        <span>ENVELOPAMENTO</span>',
                    ['controller' => 'Envelopamento', 'action' => 'index'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>

            <li class="d-none d-xl-block">
                <?= $this->Html->link(
                    '<i class="fa fa-check-square"></i>
                        <span>TRIAGEM</span>',
                    ['controller' => 'Triagem', 'action' => 'index'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>

            <li class="d-none d-xl-block">
                <?= $this->Html->link(
                    '<i class="fa fa-truck"></i>
                        <span>EXPEDIÇÃO</span>',
                    ['controller' => 'Expedicao', 'action' => 'index'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>

            <li>
                <?= $this->Html->link(
                    '<i class="fa fa-question" aria-hidden="true"></i>
                        <span>AJUDA</span>',
                    ['controller' => 'Ajuda', 'action' => 'index'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>

            <li>
                <?= $this->Html->link(
                    '<i class="fa fa-sign-out" aria-hidden="true"></i>
                        <span>SAIR</span>',
                    ['controller' => 'Users', 'action' => 'logout'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>
        </ul>
    </div>
    <?= $this->Html->image('logo_prodemge_sidebar.png', ['alt' => 'logo', 'style' => 'width: 120px; margin-right: 24px']); ?>
</nav>