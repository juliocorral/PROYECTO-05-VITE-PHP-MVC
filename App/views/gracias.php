<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['meta_title'] ?></title>
    <meta name="description" content="<?= $data['meta_description'] ?>">
    
    <!-- linko el css que le corresponde a esta vista -->
    <?php echo vite_tags('src/js/gracias.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?><?= $url ?>">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <!-- Metadatos para redes sociales -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="<?= $data['meta_og_locale'] ?>">
    <meta property="og:site_name" content="<?= $data['meta_og_site_name'] ?>">
    <meta property="og:title" content="<?= $data['meta_title'] ?>">
    <meta property="og:description" content="<?= $data['meta_description'] ?>">
    <meta property="og:url" content="<?=$_ENV['RUTA']?><?= $url ?>">
    <meta property="og:image" content="<?=$_ENV['RUTA']?><?= $data['meta_social_image'] ?>">
    <meta property="og:image:alt" content="<?= $data['meta_social_image_alt'] ?>">

    <meta name="twitter:card" content="<?= $data['meta_twitter_card'] ?>">
    <meta name="twitter:title" content="<?= $data['meta_title'] ?>">
    <meta name="twitter:description" content="<?= $data['meta_description'] ?>">
    <meta name="twitter:image" content="<?=$_ENV['RUTA']?><?= $data['meta_social_image'] ?>">
    <meta name="twitter:image:alt" content="<?= $data['meta_social_image_alt'] ?>">

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

    <!-- NAV -->
    <?php
    // es código php
    include $appRoot . '/includes/nav.php'
    // ?>

    <?php
    if(isset($_GET['nombre'])){
        $nombre = $_GET['nombre'];
    }
    ?>

    <!-- HERO01 -->
    <header>        
        <h1><?= $data['hero_title'] ?><?php  if(isset($_GET['nombre'])){ echo ' ' . $nombre;} ?></h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="<?= $data['logo_alt'] ?>" title="<?= $data['logo_title'] ?>">
        </div>
        <a href="<?=$_ENV['RUTA'] . $data['route_inicio'] ?>" class="boton" title="<?= $data['cta_title'] ?>"><?= $data['cta_text'] ?></a>     
    </header>

    <!-- FOOTER -->
    <?php
    include $appRoot . '/includes/footer.php'
    ?>

</body>
</html>
