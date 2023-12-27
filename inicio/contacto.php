<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Abogado</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Consulting Website Template Free Download" name="keywords">
        <meta content="Consulting Website Template Free Download" name="description">
        <link rel="icon" href="image.png"> </link>
        <!-- Favicon -->
        <link href="<?php echo $URL;?>/img/favicon.ico" rel="icon">

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

    <body class="page">
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="far fa-clock"></i>
                                <h2>7:00 - 18:00</h2>
                                <p>Lunes - Viernes</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <h2>+591 62118262</h2>
                                <p>Reseva tu cita  </p>
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
                <a href="inicio/contacto.php" class="navbar-brand">Abogado Jurídico  "Diaz & Asociados"</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link">Inicio</a>
                        <a href="contacto.php" class="nav-item nav-link active">Contacto</a>
                        <div class="nav-item dropdown">
                            <div class="dropdown-menu">
                           
                            </div>
                        </div>
                        <a href="../index.php" class="nav-item nav-link">Cliente</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Contact Start -->
        <div class="contact mt-125">
            <div class="container">
                <div class="section-header">
                    <p>Ponerse en Contacto</p>
                    <h2>Póngase en contacto para cualquier consulta</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Nuestra oficina central</h3>
                                <p>Calle Ballivian, Santa Cruz, Bolivia</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Llamar por ayuda</h3>
                                <p>+591 62118262</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Correo electrónico para obtener información</h3>
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


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Nuestra Oficina Central</h2>
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
        <script src="<?php echo $URL;?>/portada/portada_index/lib/easing/easing.min.js"></script>
        <script src="<?php echo $URL;?>/portada/portada_index/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?php echo $URL;?>/portada/portada_index/lib/waypoints/waypoints.min.js"></script>
        <script src="<?php echo $URL;?>/portada/portada_index/lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="../portada/Portada_index/mail/jqBootstrapValidation.min.js"></script>
        <script src="../portada/Portada_index/mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="../portada/Portada_index/js/main.js"></script>
    </body>
</html>

