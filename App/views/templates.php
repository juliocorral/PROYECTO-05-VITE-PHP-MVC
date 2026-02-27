<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto 3 Recursos HTML y SCSS</title>
    <?php echo vite_tags('src/js/templates.js'); ?>
</head>
<body>
    <!-- NAV -->
    <?php include $appRoot . '/includes/nav.php' ?>


    <!-- HERO01 -->
    <header>        
        <h1>Proyecto 3</h1>
        <div>            
            <img src="https://dummyimage.com/500x300" alt="">
        </div>
        <a href="" class="boton">CTA</a>    
    </header>

    <main>
        

        <!-- Sección 01 -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2>Encabezado h2 de la sect01</h2>
            </div>
            <article>
                <!-- hijo 1 -->
                <div>
                    <h3>Encabezado h3</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae vitae amet rem earum maiores similique provident dolorem sunt odit sequi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="https://dummyimage.com/40x40" alt="">
                            <h4>Encabezado h4</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iusto ipsam quam porro, rem non nulla distinctio eligendi id possimus.</p>
                            <a href="" class="moduloBoton01">
                                <span>Leer más</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="https://dummyimage.com/40x40" alt="">
                            <h4>Encabezado h4</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iusto ipsam quam porro, rem non nulla distinctio eligendi id possimus.</p>
                            <a href="" class="moduloBoton01">
                                <span>Leer más</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="" class="moduloBoton02">
                        <span>Contacta con nosotros</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="https://dummyimage.com/1000x1500" alt="">
                </div>
            </article>
        </section>


        <!-- Sección sect02 -->
        <section class="sect02"> 
            <div class="h2Especial">
                <span></span>
                <h2>Encabezado h2 de la sect02</h2>
            </div>
            <div class="sect02-content">
                <ul>
                    <li>
                        <a href="tel:+34943123123" title="Llámanos al 943 123 123" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/call.svg" alt="Llámanos al 943 123 123" title="Llámanos al 943 123 123" width="20" height="20"> 
                            <span>943 123 123</span>
                        </a>
                    </li>

                    <li>
                        <a href="https://api.whatsapp.com/send/?phone=34628749350" title="Escríbenos al whatsapp 600 123 123" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-whatsapp.svg" alt="Escríbenos al whatsapp 600 123 123" title="Escríbenos al whatsapp 600 123 123" width="20" height="20"> 
                            <span>600 123 123</span>
                        </a>
                    </li>       

                    <li>
                        <a href="mailto:aranaz@gmail.com" title="Mándanos un correo a la siguiente dirección correo@correo.com" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/mail.svg" alt="Mándanos un correo a la siguiente dirección correo@correo.com" title="Mándanos un correo a la siguiente dirección correo@correo.com" width="20" height="20"> 
                            <span>correo@correo.com</span>
                        </a>
                    </li>

                    <li>
                        <a href="https://maps.app.goo.gl/EB3bPiGW1yfoJg3p9" title="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" target="_blank">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/location.svg" alt="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" title="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" width="20" height="20"> 
                            <span>Paseo Portuetxe 23b<br>413 Donostia</span>
                        </a>
                    </li>

                    
                </ul>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10923.690028247327!2d-2.0104242426659686!3d43.296692429058076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b013f0513629%3A0x57e4ff3311f619d9!2s%C3%81rea%20Escuela%20de%20Dise%C3%B1o%20y%20Nuevas%20Tecnolog%C3%ADas!5e1!3m2!1ses!2ses!4v1749486263845!5m2!1ses!2ses" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <section>
            <!-- H2 especial -->
            <div class="h2Especial">
                <span></span>
                <h2>Encabezado h2 de la primera sección</h2>
            </div>

            <!-- Artículo 01 -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Encabezado h3 artículo tipo art01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Conócenos</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

            <!-- Artículo 02 -->
            <article class="art02">

                <div class="textos">
                    <h3>Encabezado h3 del art02</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae repudiandae obcaecati magni odio eius maxime iste expedita? Cum vel ad nihil laborum. Nobis unde aperiam rerum pariatur dignissimos, quam consequatur.</p>
                    <!-- <a href="" class="boton">Más info</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Más información</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>

                <div class="imagenes">
                    <img src="https://dummyimage.com/900x900" alt="" title="">
                    <img src="https://dummyimage.com/900x900" alt="" title="">
                    <img src="https://dummyimage.com/900x900" alt="" title="">
                </div>

            </article>

            <!-- Artículo 02-bis -->
            <article class="art02-bis">
                <div class="textos">
                    <h3>La mejor calidad en productos realizados cada día</h3>                  
                    <p>Nuestra carta de productos se actualiza cada estación, pero se fundamenta en tres pilares que definen nuestra identidad. En primer lugar, el <b>pan de masa madre</b> que fermenta durante 24 horas, desarrollando una corteza crujiente y un alveolado irregular lleno de sabor y nutrientes: es el favorito de quienes nos buscan como “<b>panadería en Aginaga</b>” o “<b>pan masa madre en Usurbil</b>”. En segundo lugar, nuestros <b>pasteles artesanos</b>, elaborados con mantequilla y huevos de caserío, sin aromas artificiales, con rellenos de temporada como crema de avellana de Navarra o compota de manzana reineta. Finalmente, las <b>torrijas</b>, inspiradas en la receta de la amona pero disponibles todo el año; las servimos con miel de azahar o con un delicado almíbar de vainilla bourbon que las hace inolvidables. Cada producto cuenta con su propio proceso cuidadoso, fichas de alérgenos actualizadas y la posibilidad de <b>reserva online</b> para que llegues y lo tengas listo. Además, nuestras famosas <b>torrijas de Aginaga</b> pueden reservarse en línea para cualquier celebración, destacando nuestra <b>panadería en Aginaga</b> como la opción preferida para un dulce tradicional.</p>
                    <a href="./productos-panaderia.php" class="moduloBoton02">
                        <span>Más información</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a Nuestros productos" title="Más información">
                    </a>
                </div>

                <div class="imagenes">                    
                    <a href="<?=$_ENV['RUTA']?>/es/productos" title="Los mejores panes de masa madre">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="Pan de masa madre en Usurbil y Aginaga" title="Pan de masa madre en Usurbil y Aginaga">
                        <h4>Panadería</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/productos" title="Pastelería artesana bajo demanda">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="Pasteles artesanos: del obrador a tu mesa" title="Pasteles artesanos: del obrador a tu mesa">
                        <h4>Pastelería</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/productos" title="Torrijas tradicionales a fuego lento">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="Torrijas tradicionales todo el año" title="Torrijas tradicionales todo el año">
                        <h4>Torrijas</h4>
                    </a>                    
                </div>
            </article>

            <!-- Artículo 03 -->
            <article class="art03">
                
                <h3>Encabezado h3 del art03</h3>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro impedit deleniti cupiditate laudantium facere explicabo quo doloremque amet, molestias molestiae cum beatae, dolorum temporibus similique itaque dolore. Assumenda, possimus laborum.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae dolor a asperiores recusandae necessitatibus. Consequatur, molestiae ducimus? Eum, assumenda labore.</p>

                <img src="https://dummyimage.com/1500x900" alt="" title="">

            </article>

            <!-- artículo 4 -->
            <article class="art04">
                <h3>ARTÍCULO art04</h3>
                <span class="ralla"></span>
                <div class="contenedor-fichas">
                    <div class="ficha">
                        <h4>Encabezado h4</h4>
                        <img src="https://dummyimage.com/90x90" alt="" title="">                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore libero exercitationem omnis quod placeat cumque nobis aspernatur illo! Accusamus, labore.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>Encabezado h4</h4>
                        <img src="https://dummyimage.com/90x90" alt="" title="">                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore libero exercitationem omnis quod placeat cumque nobis aspernatur illo! Accusamus, labore.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>Encabezado h4</h4>
                        <img src="https://dummyimage.com/90x90" alt="" title="">                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore libero exercitationem omnis quod placeat cumque nobis aspernatur illo! Accusamus, labore.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>Encabezado h4</h4>
                        <img src="https://dummyimage.com/90x90" alt="" title="">                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore libero exercitationem omnis quod placeat cumque nobis aspernatur illo! Accusamus, labore.</p>
                        <span class="ralla"></span>
                    </div>
                </div>
            </article>

            <!-- artículo 05 -->
            <article class="art05">
                <h3>Encabezado art05</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis porro libero doloribus necessitatibus explicabo nostrum, itaque excepturi reprehenderit magni alias.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et qui laboriosam voluptas, maxime possimus ab dolor aliquam nobis repellendus voluptatem vero sed explicabo totam quaerat dolores veritatis fuga quibusdam cumque.</p>
                <a href="" class="boton">CTA</a>
            </article>

            <!-- artículo 06 -->
            <article class="art06">
                <div>
                    <h3>Artículo 06 Lorem ipsum dolor sit. </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dolorem soluta molestiae autem ipsam deleniti adipisci. Eius adipisci quo, quae officia quod rerum sequi, aliquid autem perspiciatis deleniti, laudantium nihil.</p>
                    <a href="#" title="" class="boton">CTA</a>
                </div>     
            </article>

            <!-- artículo 07 -->
            <article class="art07">
                <h3>Encabezado Artículo 07</h3>

                <img 
                srcset="https://dummyimage.com/500x500 500w,
                            https://dummyimage.com/1800x1100 1800w,
                            https://dummyimage.com/2560x1200 2560w"

                sizes="(width <= 800px) 600px,
                        (width <= 1500px) 1200px,
                        2560px"

                src="https://dummyimage.com/500x500"
                alt="" title="" />

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae deserunt velit ipsa facere laboriosam eum esse minus asperiores numquam quam. Magnam facilis veritatis eligendi illo culpa eaque ex. Ea, laboriosam natus. Odio sequi dolor nisi, aliquam eaque voluptatum aliquid error tempora molestias provident doloremque blanditiis numquam quas alias nostrum neque vel ipsam! Illo, accusantium maiores animi velit molestiae sed nesciunt eum sequi. Quo consectetur alias vel, debitis ab possimus tempora.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae deserunt velit ipsa facere laboriosam eum esse minus asperiores numquam quam. Magnam facilis veritatis eligendi illo culpa eaque ex. Ea, laboriosam natus.</p>

                <a href="#" class="boton">CTA</a>
            </article>

            <!-- artículo 08 -->
            <article class="art08">
                <h3>Encabezado Artículo 08</h3>
                <div>
                    <div class="contenedor-lista">
                        <h4>Lorem ipsum dolor sit.</h4>
                        <ul>
                            <li>
                                <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/checkmark-circle.svg" alt="" title="" />
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/checkmark-circle.svg" alt="" title="" />
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/checkmark-circle.svg" alt="" title="" />
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/checkmark-circle.svg" alt="" title="" />
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/checkmark-circle.svg" alt="" title="" />
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="contenedor-lista">
                        <h4>Lorem ipsum dolor sit.</h4>
                        <ul>
                            <li>
                                <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/checkmark-circle.svg" alt="" title="" />
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/checkmark-circle.svg" alt="" title="" />
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/checkmark-circle.svg" alt="" title="" />
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/checkmark-circle.svg" alt="" title="" />
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/checkmark-circle.svg" alt="" title="" />
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>

            <!-- artículo 09 -->
            <article class="art09">
                <h3>Encabezado Artículo 09</h3>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi quo nulla reiciendis dolore, ipsam porro quisquam minima quae illum, suscipit officia, illo doloremque temporibus quos neque dolor unde! Quae consectetur vitae excepturi omnis qui, rem quos esse eum suscipit. Molestias quod quia dolore consequatur! Quos ut vel molestias sequi officiis.</p>

                <div>
                    <div class="ficha">
                        <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/ribbon.svg" alt="" title="" />
                        <h4>(h4) Beneficio 01</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugit repudiandae explicabo accusantium tempore enim, ullam.</p>
                    </div>
                    <div class="ficha">
                        <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/ribbon.svg" alt="" title="" />
                        <h4>(h4) Beneficio 02</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugit repudiandae explicabo accusantium tempore enim, ullam.</p>
                    </div>
                    <div class="ficha">
                        <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/ribbon.svg" alt="" title="" />
                        <h4>(h4) Beneficio 03</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugit repudiandae explicabo accusantium tempore enim, ullam.</p>
                    </div>
                    <div class="ficha">
                        <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/ribbon.svg" alt="" title="" />
                        <h4>(h4) Beneficio 04</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugit repudiandae explicabo accusantium tempore enim, ullam.</p>
                    </div>
                    <div class="ficha">
                        <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/ribbon.svg" alt="" title="" />
                        <h4>(h4) Beneficio 05</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugit repudiandae explicabo accusantium tempore enim, ullam.</p>
                    </div>
                    <div class="ficha">
                        <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/ribbon.svg" alt="" title="" />
                        <h4>(h4) Beneficio 06</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugit repudiandae explicabo accusantium tempore enim, ullam.</p>
                    </div>
                </div>
            </article>

            <!-- artículo 10 -->
            <article class="art10">
                <div>
                    <img src="https://dummyimage.com/900x900" alt="" title="" />
                </div>
                <div>
                    <img src="https://dummyimage.com/900x900" alt="" title="" />
                </div>
                <div>
                    <img src="https://dummyimage.com/900x900" alt="" title="" />
                </div>
                <div>
                    <img src="https://dummyimage.com/900x900" alt="" title="" />
                </div>
                <div>
                    <img src="https://dummyimage.com/900x900" alt="" title="" />
                </div>
                <div>
                    <img src="https://dummyimage.com/900x900" alt="" title="" />
                </div>
                <div>
                    <img src="https://dummyimage.com/900x900" alt="" title="" />
                </div>
                <div>
                    <img src="https://dummyimage.com/900x900" alt="" title="" />
                </div>
            </article>

            <!-- artículo 11 -->
            <article class="art11">
                <h3>Encabezado artículo 11</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate eum blanditiis iste reprehenderit autem? Debitis est iure ipsa deserunt atque voluptates tenetur dolor vitae animi modi nulla, sint voluptatum dolore ducimus doloremque eos, repudiandae error provident pariatur autem? Illum molestias corporis vitae necessitatibus nihil error suscipit atque omnis pariatur maiores!</p>
                                
                <div>
                    <div class="ficha">
                        <img src="https://randomuser.me/api/portraits/women/79.jpg" alt="" title="" />
                        <div>
                            <h4>(h5) Nombre Apellido</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, earum.</p>
                            <a href="#" class="boton">Ver perfil</a>
                        </div>
                    </div>
                    <div class="ficha">
                        <img src="https://randomuser.me/api/portraits/men/81.jpg" alt="" title="" />
                        <div>
                            <h4>(h5) Nombre Apellido</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem!</p>
                            <a href="#" class="boton">Ver perfil</a>
                        </div>
                    </div>
                    <div class="ficha">
                        <img src="https://randomuser.me/api/portraits/men/68.jpg" alt="" title="" />
                        <div>
                            <h4>(h5) Nombre Apellido</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem!</p>
                            <a href="#" class="boton">Ver perfil</a>
                        </div>
                    </div>
                    <div class="ficha">
                        <img src="https://randomuser.me/api/portraits/women/14.jpg" alt="" title="" />
                        <div>
                            <h4>(h5) Nombre Apellido</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem!</p>
                            <a href="#" class="boton">Ver perfil</a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- artículo 12 -->
            <article class="art12">
                <img srcset="https://dummyimage.com/500x500 500w,
                                https://dummyimage.com/1800x1100 1800w,
                                https://dummyimage.com/2560x1200 2560w"
                
                sizes="(width <= 800px) 600px,
                        (width <= 1500px) 1200px,
                        2560px"                    
                
                src="https://dummyimage.com/500x500" alt="" title="" />
                <div>
                    <h3>Encabezado Artículo 12</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias illum, ipsum recusandae quaerat eveniet vitae molestiae eos laboriosam voluptatibus eligendi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam aspernatur doloribus qui cumque assumenda ipsum excepturi vero molestias exercitationem distinctio, deserunt fugiat voluptate nesciunt sit beatae pariatur veritatis odio corporis!</p>
                    <a href="#" class="boton">CTA</a>
                </div>
            </article>

            <article class="art12 reverse">
                <img srcset="https://dummyimage.com/500x500 500w,
                                https://dummyimage.com/1800x1100 1800w,
                                https://dummyimage.com/2560x1200 2560w"
                
                sizes="(width <= 800px) 600px,
                        (width <= 1500px) 1200px,
                        2560px"                    
                
                src="https://dummyimage.com/500x500" alt="" title="" />
                <div>
                    <h3>Encabezado Artículo 12</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias illum, ipsum recusandae quaerat eveniet vitae molestiae eos laboriosam voluptatibus eligendi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam aspernatur doloribus qui cumque assumenda ipsum excepturi vero molestias exercitationem distinctio, deserunt fugiat voluptate nesciunt sit beatae pariatur veritatis odio corporis!</p>
                    <a href="#" class="boton">CTA</a>
                </div>
            </article>

            <article class="art12">
                <img srcset="https://dummyimage.com/500x500 500w,
                                https://dummyimage.com/1800x1100 1800w,
                                https://dummyimage.com/2560x1200 2560w"
                
                sizes="(width <= 800px) 600px,
                        (width <= 1500px) 1200px,
                        2560px"                    
                
                src="https://dummyimage.com/500x500" alt="" title="" />
                <div>
                    <h3>Encabezado Artículo 12</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias illum, ipsum recusandae quaerat eveniet vitae molestiae eos laboriosam voluptatibus eligendi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam aspernatur doloribus qui cumque assumenda ipsum excepturi vero molestias exercitationem distinctio, deserunt fugiat voluptate nesciunt sit beatae pariatur veritatis odio corporis!</p>
                    <a href="#" class="boton">CTA</a>
                </div>
            </article>

            <!-- Contacto -->
            <!-- Formulario con envío por PHP -->
            <section id="artForm01">
                <h2>Formulario PHP</h2>

                <article class="artForm01">
                    <?php
                    // Comprobar si hay variables en la URL
                    // Si hay un variables de error en la URL, mostrar mensaje de error encima del input del tipo de error
                    if (isset($_GET['error'])) {
                        $error = htmlspecialchars($_GET['error']);
                        $campo = isset($_GET['campo']) ? htmlspecialchars($_GET['campo']) : '';  
                    }

                    $nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : '';
                    $telefono = isset($_GET['telefono']) ? htmlspecialchars($_GET['telefono']) : '';
                    $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';  
                    $mensaje = isset($_GET['mensaje']) ? nl2br(htmlspecialchars($_GET['mensaje'])) : ''; 
                    ?>

                    <h3>Encabezado Formulario PHPMailer</h3>
                    <div>
                        <div class="contenedor-form">
                            <?php
                            if (!isset($_GET['error']) && isset($_GET['nombre'])) { ?>
                                <h4>Solicitud enviada correctamente, gracias por contactarnos <?=$nombre?>.</h4> 
                                <?php
                                $nombre = '';
                            } ?>
                            <form action="<?=base_path()?>/app/artForm01" method="post" id="idForm">
                                <?php
                                if (isset($error)) { ?>
                                    <p class="error">Error en el campo: <?=$campo?> de tipo: <?=$error?></p>
                                <?php }
                                ?>

                                <!-- nombre -->
                                <label for="nombre">Nombre *</label>
                                <input type="text" name="nombre" id="nombre" minlength="3" maxlength="30" placeholder="Introduce nombre y apellido" value="<?=$nombre?>" />
                                
                                <!-- teléfono -->
                                <label for="telefono">Teléfono *</label>
                                <input type="tel" name="telefono" id="telefono" placeholder="Introduce nº móvil" value="<?=$telefono?>" />
                                
                                <!-- email -->
                                <label for="email">Correo electrónico</label>
                                <input type="email" name="email" id="email" placeholder="Introduce email" value="<?=$email?>" />
                                
                                <!-- mensaje -->
                                <label for="mensaje">Mensaje *</label>
                                <textarea name="mensaje" id="mensaje" rows="7" placeholder="Introduce comentario"><?=$mensaje?></textarea>
                                
                                <!-- aceptar términos -->
                                <div class="horizontal">
                                    <label for="aceptar">Aceptar términos y condiciones de privacidad *</label>
                                    <input type="checkbox" name="aceptar" id="aceptar" />
                                </div>
                                
                                <!-- captcha -->
                                <label for="captcha">Resuelve</label>
                                <div class="horizontal">
                                    <span id="num1">3</span>
                                    <span id="operacion">+</span>
                                    <span id="num2">8</span>
                                    <input type="text" name="respuesta" placeholder="Respuesta" id="respuesta" />
                                    <!-- Respuesta calculada OCULTA -->
                                    <input type="hidden" name="respSystem" id="respSystem" value="" />
                                </div>

                                <input type="hidden" name="lang" id="lang" value="<?= $lang ?>" />
                                <input type="hidden" name="url" id="url" value="<?= $url ?>" />
                                
                                <!-- enviar -->
                                <input type="submit" value="Enviar" class="btn-enviar" />
                            </form>
                        </div>

                        <div class="contenedor-info">
                            <ul>
                                <li>
                                    <a href="tel:+34943001002">
                                        <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/call.svg" alt="" title="" />
                                        <span>+34 943 001 002</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@panaderia.com" target="_blank">
                                        <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/mail.svg" alt="" title="" />
                                        <span>info@panaderia.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/677001002" target="_blank">
                                        <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/logo-whatsapp.svg" alt="" title="" />
                                        <span>677001001</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://maps.app.goo.gl/WDpiQwbN6gNkuW1NA" target="_blank" >
                                        <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/location.svg" alt="" title="" class="icono-mapa" />
                                        <span><strong>Área Escuela de Diseño y Nuevas Tecnologías</strong><br>C/ Juan Fermín, Juan F. Gilisagasti Kalea, 4, 1º<br>20018 Donostia / San Sebastián<br>Gipuzkoa</span>
                                    </a>
                                </li>
                            </ul>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46473.427156890815!2d-1.9325749123229952!3d43.280981418388954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b013f0513629%3A0x57e4ff3311f619d9!2s%C3%81rea%20Escuela%20de%20Dise%C3%B1o%20y%20Nuevas%20Tecnolog%C3%ADas!5e0!3m2!1ses!2ses!4v1768585015247!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </article>
            </section>

            <!-- Formulario con envío por XMLHTTPRequest (Ajax) -->
            <section id="artForm02">
                <h2>Formulario JS</h2>

                <article class="artForm02">

                    <h3>Encabezado Formulario FETCH API</h3>
                    <div>
                        <div class="contenedor-form">

                            <div id="modalEnvioOk" class="modal-envio-ok">
                                <div class="modal-content">
                                    <h3>¡Formulario enviado correctamente!</h3>
                                    <p id="mensajeOk"></p>
                                    <a href="#artForm02" class="boton" id="btnMostrarFormulario">Volver</a>
                                </div>
                            </div>

                            <form id="idFormAjax">
                                <p class="error" id="errorAjax"></p>

                                <!-- nombre -->
                                <label for="nombreAjax">Nombre *</label>
                                <input type="text" name="nombre" id="nombreAjax" minlength="3" maxlength="30" placeholder="Introduce nombre y apellido" />
                                
                                <!-- teléfono -->
                                <label for="telefonoAjax">Teléfono *</label>
                                <input type="tel" name="telefono" id="telefonoAjax" placeholder="Introduce nº móvil" />
                                
                                <!-- email -->
                                <label for="emailAjax">Correo electrónico</label>
                                <input type="email" name="email" id="emailAjax" placeholder="Introduce email" />
                                
                                <!-- mensaje -->
                                <label for="mensajeAjax">Mensaje *</label>
                                <textarea name="mensaje" id="mensajeAjax" rows="7" placeholder="Introduce comentario"></textarea>
                                
                                <!-- aceptar términos -->
                                 <div class="horizontal">
                                    <label for="aceptarAjax">Aceptar términos y condiciones de privacidad *</label>
                                    <input type="checkbox" name="aceptar" id="aceptarAjax" />
                                </div>
                                
                                <!-- captcha -->
                                <label for="captchaAjax">Resuelve</label>
                                <div class="horizontal">
                                    <span id="num1Ajax">3</span>
                                    <span id="operacionAjax">+</span>
                                    <span id="num2Ajax">8</span>
                                    <input type="text" name="respuesta" placeholder="Respuesta" id="respuestaAjax" />
                                    <!-- Respuesta calculada OCULTA -->
                                    <input type="hidden" name="respSystem" id="respSystemAjax" value="" />
                                </div>
                                
                                <!-- enviar -->
                                <input type="submit" value="Enviar" class="btn-enviar" id="btnEnviarAjax" />
                            </form>

                            <!-- Loader -->
                            <div class="moduleloader01" id="moduleloader01">
                                <svg version="1.1" id="L2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                    <circle fill="none" stroke="#000000" stroke-width="4" stroke-miterlimit="10" cx="50" cy="50" r="48"/>
                                    <line fill="none" stroke-linecap="round" stroke="#000000" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="85" y2="50.5">
                                    <animateTransform 
                                        attributeName="transform" 
                                        dur="2s"
                                        type="rotate"
                                        from="0 50 50"
                                        to="360 50 50"
                                        repeatCount="indefinite" />
                                    </line>
                                    <line fill="none" stroke-linecap="round" stroke="#000000" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="49.5" y2="74">
                                    <animateTransform 
                                        attributeName="transform" 
                                        dur="15s"
                                        type="rotate"
                                        from="0 50 50"
                                        to="360 50 50"
                                        repeatCount="indefinite" />
                                    </line>
                                </svg>
                            </div>
                        </div>
                        <div class="contenedor-info">
                            <ul>
                                <li>
                                    <a href="tel:+34943001002">
                                        <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/call.svg" alt="" title="" />
                                        <span>+34 943 001 002</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@panaderia.com" target="_blank">
                                        <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/mail.svg" alt="" title="" />
                                        <span>info@panaderia.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/677001002" target="_blank">
                                        <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/logo-whatsapp.svg" alt="" title="" />
                                        <span>677001001</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://maps.app.goo.gl/WDpiQwbN6gNkuW1NA" target="_blank" >
                                        <img src="<?= $_ENV['RUTA'] ?>/assets/img/system/location.svg" alt="" title="" class="icono-mapa" />
                                        <span><strong>Área Escuela de Diseño y Nuevas Tecnologías</strong><br>C/ Juan Fermín, Juan F. Gilisagasti Kalea, 4, 1º<br>20018 Donostia / San Sebastián<br>Gipuzkoa</span>
                                    </a>
                                </li>
                            </ul>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46473.427156890815!2d-1.9325749123229952!3d43.280981418388954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b013f0513629%3A0x57e4ff3311f619d9!2s%C3%81rea%20Escuela%20de%20Dise%C3%B1o%20y%20Nuevas%20Tecnolog%C3%ADas!5e0!3m2!1ses!2ses!4v1768585015247!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </article>
            </section>

            <!-- artForm -->
            <article class="artForm">
                <h3>Formulario de contacto</h3>

                <form action="<?=base_path()?>/app/artForm" method="post">

                    <?php
                    if( isset($_GET['campo']) ){
                        // si entro es que viene un error marcado en la url con query string
                        $campo = $_GET['campo'];
                        $error = $_GET['error'];
                        $nombre = $_GET['nombre'];
                        $telefono = $_GET['telefono'];
                        $email = $_GET['email'];
                        $mensaje = $_GET['mensaje'];
                        // echo "<p class='error'>Hay un error en el campo $campo de tipo $error</p>";
                    }
                    ?>

                    <span class="error"><?php if( isset($campo) && $campo == "nombre"){echo "Hay un error en el campo $campo de tipo $error";} ?></span>
                    <label for="nombre">Nombre *</label>
                    <!-- <input type="text" name="nombre" id="nombre" placeholder="* Escribe tu nombre" minlength="3" maxlength="40" required > -->
                    <input type="text" class='<?php if(isset($campo) && $campo == "nombre"){ echo "inputError";} ?>' name="nombre" id="nombre" placeholder="* Escribe tu nombre" value="<?php if(isset($nombre)){echo $nombre;}?>">

                    <span class="error"><?php if( isset($campo) && $campo == "telefono"){echo "Hay un error en el campo $campo de tipo $error";} ?></span>
                    <label for="tel">Teléfono</label>
                    <input type="tel" class='<?php if(isset($campo) && $campo == "telefono"){ echo "inputError";} ?>' name="tel" id="tel" placeholder="Aquí tu teléfono" value="<?php if(isset($tel)){echo $tel;}?>">

                    
                    <span class="error"><?php if( isset($campo) && $campo == "email"){echo "Hay un error en el campo $campo de tipo $error";} ?></span>
                    <label for="email">Email *</label>
                    <input type="email" class='<?php if(isset($campo) && $campo == "email"){ echo "inputError";} ?>' name="email" id="email" placeholder="* Correo electrónico" value="<?php if(isset($email)){echo $email;}?>">


                    <span class="error"><?php if( isset($campo) && $campo == "mensaje"){echo "Hay un error en el campo $campo de tipo $error";} ?></span>
                    <label for="mensaje">Comentarios</label>
                    <textarea name="mensaje" class='<?php if(isset($campo) && $campo == "mensaje"){ echo "inputError";} ?>' id="mensaje" placeholder="Escribe aquí tu mensaje"><?php if(isset($mensaje)){echo $mensaje;}?></textarea>

                    <span class="error"><?php if( isset($campo) && $campo == "terminos"){echo "Para poder enviar una consulta, debes aceptar los términos";} ?></span>
                    <div>
                        <input type="checkbox" name="terminos" id="aceptarTerminos">                        
                        <labelfor="aceptarTerminos">Aceptar <a href="<?=$_ENV['RUTA']?>/es/terminos-legales">términos y condiciones de privacidad</a></label>
                    </div>

                    <input type="submit" value="ENVIAR" class="boton">

                    <p>* Campos obligatorios</p>

                </form>

            </article>

        </section>
               
    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
