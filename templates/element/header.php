<nav class="navbar navbar-expand-sm navbar-gpqr">
    <!-- <span id="logo">
            <?= $this->Html->image('logo_prodemge_sidebar.png', ['alt' => 'logo', 'style' => 'width: 140px']); ?>
        </span> -->
    <div class="collapse navbar-collapse justify-content-center">
        <ul class="navbar-nav navbar-ul-gpqr">
            <li>
                <?= $this->Html->link(
                    '<i class="fa fa-home" aria-hidden="true"></i><span>MENU</span>',
                    ['controller' => 'Menu'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>

            <li>
                <?= $this->Html->link(
                    '<i class="fa-solid fa-file-arrow-down"></i>
                        <span>ATIVIDADE</span>',
                    ['controller' => 'Atividade'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>

            <li>
                <?= $this->Html->link(
                    '<i class="fa fa-print"></i>
                        <span>IMPRESSÃO</span>',
                    ['controller' => 'Impressao'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>

            <li>
                <?= $this->Html->link(
                    '<i class="fa fa-envelope"></i>
                        <span>ENVELOPAMENTO</span>',
                    ['controller' => 'Envelopamento'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>

            <li>
                <?= $this->Html->link(
                    '<i class="fa fa-check-square"></i>
                        <span>TRIAGEM</span>',
                    ['controller' => 'Triagem'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>

            <li>
                <?= $this->Html->link(
                    '<i class="fa fa-truck"></i>
                        <span>EXPEDIÇÃO</span>',
                    ['controller' => 'Expedicao'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>

            <li>
                <?= $this->Html->link(
                    '<i class="fa fa-question" aria-hidden="true"></i>
                        <span>AJUDA</span>',
                    ['controller' => 'Ajuda'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>

            <li>
                <?= $this->Html->link(
                    '<i class="fa fa-sign-out" aria-hidden="true"></i>
                        <span>SAIR</span>',
                    ['controller' => 'users', 'action' => 'logout'],
                    ['class' => 'nav-link', 'escape' => false]
                ) ?>
            </li>
        </ul>
    </div>
</nav>