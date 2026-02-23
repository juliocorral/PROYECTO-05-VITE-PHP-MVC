<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['meta_title'] ?></title>
    <meta name="description" content="<?= $data['meta_description'] ?>">
    <?php echo vite_tags('src/js/views/inicio.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es">

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
        <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton"><?= $data['hero_cta_text'] ?></a>
    </header>

    <main>
        <!-- SECCIÓN PRESENTACIÓN -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2><?= $data['presentacion_h2'] ?></h2>
            </div>

            <article>
                <!-- hijo 1 -->
                <div>
                    <h3><?= $data['presentacion_h3'] ?></h3>
                    <p><?= $data['presentacion_p'] ?></p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/people-outline.svg" alt="">
                            <h4><?= $data['card_1_h4'] ?></h4>
                            <p><?= $data['card_1_p'] ?></p>
                            <a href="<?=$_ENV['RUTA']?>/es/sobre-nosotros" class="moduloBoton01">
                                <span><?= $data['card_1_cta_text'] ?></span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star-outline.svg" alt="">
                            <h4><?= $data['card_2_h4'] ?></h4>
                            <p><?= $data['card_2_p'] ?></p>
                            <a href="<?=$_ENV['RUTA']?>/es/productos" class="moduloBoton01">
                                <span><?= $data['card_2_cta_text'] ?></span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" class="moduloBoton02">
                        <span><?= $data['presentacion_cta_text'] ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="<?= $data['presentacion_cta_icon_alt'] ?>" title="<?= $data['presentacion_cta_icon_title'] ?>">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderia-pasteleria-aginaga-1500.avif" alt="" title="">
                </div>
            </article>
        </section>

        <!-- SECCIÓN SOBRE NOSOTROS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $data['sobre_h2'] ?></h2>
            </div>
            <!-- Artículo 03 -->
            <article class="art03">
                <h3><?= $data['sobre_art03_h3'] ?></h3>

                <p><?= $data['sobre_art03_p1'] ?></p>

                <p><?= $data['sobre_art03_p2'] ?></p>

                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderas-profesionales-1500.avif" alt="<?= $data['sobre_art03_img_alt'] ?>" title="<?= $data['sobre_art03_img_title'] ?>">
            </article>

            <!-- artículo 05 -->
            <article class="art05">
                <h3><?= $data['sobre_art05_h3'] ?></h3>
                <p><?= $data['sobre_art05_p1'] ?></p>
                <p><?= $data['sobre_art05_p2'] ?></p>
                <a href="<?=$_ENV['RUTA']?>/es/sobre-nosotros" class="boton"><?= $data['sobre_art05_cta_text'] ?></a>
            </article>

            <!-- artículo 06 -->
            <article class="art06">
                <div>
                    <h3><?= $data['sobre_art06_h3'] ?></h3>
                    <p><?= $data['sobre_art06_p1'] ?></p>
                    <p><?= $data['sobre_art06_p2'] ?></p>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" title="" class="boton"><?= $data['sobre_art06_cta_text'] ?></a>
                </div>
            </article>

            <!-- artículo 4 -->
            <article class="art04">
                <h3><?= $data['artesanos_h3'] ?></h3>
                <span class="ralla"></span>
                <div class="contenedor-fichas">
                    <div class="ficha">
                        <h4><?= $data['artesano_1_nombre'] ?></h4>
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="" title="">                        
                        <p><?= $data['artesano_1_desc'] ?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4><?= $data['artesano_2_nombre'] ?></h4>
                        <img src="https://randomuser.me/api/portraits/women/27.jpg" alt="" title="">                        
                        <p><?= $data['artesano_2_desc'] ?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4><?= $data['artesano_3_nombre'] ?></h4>
                        <img src="https://randomuser.me/api/portraits/men/14.jpg" alt="" title="">                        
                        <p><?= $data['artesano_3_desc'] ?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4><?= $data['artesano_4_nombre'] ?></h4>
                        <img src="https://randomuser.me/api/portraits/women/14.jpg" alt="" title="">                        
                        <p><?= $data['artesano_4_desc'] ?></p>
                        <span class="ralla"></span>
                    </div>
                </div>
            </article>
        </section>

        <!-- SECCIÓN PRODUCTOS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $data['productos_h2'] ?></h2>
            </div>

            <!-- Artículo 02-bis -->
            <article class="art02-bis">
                <div class="textos">
                    <h3><?= $data['productos_art02_h3'] ?></h3>
                    <p><?= $data['productos_art02_p'] ?></p>
                    <a href="<?=$_ENV['RUTA']?>/es/productos" class="moduloBoton02">
                        <span><?= $data['productos_art02_cta_text'] ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="<?= $data['productos_art02_cta_icon_alt'] ?>" title="<?= $data['productos_art02_cta_icon_title'] ?>">
                    </a>
                </div>

                <div class="imagenes">
                    <a href="<?=$_ENV['RUTA']?>/es/productos#hitoPanes" title="<?= $data['productos_item_1_link_title'] ?>">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="<?= $data['productos_item_1_img_alt'] ?>" title="<?= $data['productos_item_1_img_title'] ?>">
                        <h4><?= $data['productos_item_1_h4'] ?></h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/productos#hitoPasteles" title="<?= $data['productos_item_2_link_title'] ?>">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="<?= $data['productos_item_2_img_alt'] ?>" title="<?= $data['productos_item_2_img_title'] ?>">
                        <h4><?= $data['productos_item_2_h4'] ?></h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/productos#hitoTorrijas" title="<?= $data['productos_item_3_link_title'] ?>">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="<?= $data['productos_item_3_img_alt'] ?>" title="<?= $data['productos_item_3_img_title'] ?>">
                        <h4><?= $data['productos_item_3_h4'] ?></h4>
                    </a>
                </div>
            </article>
        </section>

    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/es/footer.php'?>




</body>
</html>
