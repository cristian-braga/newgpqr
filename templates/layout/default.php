<?php
$cakeDescription = 'Sistema GIM';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'style', 'fontawesome/all']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <div class="page-wrapper toggled">
        <a id="show-sidebar" class="btn btn-sm" href="#">
            <i class="fa fa-angle-double-right"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <span id="logo">
                        <?= $this->Html->image('logo_prodemge_sidebar.png', ['alt' => 'logo', 'style' => 'width: 140px']); ?>
                    </span>
                    <div id="close-sidebar">
                        <i class="fa fa-angle-double-left"></i>
                    </div>
                </div>

                <div class="sidebar-header">
                    <div class="user-pic">
                        <!-- <img src="<?= $matricula ?>" alt="User picture"> -->
                    </div>
                    <div class="user-info">
                        <!-- <span class="user-name"><?= $user['primeiroNome'] ?></span> -->
                        <!-- <span class="user-name"><?= $user['matricula'] ?></span> -->
                        <!-- <?php if ($this->Menu->validaPermissao($user, 'DESENVOLVEDOR')) { ?> -->
                        <span class="user-role" style="color: red">Desenvolvedor</span>
                        <!-- <?php } else if ($this->Menu->validaPermissao($user, 'ADMIN')) { ?> -->
                        <span class="user-role" style="color: orange">Administrador</span>
                        <!-- <?php } else { ?> -->
                        <span class="user-role" style="color: cyan">Funcionário</span>
                        <!-- <?php } ?> -->
                    </div>
                </div>

                <div class="menu">
                    <ul>
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
        <div class="page-content">
            <?= $this->Flash->render() ?>

            <?= $this->fetch('content') ?>

            <div class="footer">
                <span>Desenvolvido pela PRODEMGE © <?= date('Y'); ?></span>
                <?= $this->Html->image('logo_prodemge.png', ['alt' => 'Logo Prodemge',  'style' => "width: 130px; height: auto;"]) ?>
            </div>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
    const btn_close = document.getElementById('close-sidebar');
    const btn_show = document.getElementById('show-sidebar');
    const sidebar = document.querySelector('.page-wrapper');

    btn_close.addEventListener('click', function() {
        sidebar.classList.toggle('toggled');
    });

    btn_show.addEventListener('click', function() {
        sidebar.classList.toggle('toggled');
    });
</script>