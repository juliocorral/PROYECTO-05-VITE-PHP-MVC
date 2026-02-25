<ul>
    <li><a href="<?=$_ENV['RUTA'] . $g_route_home?>" title="<?= $g_menu_home_title ?>"><?= $g_menu_home_text ?></a></li>

    <li><a href="<?=$_ENV['RUTA'] . $g_route_about?>" title="<?= $g_menu_about_title ?>"><?= $g_menu_about_text ?></a></li>

    <li>
        <a href="<?=$_ENV['RUTA'] . $g_route_products?>" title="<?= $g_menu_products_title ?>"><?= $g_menu_products_text ?></a>
        <ul class="sublista">
            <li><a href="<?=$_ENV['RUTA'] . $g_route_products_bakery?>" title="<?= $g_menu_products_bakery_title ?>"><?= $g_menu_products_bakery_text ?></a></li>
            <li><a href="<?=$_ENV['RUTA'] . $g_route_products_pastry?>" title="<?= $g_menu_products_pastry_title ?>"><?= $g_menu_products_pastry_text ?></a></li>
            <li><a href="<?=$_ENV['RUTA'] . $g_route_products_torrijas?>" title="<?= $g_menu_products_torrijas_title ?>"><?= $g_menu_products_torrijas_text ?></a></li>
        </ul>
    </li>    

    <li><a href="<?=$_ENV['RUTA'] . $g_route_contact?>" title="<?= $g_menu_contact_title ?>"><?= $g_menu_contact_text ?></a></li>
    
    
    <?php
    if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']=="1"){
        // MOSTRARÉ EL CONTENIDO PRIVADO
    ?>
    <li><a href="<?=$_ENV['RUTA'] . $g_route_admin?>" title="<?= $g_menu_admin_title ?>"><?= $g_menu_admin_text ?></a></li>
    <li><a href="<?=$_ENV['RUTA'] . $g_route_logout?>" title="<?= $g_menu_logout_title ?>"><?= $g_menu_logout_text ?></a></li>
    <?php
    }else{
    ?>
    <li><a href="<?=$_ENV['RUTA'] . $g_route_admin?>" title="<?= $g_menu_login_title ?>"><?= $g_menu_login_text ?></a></li>
    <?php
    }
    ?>

</ul>
