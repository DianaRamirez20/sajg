<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- Basic Page Needs
        ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="public//images/icons/contact.svg">
    <title>Contactanos</title>
    <!-- Mobile Specific Metas
        ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Template CSS Files
        ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="public/plugins/bootstrap/bootstrap.min.css">
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="public/plugins/ionicons/ionicons.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="public/plugins/animate-css/animate.css">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="public/plugins/slider/slider.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="public/plugins/slick/slick.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="public/plugins/facncybox/jquery.fancybox.css">
    <!-- hover -->
    <link rel="stylesheet" href="public/plugins/hover/hover-min.css">
    <!-- template main css file -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('public/css/contacto.css')?>">
    <link rel="stylesheet" href="public/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
</head>

<body>

    <!--
        ==================================================
        Header Section Start
        ================================================== -->
    <section class="top-bar animated-header">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="headercolor">
                        <a class="navbar-brand" href="index.html">
                            <img class="logo" src="public/images/logoeducafin.png" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('/index')?>">Inicio
                                        <span class="sr-only">(current)</span>
                                    </a>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Estadísticas e Indicadores</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Información de interés para las Juventudes
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="">Apoyos y servicios</a>
                                        <a class="dropdown-item" href="">Directorios</a>
                                        <a class="dropdown-item" href="">Temas</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Investigaciones y Evaluaciones
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo base_url('/red-investigadores')?>">Red de Investigadores</a>
                                        <a class="dropdown-item" href="<?php echo base_url('/centro-documental')?>">Centro documental</a> 
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sistema para el Desarrollo y Atención a las Juventudes de Guanajuato
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="">¿Qué es?</a>
                                        <a class="dropdown-item" href="">Consejo</a>
                                        <a class="dropdown-item" href="">Programa Estatal</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <div class="wrapper">
        <div class="inner">
            <form id="contactanos" method="POST" action="<?php echo base_url('/Contactanos/EnviarMensaje')?>">
                <h3>Contactanos</h3>
                <p>Escríbenos ¿Falta algún tema?, Danos tu opinión sobre la plataforma.  

                </p>
                <label class="form-group">
                    <input type="text" class="form-control" id="nombre" name="nombre"required>
                    <span>Nombre..</span>
                    <span class="border"></span>
                </label>
                <label class="form-group">
                    <input type="text" class="form-control"  id="correo" name="correo" required>
                    <span for="">Correo..</span>
                    <span class="border"></span>
                </label>
                <label class="form-group">
                    <textarea name="mensaje" id="mensaje" class="form-control" required></textarea>
                    <span for="">Mensaje...</span>
                    <span class="border"></span>
                </label>
                <button type="submit" name="enviar" id="enviar" class="form-submit">Enviar
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="map-area">
                        <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Buscanos
                        </h2>
                        <div class="map">
                            <iframe
                                src="https://maps.google.com/maps?q=FRAY%20MART%C3%8DN%20DE%20VALENCIA%20102%20FRACC.%20SANTO%20DOMINGO,%20CP%2037557&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer id="footer">
        <div class="container">
            <div class="row content-justify-between">
                <div class="col-md-8 col-12 text-center text-lg-left text-md-left">
                    <p class="copyright">
                        FRAY MARTÍN DE VALENCIA 102 FRACC. SANTO DOMINGO, CP 37557, LEÓN, GTO.
                        TEL: 477 7103400
                        CALL CENTER 01 800 841 73 50 Y 01 800 832 62 72

                        © 2021 JuventudEsGTO, Derechos reservados
                    </p>
                </div>
                <div class="col-md-4 col-12">
                    <!-- Social Media -->
                    <ul class="social text-center text-md-right text-lg-right">
                        <li>
                            <a href="https://www.facebook.com/JuventudEsGto" target="_blank class=" Facebook">
                                <i class="ion-social-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/JuventudEsGto" target="_blank class=" Twitter">
                                <i class="ion-social-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/juventudesgto/" target="_blank" class="Linkedin">
                                <i class="ion-social-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="ion-social-instagram-outline" target="_blank" class="Google Plus">
                                <i class="ion-social-instagram-outline"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCNxjn155hP-SHqu1m4C4w4w" target="_blank"
                                class="Google Plus">
                                <i class="ion-social-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> <!-- /#footer -->


    <!-- Template Javascript Files
	================================================== -->
    <!-- jquery -->
    <script src="public/plugins/jQurey/jquery.min.js"></script>
    <!-- Form Validation -->
    <script src="public/plugins/form-validation/jquery.form.js"></script>
    <script src="public/plugins/form-validation/jquery.validate.min.js"></script>
    <!-- slick slider -->
    <script src="public/plugins/slick/slick.min.js"></script>
    <!-- bootstrap js -->
    <script src="public/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- wow js -->
    <script src="public/plugins/wow-js/wow.min.js"></script>
    <!-- slider js -->
    <script src="public/plugins/slider/slider.js"></script>
    <!-- Fancybox -->
    <script src="public/plugins/facncybox/jquery.fancybox.js"></script>
    <!-- template main js -->
    <script src="public/js/main.js"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        let mensaje = '<?php echo $mensaje ?>';
        if(mensaje =='1'){
            swal('','Se ha envíado con éxito','success');
        }else if(mensaje =='0'){
            swal('','Fallo al enviar!','error');
        }
    </script>
</body>

</html>