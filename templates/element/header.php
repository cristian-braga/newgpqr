<nav class="navbar navbar-expand-lg navbar-gpqr">
    <div class="container-fluid">
        <span id="logo">
            <?= $this->Html->image('logo_prodemge_sidebar.png', ['alt' => 'logo', 'style' => 'width: 140px']); ?>
        </span>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav navbar-ul-gpqr">
                <li>
                    <a href="/Permissoes/index">
                        <i class="fa fa-user-secret"></i>
                        <span>ADM</span>
                    </a>
                </li>
                <li>
                    <?= $this->Html->link(
                        '<i class="fa fa-home" aria-hidden="true"></i><span>MENU</span>',
                        ['controller' => 'Menu', 'action' => 'index'],
                        ['escape' => false]
                    ) ?>
                </li>
                <li onclick="history.back()" style="cursor: pointer">
                    <a href="#">
                        <i class="fa fa-chevron-circle-left"></i>
                        <span>VOLTAR</span>
                    </a>
                </li>

                <li>
                    <a href="/atividade">
                        <i class="fa-solid fa-file-arrow-down"></i>
                        <span>ATIVIDADE</span>
                    </a>
                </li>

                <li>
                    <a href="/impressao">
                        <i class="fa fa-print"></i>
                        <span>IMPRESSÃO</span>
                    </a>
                </li>

                <li>
                    <a href="/envelopamento">
                        <i class="fa fa-envelope"></i>
                        <span>ENVELOPAMENTO</span>
                    </a>
                </li>

                <li>
                    <a href="/triagem">
                        <i class="fa fa-check-square"></i>
                        <span>TRIAGEM</span>
                    </a>
                </li>

                <li>
                    <a href="/expedicao">
                        <i class="fa fa-truck"></i>
                        <span>EXPEDIÇÃO</span>
                    </a>
                </li>

                <li>
                    <a href="/digitalizacao">
                        <i class="fa fa-cloud-upload"></i>
                        <span>DIGITALIZAÇÃO</span>
                    </a>
                </li>

                <li>
                    <a href="/remessas">
                        <i class="fa fa-newspaper"></i>
                        <span>REMESSAS</span>
                    </a>
                </li>

                <li>
                    <a href="/relatorios">
                        <i class="fa fa-upload"></i>
                        <span>RELATÓRIOS</span>
                    </a>
                </li>

                <li>
                    <?= $this->Html->link(
                        '<i class="fa fa-question" aria-hidden="true"></i><span>AJUDA</span>',
                        ['controller' => 'ajuda', 'action' => 'index'],
                        ['escape' => false]
                    ) ?>
                </li>

                <li>
                    <?= $this->Html->link(
                        '<i class="fa fa-sign-out" aria-hidden="true"></i><span>SAIR</span>',
                        ['controller' => 'users', 'action' => 'logout'],
                        ['escape' => false]
                    ) ?>
                </li>
            </ul>
        </div>
    </div>
</nav>