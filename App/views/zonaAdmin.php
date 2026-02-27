<?php
// Obtener las consultas realizadas por el usuario logeado
$consultasUsuario = [];
$consultasError = '';

if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] === "1") {
    $correoUsuario = $_SESSION['CORREO'] ?? '';

    if (!empty($correoUsuario)) {
        $con = mysqli_connect($_ENV['BBDD_HOST'], $_ENV['BBDD_USER'], $_ENV['BBDD_PASS'], $_ENV['BBDD_BBDD']);

        if ($con) {
            $con->set_charset("utf8mb4");

            $sql = "SELECT creado_en, nombre, telefono, email, mensaje, idioma, url_origen FROM `consultas_web` WHERE email = ? ORDER BY creado_en DESC";
            $stmt = mysqli_prepare($con, $sql);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, 's', $correoUsuario);

                if (mysqli_stmt_execute($stmt)) {
                    $resultado = mysqli_stmt_get_result($stmt);

                    if ($resultado) {
                        $consultasUsuario = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
                    } else {
                        $consultasError = $data['db_error_fetch'];
                    }
                } else {
                    $consultasError = $data['db_error_fetch'];
                }

                mysqli_stmt_close($stmt);
            } else {
                $consultasError = $data['db_error_prepare'];
            }

            mysqli_close($con);
        } else {
            $consultasError = $data['db_error_connection'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['meta_title'] ?></title>
    <meta name="description" content="<?= $data['meta_description'] ?>">
    <?php echo vite_tags('src/js/zonaAdmin.js'); ?>

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
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>

        <?php
        if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']=="1"){
            // MOSTRARÉ EL CONTENIDO PRIVADO
        ?>

            <h2><?= $data['logged_h2_prefix'] ?> <?= $_SESSION['NOMBRE'] ?></h2>
            <p class="mensajeBienvenida"><?= $data['logged_intro'] ?></p>

        <?php
        }else{
            // MOSTRARÉ EL FORMULARIO DE LOGEO
        ?>
            <article class="artForm">
                <form action="<?=base_path()?>/app/artFormLogin" method="post">

                    <?php
                    if( isset($_GET['error']) ){
                        // si entro es que viene un error marcado en la url con query string
                        $error = $_GET['error'];                    
                        // echo "<p class='error'>Hay un error en el campo $campo de tipo $error</p>";
                    }
                    ?>

                    <!-- AQUÍ MOSTRAMOS EL ERROR SEA CUAL SEA -->
                    <span class="error"><?php if(isset($error)){echo $data['login_error'];} ?></span>

                    <label for="usuario"><?= $data['label_usuario'] ?></label>
                    <input type="text" name="usuario" id="usuario" placeholder="<?= $data['placeholder_usuario'] ?>" value="">

                    <label for="pass"><?= $data['label_password'] ?></label>
                    <input type="password" name="password" id="pass" placeholder="<?= $data['placeholder_password'] ?>">    
                    
                    <!-- input oculto donde el value es el valor de $lang, ergo el idioma -->
                    <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">

                    <input type="submit" value="<?= $data['submit_text'] ?>" class="boton">

                    <p><?= $data['required_fields_note'] ?></p>

                    <a href="<?=$_ENV['RUTA'] . $data['route_registro'] ?>"><?= $data['register_link_text'] ?></a>

                </form>
            </article>
        <?php
        }
        ?>



    </header>

    <?php
    if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']=="1"){
    ?>
    <main>
        <section class="panelConsultas">
            <div class="h2Especial">
                <span></span>
                <h2><?= $data['consultas_h2'] ?></h2>
            </div>

            <article class="tablaConsultas">
                <p class="introConsultas"><?= $data['consultas_intro'] ?></p>

                <?php if($consultasError !== ''): ?>
                    <p class="estadoConsultas error"><?= htmlspecialchars($consultasError, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php elseif(empty($consultasUsuario)): ?>
                    <p class="estadoConsultas"><?= $data['consultas_empty'] ?></p>
                <?php else: ?>
                    <div class="tablaResponsive">
                        <table>
                            <thead>
                                <tr>
                                    <th><?= $data['table_th_fecha'] ?></th>
                                    <th><?= $data['table_th_nombre'] ?></th>
                                    <th><?= $data['table_th_telefono'] ?></th>
                                    <th><?= $data['table_th_email'] ?></th>
                                    <th><?= $data['table_th_mensaje'] ?></th>
                                    <th><?= $data['table_th_idioma'] ?></th>
                                    <th><?= $data['table_th_url_origen'] ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($consultasUsuario as $consulta): ?>
                                    <tr>
                                        <td><?= htmlspecialchars(date('d/m/Y H:i', strtotime($consulta['creado_en'])), ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['nombre'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['telefono'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['mensaje'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['idioma'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['url_origen'], ENT_QUOTES, 'UTF-8'); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </article>
        </section>
    </main>
    <?php
    }
    ?>



    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>


</body>
</html>
