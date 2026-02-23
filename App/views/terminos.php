<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['meta_title'] ?></title>
    <?php echo vite_tags('src/js/views/terminos.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es/terminos-legales">

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
    ?>
    
    <!-- HERO01 -->
    <header>        
        <h1><?= $data['hero_title'] ?></h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="<?= $data['hero_logo_alt'] ?>" title="<?= $data['hero_logo_title'] ?>">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es" class="boton" title="<?= $data['hero_cta_title'] ?>"><?= $data['hero_cta_text'] ?></a>     
    </header>

    <!-- TODO: COMPLETAR LAS VARIABLES Y VARIABILIZAR EL CONTENIDO -->
    <?php
    // Zona de variables para personalizar el texto legal
    $razonSocial="Panadería Aginaga";
    $correo ="";
    $cif="";
    $telefono="";
    $direccion="";
    ?>

    <main>
        <section>
            <div class="hito" id="legalZona"></div>
            <h2><?= $data['legal_h2'] ?></h2>

            <article id="identificacion-titular">
                <h3><?= $data['identificacion_h3'] ?></h3>
                <p><?= $data['identificacion_p'] ?></p>
                <ul>
                    <li><strong><?= $data['identificacion_li_razon_social_label'] ?></strong> <?= $razonSocial ?></li>
                    <li><strong><?= $data['identificacion_li_cif_label'] ?></strong> <?= $data['identificacion_li_cif_value'] ?></li>
                    <li><strong><?= $data['identificacion_li_domicilio_label'] ?></strong> <?= $data['identificacion_li_domicilio_value'] ?></li>
                    <li><strong><?= $data['identificacion_li_correo_label'] ?></strong> <a href="mailto:info@profe.webda.eus"><?= $data['identificacion_li_correo_value'] ?></a></li>
                </ul>
            </article>

            <article id="objeto-sitio">
                <h3><?= $data['objeto_h3'] ?></h3>
                <p><?= sprintf($data['objeto_p'], $razonSocial) ?></p>
            </article>

            <article id="condiciones-uso">
                <h3><?= $data['condiciones_h3'] ?></h3>
                <p><?= sprintf($data['condiciones_p'], $razonSocial) ?></p>
            </article>

            <article id="responsabilidad">
                <h3><?= $data['responsabilidad_h3'] ?></h3>
                <p><?= sprintf($data['responsabilidad_p'], $razonSocial) ?></p>
            </article>

            <article id="propiedad-intelectual">
                <h3><?= $data['propiedad_h3'] ?></h3>
                <p><?= sprintf($data['propiedad_p'], $razonSocial) ?></p>
            </article>

            <article id="enlaces-terceros">
                <h3><?= $data['enlaces_h3'] ?></h3>
                <p><?= sprintf($data['enlaces_p'], $razonSocial) ?></p>
            </article>

            <article id="ley-y-jurisdiccion">
                <h3><?= $data['ley_h3'] ?></h3>
                <p><?= $data['ley_p'] ?></p>
            </article>
        </section>

        <section>
            <div class="hito" id="cookiesZona"></div>
            <h2><?= $data['cookies_h2'] ?></h2>

            <article id="que-son-cookies">
                <h3><?= $data['cookies_que_son_h3'] ?></h3>
                <p><?= $data['cookies_que_son_p'] ?></p>
            </article>

            <article id="cookies-utilizadas">
                <h3><?= $data['cookies_utilizadas_h3'] ?></h3>
                <ul>
                    <li><strong><?= $data['cookies_utilizadas_li1_label'] ?></strong> <?= $data['cookies_utilizadas_li1_text'] ?></li>
                    <li><strong><?= $data['cookies_utilizadas_li2_label'] ?></strong> <?= $data['cookies_utilizadas_li2_text'] ?></li>
                    <li><strong><?= $data['cookies_utilizadas_li3_label'] ?></strong> <?= $data['cookies_utilizadas_li3_text_1'] ?> <a href="#config-cookies"><?= $data['cookies_utilizadas_li3_link_text'] ?></a><?= $data['cookies_utilizadas_li3_text_2'] ?></li>
                </ul>
            </article>

            <article id="base-juridica-cookies">
                <h3><?= $data['cookies_base_juridica_h3'] ?></h3>
                <p><?= $data['cookies_base_juridica_p_1'] ?><a href="#config-cookies" id="configurarCookies"><?= $data['cookies_base_juridica_link_text'] ?></a><?= $data['cookies_base_juridica_p_2'] ?><em><?= $data['cookies_base_juridica_accept'] ?></em><?= $data['cookies_base_juridica_p_3'] ?><em><?= $data['cookies_base_juridica_reject'] ?></em><?= $data['cookies_base_juridica_p_4'] ?></p>
            </article>

            <article id="transferencias-internacionales-cookies">
                <h3><?= $data['cookies_transferencias_h3'] ?></h3>
                <p><?= $data['cookies_transferencias_p_1'] ?><em><?= $data['cookies_transferencias_em'] ?></em><?= $data['cookies_transferencias_p_2'] ?></p>
            </article>

            <article id="gestionar-cookies-navegador">
                <h3><?= $data['cookies_navegador_h3'] ?></h3>
                <p><?= $data['cookies_navegador_p1'] ?></p>
                <ul>
                    <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener"><?= $data['cookies_nav_link_chrome'] ?></a></li>
                    <li><a href="https://support.mozilla.org/kb/borrar-cookies" target="_blank" rel="noopener"><?= $data['cookies_nav_link_firefox'] ?></a></li>
                    <li><a href="https://support.apple.com/guide/safari/manage-cookies-sfri11471/mac" target="_blank" rel="noopener"><?= $data['cookies_nav_link_safari'] ?></a></li>
                    <li><a href="https://support.microsoft.com/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank" rel="noopener"><?= $data['cookies_nav_link_edge_ie'] ?></a></li>
                </ul>
                <p><?= $data['cookies_navegador_p2'] ?></p>
            </article>

            <article id="config-cookies">
                <h3><?= $data['cookies_config_h3'] ?></h3>
                <p><?= $data['cookies_config_p'] ?></p>
                <div class="cookies-preferences-container" aria-live="polite"></div>
            </article>

            <article id="actualizaciones-cookies">
                <h3><?= $data['cookies_actualizaciones_h3'] ?></h3>
                <p><?= sprintf($data['cookies_actualizaciones_p'], $razonSocial) ?></p>
            </article>
        </section>
        
        <section>
            <div class="hito" id="privacidadZona"></div>
            <h2><?= $data['privacidad_h2'] ?></h2>

            <article id="responsable-tratamiento">
                <h3><?= $data['priv_responsable_h3'] ?></h3>
                <p><strong><?= $razonSocial ?></strong> <?= $data['priv_responsable_p_1'] ?><a href="mailto:info@profe.webda.eus"><?= $data['priv_responsable_email'] ?></a><?= $data['priv_responsable_p_2'] ?></p>
            </article>

            <article id="datos-procedencia">
                <h3><?= $data['priv_datos_h3'] ?></h3>
                <p><?= $data['priv_datos_p_1'] ?><a href="#cookiesZona"><?= $data['priv_datos_link_text'] ?></a><?= $data['priv_datos_p_2'] ?></p>
            </article>

            <article id="finalidades-tratamiento">
                <h3><?= $data['priv_finalidades_h3'] ?></h3>
                <ul>
                    <li><strong><?= $data['priv_finalidades_li1_label'] ?></strong> <?= $data['priv_finalidades_li1_text'] ?></li>
                    <li><strong><?= $data['priv_finalidades_li2_label'] ?></strong> <?= $data['priv_finalidades_li2_text'] ?></li>
                    <li><strong><?= $data['priv_finalidades_li3_label'] ?></strong> <?= $data['priv_finalidades_li3_text'] ?></li>
                    <li><strong><?= $data['priv_finalidades_li4_label'] ?></strong> <?= $data['priv_finalidades_li4_text'] ?></li>
                    <li><strong><?= $data['priv_finalidades_li5_label'] ?></strong> <?= $data['priv_finalidades_li5_text'] ?></li>
                    <li><strong><?= $data['priv_finalidades_li6_label'] ?></strong> <?= $data['priv_finalidades_li6_text'] ?></li>
                </ul>
            </article>

            <article id="bases-juridicas">
                <h3><?= $data['priv_bases_h3'] ?></h3>
                <ul>
                    <li><strong><?= $data['priv_bases_li1_label'] ?></strong> <?= $data['priv_bases_li1_text'] ?></li>
                    <li><strong><?= $data['priv_bases_li2_label'] ?></strong> <?= $data['priv_bases_li2_text'] ?></li>
                    <li><strong><?= $data['priv_bases_li3_label'] ?></strong> <?= $data['priv_bases_li3_text'] ?></li>
                    <li><strong><?= $data['priv_bases_li4_label'] ?></strong> <?= $data['priv_bases_li4_text'] ?></li>
                </ul>
            </article>

            <article id="plazos-conservacion">
                <h3><?= $data['priv_plazos_h3'] ?></h3>
                <ul>
                    <li><strong><?= $data['priv_plazos_li1_label'] ?></strong><?= $data['priv_plazos_li1_text'] ?></li>
                    <li><strong><?= $data['priv_plazos_li2_label'] ?></strong><?= $data['priv_plazos_li2_text'] ?></li>
                    <li><strong><?= $data['priv_plazos_li3_label'] ?></strong><?= $data['priv_plazos_li3_text'] ?></li>
                    <li><strong><?= $data['priv_plazos_li4_label'] ?></strong><?= $data['priv_plazos_li4_text'] ?></li>
                </ul>
            </article>

            <article id="destinatarios">
                <h3><?= $data['priv_destinatarios_h3'] ?></h3>
                <p><?= $data['priv_destinatarios_p_1'] ?><em><?= $data['priv_destinatarios_em'] ?></em><?= $data['priv_destinatarios_p_2'] ?></p>
            </article>

            <article id="transferencias-internacionales">
                <h3><?= $data['priv_transferencias_h3'] ?></h3>
                <p><?= $data['priv_transferencias_p'] ?></p>
            </article>

            <article id="derechos-personas">
                <h3><?= $data['priv_derechos_h3'] ?></h3>
                <p><?= $data['priv_derechos_p_1'] ?><a href="mailto:info@profe.webda.eus"><?= $data['priv_derechos_email'] ?></a><?= $data['priv_derechos_p_2'] ?><a href="https://www.aepd.es" target="_blank" rel="noopener"><?= $data['priv_derechos_aepd'] ?></a><?= $data['priv_derechos_p_3'] ?></p>
            </article>

            <article id="menores">
                <h3><?= $data['priv_menores_h3'] ?></h3>
                <p><?= $data['priv_menores_p'] ?></p>
            </article>

            <article id="decisiones-automatizadas">
                <h3><?= $data['priv_decisiones_h3'] ?></h3>
                <p><?= $data['priv_decisiones_p'] ?></p>
            </article>

            <article id="seguridad">
                <h3><?= $data['priv_seguridad_h3'] ?></h3>
                <p><?= $data['priv_seguridad_p'] ?></p>
            </article>

            <article id="actualizaciones-privacidad">
                <h3><?= $data['priv_actualizaciones_h3'] ?></h3>
                <p><?= $data['priv_actualizaciones_p'] ?></p>
            </article>
        </section>
    </main>





    <!-- FOOTER -->
    <?php
    include $appRoot . '/includes/es/footer.php'
    ?>
</body>
</html>
