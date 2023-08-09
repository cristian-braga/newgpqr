<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema GIM</title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['cake', 'style', 'fontawesome/all', 'bootstrap.min', 'buttons']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <?= $this->element('header') ?>
    <section class="conteudo">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </section>
    <?= $this->element('footer') ?>

    <?= $this->Html->script('bootstrap.bundle.min') ?>
</body>

</html>