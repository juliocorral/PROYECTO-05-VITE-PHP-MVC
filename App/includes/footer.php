<footer>
    <!-- caja superior de información -->
    <div>
        <div class="cajaInfo">
            <?php
            // enlaces de la web
            include $appRoot . '/includes/enlaces_menu.php'
            ?>
        </div>

        <div class="cajaInfo">
            <ul>
                <li><a href="https://profe.webda.eus/" title="<?= $g_footer_link_portfolio_title ?>"><?= $g_footer_link_portfolio_text ?></a></li>
                <li><a href="https://www.areafor.com/" title="<?= $g_footer_link_academy_title ?>"><?= $g_footer_link_academy_text ?></a></li>
            </ul>
            <div class="rrss">
                <a href="" title="<?= $g_footer_social_facebook_title ?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-facebook.svg" alt="<?= $g_footer_social_facebook_title ?>" title="<?= $g_footer_social_facebook_title ?>" width="30" height="30">
                </a>

                <a href="https://www.linkedin.com/in/igor-aranaz-pastor/" title="<?= $g_footer_social_linkedin_title ?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-linkedin.svg" alt="<?= $g_footer_social_linkedin_title ?>" title="<?= $g_footer_social_linkedin_title ?>" width="30" height="30">
                </a>

                <a href="" title="<?= $g_footer_social_instagram_title ?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-instagram.svg" alt="<?= $g_footer_social_instagram_title ?>" title="<?= $g_footer_social_instagram_title ?>" width="30" height="30">
                </a>

                <a href="https://www.youtube.com/@LiquidArtDevelopers" title="<?= $g_footer_social_youtube_title ?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-youtube.svg" alt="<?= $g_footer_social_youtube_title ?>" title="<?= $g_footer_social_youtube_title ?>" width="30" height="30">
                </a>
            </div>
        </div>

        <div class="cajaInfo">
            <ul>
                <li>
                    <a href="tel:+34943123123" title="<?= $g_footer_phone_title ?>" target="_blank" class="telefono">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/call.svg" alt="<?= $g_footer_phone_title ?>" title="<?= $g_footer_phone_title ?>" width="20" height="20">
                        <span><?= $g_footer_phone_text ?></span>
                    </a>
                </li>

                <li>
                    <a href="https://api.whatsapp.com/send/?phone=34628749350" title="<?= $g_footer_whatsapp_title ?>" target="_blank" class="telefono">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-whatsapp.svg" alt="<?= $g_footer_whatsapp_title ?>" title="<?= $g_footer_whatsapp_title ?>" width="20" height="20">
                        <span><?= $g_footer_whatsapp_text ?></span>
                    </a>
                </li>

                <li>
                    <a href="mailto:aranaz@gmail.com" title="<?= $g_footer_email_title ?>" target="_blank">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/mail.svg" alt="<?= $g_footer_email_title ?>" title="<?= $g_footer_email_title ?>" width="20" height="20">
                        <span><?= $g_footer_email_text ?></span>
                    </a>
                </li>

                <li>
                    <a href="https://maps.app.goo.gl/EB3bPiGW1yfoJg3p9" title="<?= $g_footer_address_title ?>" target="_blank">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/location.svg" alt="<?= $g_footer_address_title ?>" title="<?= $g_footer_address_title ?>" width="20" height="20">
                        <span><?= $g_footer_address_line1 ?><br><?= $g_footer_address_line2 ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- caja inferior de info -->
    <div>
        <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="" title="" width="200" height="80">
        <div>
            <p><?= $g_footer_about_text ?></p>
            <div id="zonaTerminos">
                <a href="<?=$_ENV['RUTA'] . $g_route_terms_legal?>"><?= $g_footer_legal_notice_text ?></a>
                <a href="<?=$_ENV['RUTA'] . $g_route_terms_cookies?>"><?= $g_footer_cookies_text ?></a>
                <a href="<?=$_ENV['RUTA'] . $g_route_terms_privacy?>"><?= $g_footer_privacy_text ?></a>
            </div>
            <p>© <?php echo $anio?> <?= $g_footer_rights_text ?></p>
        </div>
    </div>
</footer>
