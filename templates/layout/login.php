<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema GIM</title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('login') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <?= $this->fetch('content') ?>
</body>

</html>