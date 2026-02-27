<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang ?? 'es', ENT_QUOTES, 'UTF-8') ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['meta_title'] ?? '404' ?></title>
    <meta name="description" content="<?= $data['meta_description'] ?? '404' ?>">
    <?php echo vite_tags('src/js/404.js'); ?>

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include $appRoot . '/includes/metadatos_globales.php'
    ?>

</head>
<body>
    <?php
    // Elementos globales dentro del body: script de tag manager
    include $appRoot . '/includes/body_global.php'
    ?>
    <main>
        <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="<?= $data['logo_alt'] ?? '' ?>" title="<?= $data['logo_title'] ?? '' ?>">
        <h1><?= $data['hero_title'] ?? '404 - Página no encontrada' ?></h1>
        <a href="<?=$_ENV['RUTA'] . ($data['route_inicio'] ?? '/es') ?>" class="boton"><?= $data['cta_text'] ?? 'Ir a inicio' ?></a>
    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
