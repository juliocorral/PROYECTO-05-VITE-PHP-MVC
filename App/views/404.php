<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang ?? 'es', ENT_QUOTES, 'UTF-8') ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['meta_title'] ?? '404' ?></title>
    <meta name="description" content="<?= $data['meta_description'] ?? '404' ?>">
    <?php echo vite_tags('src/js/404.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?><?= $url ?>">
    
    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <!-- Metadatos para redes sociales -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="<?= $data['meta_og_locale'] ?? 'es_ES' ?>">
    <meta property="og:site_name" content="<?= $data['meta_og_site_name'] ?? 'Panadería Aginaga' ?>">
    <meta property="og:title" content="<?= $data['meta_title'] ?? '404' ?>">
    <meta property="og:description" content="<?= $data['meta_description'] ?? '404' ?>">
    <meta property="og:url" content="<?=$_ENV['RUTA']?><?= $url ?>">
    <meta property="og:image" content="<?=$_ENV['RUTA']?><?= $data['meta_social_image'] ?? '/assets/img/logos/panaderia-aginaga-logo-original.jpg' ?>">
    <meta property="og:image:alt" content="<?= $data['meta_social_image_alt'] ?? '' ?>">

    <meta name="twitter:card" content="<?= $data['meta_twitter_card'] ?? 'summary_large_image' ?>">
    <meta name="twitter:title" content="<?= $data['meta_title'] ?? '404' ?>">
    <meta name="twitter:description" content="<?= $data['meta_description'] ?? '404' ?>">
    <meta name="twitter:image" content="<?=$_ENV['RUTA']?><?= $data['meta_social_image'] ?? '/assets/img/logos/panaderia-aginaga-logo-original.jpg' ?>">
    <meta name="twitter:image:alt" content="<?= $data['meta_social_image_alt'] ?? '' ?>">

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
