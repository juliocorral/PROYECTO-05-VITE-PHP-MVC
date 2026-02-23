<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['meta_title'] ?></title>
    <meta name="description" content="<?= $data['meta_description'] ?>">
    <?php echo vite_tags('src/js/views/zonaAdmin.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es/registro">

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

        
        <article class="artForm">
            <form action="<?=base_path()?>/app/gestionFormLogup" method="post">

                <?php
                if( isset($_GET['error']) ){
                    // si entro es que viene un error marcado en la url con query string
                    $error = $_GET['error'];                    
                    // echo "<p class='error'>Hay un error en el campo $campo de tipo $error</p>";
                }
                ?>

                <!-- AQUÍ MOSTRAMOS EL ERROR SEA CUAL SEA -->
                <span class="error"><?php if(isset($error)){echo $error;} ?></span>

                <label for="nombre"><?= $data['label_nombre'] ?></label>
                <input type="text" name="nombre" id="nombre" placeholder="<?= $data['placeholder_nombre'] ?>" value="" autocomplete="off" require>

                <label for="correo"><?= $data['label_correo'] ?></label>
                <input type="email" name="correo" id="correo" placeholder="<?= $data['placeholder_correo'] ?>" value="" autocomplete="off" require>

                <label for="pass"><?= $data['label_password'] ?></label>
                <input type="password" name="password" id="pass" placeholder="<?= $data['placeholder_password'] ?>" autocomplete="off" require>
                
                <label for="pass2"><?= $data['label_password_repeat'] ?></label>
                <input type="password" name="passwordrepeat" id="pass2" placeholder="<?= $data['placeholder_password_repeat'] ?>" autocomplete="off" require>

                <div>
                    <input type="checkbox" name="terminos" id="aceptarTerminos">                        
                    <labelfor="aceptarTerminos"><?= $data['label_terms_prefix'] ?> <a href="<?=$_ENV['RUTA']?>/es/terminos-legales"><?= $data['label_terms_link'] ?></a></label>
                </div>

                <!-- input oculto donde el value es el valor de $lang, ergo el idioma -->
                <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">

                <input type="submit" value="<?= $data['submit_text'] ?>" class="boton">

                <p><?= $data['required_fields_note'] ?></p>
                
            </form>
        </article>       
        
           
    </header>

    

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/es/footer.php'?>


</body>
</html>
