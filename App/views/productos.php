<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['meta_title'] ?></title>
    <meta name="description" content="<?= $data['meta_description'] ?>">
    <?php echo vite_tags('src/js/views/productos.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es/productos">

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
    <?php include $appRoot . '/includes/es/nav.php' ?>

    <!-- HERO01 -->
    <header>        
        <h1><?= $data['hero_title'] ?></h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="" class="boton"><?= $data['hero_cta_text'] ?></a>    
    </header>

    <main>
        <!-- SECCIÓN INTRO A PRODUCTOS -->
        <section>
            <!-- H2 especial -->
            <div class="h2Especial">
                <span></span>
                <h2><?= $data['intro_h2'] ?></h2>
            </div>

            <!-- presentación de productos -->
            <article class="art05">
                <h3><?= $data['intro_h3'] ?></h3>
                <p><?= $data['intro_p1'] ?></p>
                <p><?= $data['intro_p2'] ?></p>
                <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton"><?= $data['intro_cta_text'] ?></a>
            </article>
        </section>

        <!-- SECCIÓN DE TODOS LOS PRODUCTOS -->
        <section>  

            <!-- H2 especial -->
            <div class="h2Especial">
                <span></span>
                <h2><?= $data['specialties_h2'] ?></h2>
            </div>            
            
            <!-- Panadería -->             
            <article class="art01" id="hitoPanes">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="<?= $data['panaderia_img_alt'] ?>" title="<?= $data['panaderia_img_title'] ?>">
                <div>
                    <h3><?= $data['panaderia_h3'] ?></h3>
                    <p><?= $data['panaderia_p'] ?></p>
                    <!-- <a href="<?=$_ENV['RUTA']?>/es/productos/panaderia" class="moduloBoton02">
                        <span>Descubre nuestra panadería</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a> -->
                </div>
            </article>

            <!-- Pastelería -->
            <article class="art01 invert" id="hitoPasteles">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="<?= $data['pasteleria_img_alt'] ?>" title="<?= $data['pasteleria_img_title'] ?>">
                <div>
                    <h3><?= $data['pasteleria_h3'] ?></h3>
                    <p><?= $data['pasteleria_p'] ?></p>
                    <!-- <a href="<?=$_ENV['RUTA']?>/es/productos/pasteleria" class="moduloBoton02">
                        <span>Explora nuestra pastelería</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a> -->
                </div>
            </article>

            <!-- Torrijas -->
            <article class="art01" id="hitoTorrijas">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="<?= $data['torrijas_img_alt'] ?>" title="<?= $data['torrijas_img_title'] ?>">
                <div>
                    <h3><?= $data['torrijas_h3'] ?></h3>
                    <p><?= $data['torrijas_p'] ?></p>
                    <!-- <a href="<?=$_ENV['RUTA']?>/es/productos/torrijas" class="moduloBoton02">
                        <span>Descubre nuestras torrijas</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a> -->
                </div>
            </article>

        </section>


    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/es/footer.php'?>
</body>
</html>
