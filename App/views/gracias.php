<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['meta_title'] ?></title>
    <meta name="description" content="<?= $data['meta_description'] ?>">
    
    <!-- linko el css que le corresponde a esta vista -->
    <?php echo vite_tags('src/js/views/gracias.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es/gracias">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include $appRoot . '/includes/es/metadatos_globales.php'
    ?>

</head>
<body>

    <?php
    // Elementos globales dentro del body: script de tag manager
    include $appRoot . '/includes/es/body_global.php'
    ?>

    <!-- NAV -->
    <?php
    // es código php
    include $appRoot . '/includes/es/nav.php'
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
        <a href="<?=$_ENV['RUTA']?>/es" class="boton" title="<?= $data['cta_title'] ?>"><?= $data['cta_text'] ?></a>     
    </header>

    <!-- FOOTER -->
    <?php
    include $appRoot . '/includes/es/footer.php'
    ?>

</body>
</html>
