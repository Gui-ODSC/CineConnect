<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/assets/css/main.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/header.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/footer.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/cadastro_filme.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/mensagem.css'); ?>">
    <link rel="icon" href="/assets/img/icon_cine.svg" type="image/x-icon">
    <title>CineConnect</title>
</head>
<body>
    <!-- HEADER -->
    <?php $this->renderSection('header_filme')?>
    <!-- MAIN -->
    <?php $this->renderSection('dados_filme')?>
    <?php $this->renderSection('cadastro_filme')?>
    <?php $this->renderSection('mensagem')?>
    <!-- FOOTER -->
</body>
<footer>
    <?php $this->renderSection('footer')?>
</footer>
</html>
