<?php get_header(); ?>
<div id="wrap">
<header class="header">
<!-- Navbar -->
<nav class="navbar navbar-expand-md fixed-top">
    <a class="navbar-brand" data-scroll href="#inicio">El Aladín de la Limpieza</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><img src="http://localhost/wordpress/wp-content/uploads/2020/08/icon-hamb.png" alt="Icono Menu Hamburguesa" /></span>
    </button>
    <div class="collapse navbar-collapse text-center " id="navbarResponsive">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" data-scroll href="#inicio">INICIO
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-scroll href="#nosotros">QUIENES SOMOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-scroll href="#servicios">SERVICIOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-scroll href="#galeria">GALERÍA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-scroll href="#contacto">CONTACTO</a>
            </li>
            
        </ul>
        <div class="container-social-icon d-sm-inline-flex">
            <span>
                <a class="social-icon" href="https://www.facebook.com/DiegoManuelArenhardt/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/f_icon.png" alt="Facebook link" />
                </a>
            </span>
            <span>
                <a class="social-icon" href="https://www.instagram.com/elaladindelalimpieza/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/i_icon.png" alt="Instagram link" />
                </a>
            </span>
        </div>
    </div>
</nav>
<!-- header -->
<div class="header" id="inicio">
    <div class="overlay"></div>
    <div class="row">
        <div class="maintitle col-sm-12 col-lg-6">
            <h1>El Aladín <br> de la Limpieza</h1>
            <p>Brindamos <span> servicios de limpieza </span> de alta calidad con la atención profesional que nuestros clientes merecen.</p>
        </div>
    </div>
</div>
</header><!--header-->
<div class="content">
<main id="lineBack">
            <div class="lineBack"></div>
            <!-- quienes somos -->
            
            <section id="nosotros">
                <div class="d-flex flex-nowrap">
                    <img class="imgQS img-fluid align-self-center" src="<?php echo get_template_directory_uri(); ?>/images/quienes_somos_img.jpg" alt="Sección quiénes somos: Tres hombres limpiando un piso" />
                    <div class="container contQs">
                    	<div class="row">
                    		<div class="col-sm-12 align-self-center" data-aos="fade-up">
		                        <h2>QUIENES SOMOS</h2>
                                <hr class="line">
		                        <p>Nuestra misión es sencilla: proporcionar servicios de alta calidad en tiempo y forma.
		                        </p>
		                        <p>Desde que se fundó, El Aladin de la limpieza ha tenido renombre en la 
		                        industria. Contamos con la experiencia y las capacidades necesarias para 
		                        resolver cualquier tipo de trabajo que requiera. Al contratarnos, los clientes 
		                        saben exactamente qué esperar: profesionalismo, puntualidad, eficiencia y 
		                        resultados excepcionales.
		                        </p>
		                        <p>Para obtener más información, contáctenos hoy mismo.
		                        </p>
		                        <div class="btn-contact d-flex align-items-center justify-content-center">
		                            <a data-scroll href="#contacto">CONTACTAR</a>
		                        </div>
                            </div>
    		            </div>    
                    </div>
                </div>
            </section>
            <!-- servicios -->
            <section id="servicios">
                <div class="contSv">
                    <div class="contImg-1" data-aos="fade-up">
                        <div class="divOver">
                            <div class="info">
                                <h2>LAVADO DE COLCHONES Y SOMMIERS</h2>
                                <p>Nuestros clientes nos eligen porque saben exactamente qué esperar: profesionalismo, eficiencia y resultados excepcionales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="contImg-2" data-aos="fade-down">
                        <div class="divOver">
                            <div class="info">
                                <h2>LAVADO DE ALFOMBRAS EN GENERAL</h2>
                                <p>Con el compromiso de un trabajo profesional eficiente y a término. Nos aseguraremos de que esté satisfecho en cada etapa del proceso.</p>
                            </div>
                        </div>
                    </div>
                    <div class="contImg-3" data-aos="fade-up">
                        <div class="divOver">
                            <div class="info">
                                <h2>LAVADO DE TAPIZADOS EN GENERAL</h2>
                                <p>Experimente usted mismo cómo atendemos las necesidades de cada cliente, garantizando los mejores resultados.</p>
                            </div>
                        </div>
                    </div>
                    <div class="contImg-4" data-aos="fade-down">
                        <div class="divOver">
                            <div class="info">
                                <h2>LAVADO DE VEHÍCULOS EN GENERAL</h2>
                                <p>Contamos con la experiencia y las capacidades necesarias para resolver cualquier tipo de trabajo que requiera.</p>
                            </div>
                        </div>
                    </div>    
                </div>
            </section>
            <!-- galeria -->
            <section id="galeria">
                <figure class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class='embedsocial-album' data-ref="a4d990a79472f9538e46f254cc154b99d967adc6"></div>
                            <script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/embedscript/ei.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialScript"));
                            </script> 
                        </div>
                    </div>
                </figure>
            </section>
            <!-- contacto -->
            <section id="contacto">
                <div class="containerContact d-flex inline-block justify-content-center">
                    <div class="containerFormContact">
                        <div id="reply" class="text-center activeReplay">
                            <p class="activeReplay"><strong>¡Gracias por contactarte con<br>El Aladin de la Limpieza!</strong><br><br>Te responderemos lo antes posible.</p>
                        </div>
                        <h2>CONTACTANOS!</h2>
                        <hr class="line">
                        <div class="d-flex flex-lg-nowrap">
                            <div class="dv1Form">
                                <form class="col-sm-12 px-0" id="contact-form" method="POST" action="https://blazing-personnel.000webhostapp.com/wp-content/themes/custom/contact.php">
                                    <div class="form-group">
                                        <select class="form-control rounded-0" id="dropdown" name="dropdown">
                                            <option selected>Seleccione el motivo de contacto...</option>
                                            <option>Quiero recibir una cotización</option>
                                            <option>Quiero dejar una propuesta comercial</option>
                                            <option>Quiero sumarme al equipo</option>
                                            <option>Quiero dejar un comentario</option>
                                        </select>
                                    </div>
                                    <div class="form-group name">
                                        <input type="text" class="form-control rounded-0" name="name" placeholder="Nombre y Apellido" id="fullName" required
                                         />
                                    </div>
                                    <div class="form-group mail">
                                        <input type="email" class="form-control rounded-0" placeholder="Correo electrónico" name="email" id="email" required />
                                    </div>
                                    <div class="form-group phone">
                                        <input type="text" class="form-control rounded-0" placeholder="Teléfono" name="phone" id="phone" required />
                                    </div>
                                    <div class="form-group coments">
                                        <textarea class="form-control rounded-0" rows="6" placeholder="Comentarios..." name="message" id="message" required ></textarea>
                                    </div>
                                    <div>
                                        <button type="submit"  id="submit-btn">ENVIAR</button>
                                    </div>
                                </form>
                            </div>
                            <div class="dv2Info">
                                <div class="infoContact">
                                    <div class="d-flex flex-nowrap">
                                        <span>
                                            <img src="http://localhost/wordpress/wp-content/uploads/2020/08/dir_icon.png" alt="Icono de ubicación" />
                                        </span>
                                        <p>Av. Alvarez Thomas 2849, <br> Capital Federal, CP 1431</p>
                                    </div>
                                    <div class="d-flex flex-nowrap">
                                        <span>
                                            <img src="http://localhost/wordpress/wp-content/uploads/2020/08/email_icon.png" alt="Icono de email">
                                        </span>
                                        <p>elaladindelalimpieza@gmail.com</p>
                                    </div>
                                    <div class="d-flex flex-nowrap">
                                        <span>
                                            <img src="http://localhost/wordpress/wp-content/uploads/2020/08/phone_icon.png" alt="Icono de teléfono">
                                        </span>
                                        <p>+56 9 67358077</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mapContact">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1642.6014746798344!2d-58.48120154413358!3d-34.57373098046729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb665d7ea42bb%3A0xc3c1700922815c9f!2sAv.%20%C3%81lvarez%20Thomas%202849%2C%20C1431FOF%20CABA!5e0!3m2!1ses-419!2sar!4v1591911371121!5m2!1ses-419!2sar"frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>   
                </div>              
                <div class="container-greeting-social d-flex align-content-center justify-content-center flex-wrap">
                    <div class="greetingVisit text-center">
                        <h3>¡Muchas gracias por tu visita!</h3>
                    </div>
                    <div class="contSocial d-flex justify-content-center">
                        <div>
                            <a href="https://www.facebook.com/DiegoManuelArenhardt/" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/f_icon.png" alt="Facebook link" />
                            </a>
                        </div>
                        <div>
                            <a href="" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/i_icon.png" alt="Instagram link" />
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
</div><!--.content-->

<?php wp_footer(); //Crucial footer hook! ?>
<?php get_footer(); ?>
</div><!--.wrap>