
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Abogado</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Consulting Website Template Free Download" name="keywords">
        <meta content="Consulting Website Template Free Download" name="description">
        <link rel="icon" href="image.png"> </link>

        <!-- Favicon -->
        <link href="<?php echo $URL;?>/portada/portada_index/img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../portada/Portada_index/lib/animate/animate.min.css" rel="stylesheet">
        <link href="../portada/Portada_index/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../portada/Portada_index/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="far fa-clock"></i>
                                <h2>7:00 - 19:00</h2>
                                <p>Lunes - Viernes</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <h2>+591 62118262</h2>
                                <p>Reserva para la cita previa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="<?php echo $URL;?>/inicio/index.php" class="navbar-brand">Abogado Jurídico  "Diaz & Asociados "</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link active">Inicio</a>
                        <a href="contacto.php" class="nav-item nav-link">Contacto</a>
                        <div class="nav-item dropdown">
                            
                            <div class="dropdown-menu"> </div>
                        </div>
                        <a href="../index.php" class="nav-item nav-link">Cliente</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="../portada/Portada_index/img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Tu mejor Opciòn Requiere Nuestros Servicios con Los mejores Abogados "Legalfisca"</h1>
                            <p>
                                Servicios de Asesoramientos. Servicios de casos Legales. Segimientos de casos en Procesos,Regisrros Civiles y Otros....
                            </p>
                            <div class="carousel-btn">
                                
                                <a class="btn btn-play" data-toggle="modal" data-src="" data-target="#videoModal"><i class="fa fa-play"></i>Video</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="../portada/Portada_index/img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Optimizacion de Documentos</h1>
                            <p>
                                Seguientos de Casos variados . Procesos legales. consultorios activos en los casos,Documentaciones en Riesgos, Denuncias...
                            </p>
                            <div class="carousel-btn">
                                <a class="btn" href=""><i class="fa fa-link"></i>Get Started</a>
                                <a class="btn btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal"><i class="fa fa-play"></i>Watch Video</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="../portada/Portada_index/img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Finaciamintos Legales</h1>
                            <p>
                                Detalles financiera del caso, Costo de los procesos, Precio de Consultoria, Citas Programdas. totalidad de financiamiento Legal
                            </p>
                            <div class="carousel-btn">
                                <a class="btn" href=""><i class="fa fa-link"></i>Get Started</a>
                                <a class="btn btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal"><i class="fa fa-play"></i>Watch Video</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        
        
        <!-- Fact Start -->
        <div class="fact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="../portada/Portada_index/img/icon-4.png" alt="Icon">
                            <h2>Equipo Calificado</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="../portada/Portada_index/img/icon-1.png" alt="Icon">
                            <h2>Enfoque individual</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="../portada/Portada_index/img/icon-8.png" alt="Icon">
                            <h2>100% éxito</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="../portada/Portada_index/img/icon-6.png" alt="Icon">
                            <h2>
                                100% satisfacción</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="about-img">
                            <div class="about-img-1">
                                <img src="../portada/Portada_index/img/about-2.jpg" alt="Image">
                            </div>
                            <div class="about-img-2">
                                <img src="../portada/Portada_index/img/about-1.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header">
                            
                            <h2>30 años de Experiencia</h2>
                        </div>
                        <div class="about-text">
                            <p>
                            Un abogado es alguien que proporciona asesoramiento jurídico y representa a los clientes en asuntos legales. Pueden trabajar en diversos ámbitos, como la práctica privada, el derecho empresarial o el derecho de interés público. Los abogados desempeñan un importante papel en nuestra sociedad y su trabajo puede ser tan desafiante como gratificante. Por lo tanto, en este artículo veremos el perfil de un abogado, sus actividades, salario y habilidades destacables.casos Ganados.Trabajo con execelencia.Responsabilidad extrema.Tutores estricto,Calificado en sus servicios,etc.
                            </p>
                            <p>
                            Los documentos que preparan los abogados son necesarios para archivar los casos y presentarlos ante los tribunales. Estos documentos incluyen los alegatos, que son los documentos que exponen los hechos del caso y las cuestiones legales implicadas. También pueden ser necesarios otros documentos judiciales, como las mociones, que son peticiones al tribunal para que dicte una orden o una resolución determinada.
                            </p>
                            <a class="btn" href="">Conoce Nuestros servicios y más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header">
                    <p>Consultas de Servicio</p>
                    <h2>Nuestros mejores servicios de Optimizando la Gestión Jurídica y Financiera</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="../portada/Portada_index/img/icon-1.png" alt="Icon">
                            <h3>SERVICIOS DE CASOS LEGALES</h3>
                            <p>
                            Captura de información sobre casos legales, incluyendo detalles del cliente, fechas clave, partes involucradas.
                            </p>
                            <a href="">Saber mas...</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="../portada/Portada_index/img/icon-2.png" alt="Icon">
                            <h3>TIP DE USUARIO</h3>
                            <p>
                            Administra las credenciales y permisos de acceso de los usuarios, asegurando que solo tengan acceso a la información pertinente.
                            </p>
                            <a href="">Saber mas...</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="../portada/Portada_index/img/icon-3.png" alt="Icon">
                            <h3>CONTROL DE PAGOS</h3>
                            <p>
                            Control de pago Lleva un registro detallado de las transacciones financieras relacionadas con los casos legales y la gestión de la firma.
                            </p>
                            <a href="">Saber mas...</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="../portada/Portada_index/img/icon-4.png" alt="Icon">
                            <h3>DE REPORTES HUMANISTICO DE LOS CASOS</h3>
                            <p>
                            Desde este módulo se pueden diseñar y producir listados o reportes basados en las diferentes tablas de la base de datos. 
                            </p>
                            <a href="">Saber mas...</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="../portada/Portada_index/img/icon-5.png" alt="Icon">
                            <h3>Servicios Online </h3>
                            <p>
                                Estos servicios son unicamente para registrarse ty reservar su cita o asesoria personal.
                            </p>
                            <a href="">Saber mas...</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="../portada/Portada_index/img/icon-6.png" alt="Icon">
                            <h3>Tipos  de contactos</h3>
                            <p>
                                solo correo electronico, whatsapp,facebook.
                            </p>
                            <a href="">Saber mas...</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="../portada/Portada_index/img/icon-7.png" alt="Icon">
                            <h3>Categoria de Casos/servicios</h3>
                            <p>
                                casos legales
                                asesoramiento personal
                                tipos de Documentaciones
                                consultoria financiera
                            </p>
                            <a href="">Saber mas...</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="../portada/Portada_index/img/icon-8.png" alt="Icon">
                            <h3> Asesor virtual Online</h3>
                            <p>
                                Automatico aleatorio
                                Recomendado por el tribunal
                            </p>
                            <a href="">Saber mas...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Feature Start -->
        <div class="feature">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-6">
                        <div class="feature-img">
                            <img src="../portada/Portada_index/img/business-man.png" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header">
                            <p>Perfil</p>
                            <h2>POR QUE ELEJIR A SU ABOGADO ASESOR CON MAS CONFIABILIDAD?</h2>
                        </div>
                        <p>
                            DR.JOSE MANUEL SOLARES 
                            Sus habilidades de comunicación interpersonal son esenciales para los abogados porque deben ser capaces de comunicarse eficazmente con sus clientes, los miembros del tribunal y otros empleados. Esto incluye saber escuchar con atención, comprender cuestiones jurídicas complejas y explicarlas de forma clara y concisa. 
                        </p>
                        <div class="row counters">
                            <div class="col-6">
                                <i class="fa fa-user"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">100</h2>
                                    <p>RESPOSABLE</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-users"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">200</h2>
                                    <p>Interactua con los  Clientes</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-check"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">100</h2>
                                    <p>Caso Designado ganados con exactitud
                                    </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-running"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">500</h2>
                                    <p>Sus servicios son mas solicitados</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header">
                    <p>Perfil Profecional</p>
                    <h2>100% Garantizados</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="../portada/Portada_index/img/testimonial-1.jpg" alt="Image">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat
                        </p>
                        <h2>Nombre cliente</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="../portada/Portada_index/img/testimonial-2.jpg" alt="Image">
                        <p>
                            Phasellus pellentesque tempus pretium. Quisque in enim sit amet purus venenatis porttitor sed non velit. Vivamus vehicula finibus
                        </p>
                        <h2>Nombre cliente</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="../portada/Portada_index/img/testimonial-3.jpg" alt="Image">
                        <p>
                            Sed in lectus eu eros tincidunt cursus. Aliquam eleifend velit nisl. Sed et posuere urna, ut vestibulum massa. Integer quis magna
                        </p>
                        <h2>Nombre cliente</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="../portada/Portada_index/img/testimonial-4.jpg" alt="Image">
                        <p>
                            Sed in lectus eu eros tincidunt cursus. Aliquam eleifend velit nisl. Sed et posuere urna, ut vestibulum massa. Integer quis magna
                        </p>
                        <h2>Nombre cliente</h2>
                        <h3>Profession</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header">
                    <p>Represetantes juridicos Abogados Asiganados</p>
                    <h2>Son Doctores Administrador</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="../portada/Portada_index/img/team-1.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>DR.JOSE MANUEL SOLARE</h2>
                                <p>FUNDADOR & JEFE ASESOR PRINCIPAL</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="../portada/Portada_index/img/team-2.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>DR.MARCOS ANTELO NUÑEZ</h2>
                                <p>SOCIO DEL ESTUDIO JURIDICO</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="../portada/Portada_index/img/team-3.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>LIC.MARIO QUISPE HUALLPA</h2>
                                <p>FINACIADOR DEL  ESTUDIO JURIDICO </p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="../portada/Portada_index/img/team-4.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>DR.FABIAN MOLINA CAMPO</h2>
                                <p>SUSTITUTO DE JEFE ADMINISTRADOR</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header">
                    <p>Ponerse en contacto </p>
                    <h2>Ponte en contacto para cualquier Consulta</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Nuestra Oficina Central</h3>
                                <p>calle ballivian, Santa Cruz, Bolivia</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Numero de celular</h3>
                                <p>+591 62118262</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>informacion en EMAIL</h3>
                                <p>yesseniapedraza21@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn" type="submit" id="sendMessageButton">Enviar Mensaje</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header">
                    <p>Blog de consultorias </p>
                    <h2>Lo ùltimo de nuestro blog de consultoria</h2>
                </div>
                <div class="owl-carousel blog-carousel">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo $URL;?>/portada/portada_index/img/blog-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">optimozacion de Documentacion</h2>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Category</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2023</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                La mayoría de los abogados utilizan una pequeña parte de todo el potencial de Word. Si al menos tomaran en cuenta las herramientas fundamentales que brinda este procesador de texto para la elaboración de documentos jurídicos, ganarían un tiempo valioso a las rutinas que bien podrían invertir en tareas esenciales para aumentar su productividad.
                                </p>
                                <a class="btn" href="">Leer mas...</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo $URL;?>/portada/portada_index/img/blog-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">finazamiento de casos ganados</h2>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Categoria</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2023</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Cada caso es analizado con finalidad de un precio economico de sus casos ya sea lebes o grabes siempre pensando en su bienestar del cliente que solicita el servicio solicitado.
                                </p>
                                <a class="btn" href="">Leer mas...</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-3.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">Asesoria digital </h2>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Categoria</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2023</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                 en cada registro de un cliente se le denomina un asesor digital aleatorio para el servicio que registrara digitalmente.
                                </p>
                                <a class="btn" href="">Leer mas...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Nuetra Oficina cental</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Calle ballivian, Santa Cruz, Bolivia</p>
                                    <p><i class="fa fa-phone-alt"></i>+591 62118262</p>
                                    <p><i class="fa fa-envelope"></i>yesseniapedraza21@gmail.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Enlaces Rapidos</h2>
                                    <a href="">condiciones de Uso</a>
                                    <a href="">politica de privacidad</a>
                                    <a href="">Folletos</a>
                                    <a href="">Ayuda</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Boletin de informacion</h2>
                            <p>
                                este software esta netamente capasitado para cualquier tipo de registro o informacion que deseee el usuario...
                            </p>
                            <div class="form">
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn">Entregar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">LegalFisca</a>, Todos los servicos Reservados.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Diseño JT <a href="https://htmlcodex.com">HTML LegalFisca</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="../portada/Portada_index/lib/easing/easing.min.js"></script>
        <script src="../portada/Portada_index/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../portada/Portada_index/lib/waypoints/waypoints.min.js"></script>
        <script src="../portada/Portada_index/lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="../portada/Portada_index/mail/jqBootstrapValidation.min.js"></script>
        <script src="../portada/Portada_index/mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="../portada/Portada_index/js/main.js"></script>
    </body>
</html>