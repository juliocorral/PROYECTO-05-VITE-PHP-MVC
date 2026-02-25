<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['meta_title'] ?></title>
    <meta name="description" content="<?= $data['meta_description'] ?>">
    <?php echo vite_tags('src/js/views/quienesSomos.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA'] . $data['route_canonical']?>">

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

    <!-- NAV -->
    <?php include $appRoot . '/includes/nav.php' ?>

    <!-- HERO01 -->
    <header>        
        <h1><?= $data['hero_title'] ?></h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="<?= $data['hero_logo_alt'] ?>" title="<?= $data['hero_logo_title'] ?>">
        </div>            
    </header>

    <main>        
        <!-- Equipo humano -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $data['equipo_h2'] ?></h2>
            </div>

            <!-- PRESENTACIÓN DE QUIENES SOMOS -->
            <article class="art05">
                <h3><?= $data['presentacion_h3'] ?></h3>
                <p><?= $data['presentacion_p1'] ?></p>
                <p><?= $data['presentacion_p2'] ?></p>
                <a href="<?=$_ENV['RUTA'] . $data['route_contacto'] ?>" class="boton" title="<?= $data['presentacion_cta_title'] ?>"><?= $data['presentacion_cta_text'] ?></a>
            </article>

            <!-- TRATO DISTINGUIDO Y PERSONAL -->
            <article class="art03">
                
                <h3><?= $data['trato_h3'] ?></h3>

                <p><?= $data['trato_p1'] ?></p>

                <p><?= $data['trato_p2'] ?></p>

                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/equipo-de-panaderas-y-panaderos-1800.avif" alt="<?= $data['trato_img_alt'] ?>" title="<?= $data['trato_img_title'] ?>">

            </article>

            <!-- LOS TRABAJADORES Y TRABAJADORAS -->
            <article class="art04">
                <h3><?= $data['fichas_h3'] ?></h3>
                <span class="ralla"></span>
                <div class="contenedor-fichas">
                    <div class="ficha">
                        <h4><?= $data['ficha_1_nombre'] ?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleado-01-1200.avif" alt="<?= $data['ficha_1_img_alt'] ?>" title="<?= $data['ficha_1_img_title'] ?>">                        
                        <p><?= $data['ficha_1_desc'] ?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4><?= $data['ficha_2_nombre'] ?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleada-03-1200.avif" alt="<?= $data['ficha_2_img_alt'] ?>" title="<?= $data['ficha_2_img_title'] ?>">                        
                        <p><?= $data['ficha_2_desc'] ?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4><?= $data['ficha_3_nombre'] ?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleado-02-1200.avif" alt="<?= $data['ficha_3_img_alt'] ?>" title="<?= $data['ficha_3_img_title'] ?>">                        
                        <p><?= $data['ficha_3_desc'] ?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4><?= $data['ficha_4_nombre'] ?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleada-04-1200.avif" alt="<?= $data['ficha_4_img_alt'] ?>" title="<?= $data['ficha_4_img_title'] ?>">                        
                        <p><?= $data['ficha_4_desc'] ?></p>
                        <span class="ralla"></span>
                    </div>
                </div>
            </article>
        </section>

        <!-- Historia y valores de la panadería -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2><?= $data['historia_h2'] ?></h2>
            </div>
            <article>
                <!-- CERCANÍA Y TRADICIÓN -->
                <div>
                    <h3><?= $data['historia_bloque_h3'] ?></h3>
                    <p><?= $data['historia_bloque_p'] ?></p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star.svg" alt="<?= $data['card_1_icon_alt'] ?>" title="<?= $data['card_1_icon_title'] ?>">
                            <h4><?= $data['card_1_h4'] ?></h4>
                            <p><?= $data['card_1_p'] ?></p>
                            
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/ribbon.svg" alt="<?= $data['card_2_icon_alt'] ?>" title="<?= $data['card_2_icon_title'] ?>">
                            <h4><?= $data['card_2_h4'] ?></h4>
                            <p><?= $data['card_2_p'] ?></p>
                            <a href="<?=$_ENV['RUTA'] . $data['route_productos'] ?>" class="moduloBoton01">
                                <span><?= $data['card_2_cta_text'] ?></span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA'] . $data['route_contacto'] ?>" class="moduloBoton02">
                        <span><?= $data['historia_cta_text'] ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="<?= $data['historia_cta_icon_alt'] ?>" title="">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderia-en-aginaga-1500.avif" alt="<?= $data['historia_img_alt'] ?>" title="<?= $data['historia_img_title'] ?>">
                </div>
            </article>
        </section>

    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
