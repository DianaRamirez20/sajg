<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/images/gto.png">
    <title>Red de investigadores</title>
    <link rel="stylesheet" href="<?= base_url("public/plugins/bootstrap/bootstrap.min.css");?>">
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="<?= base_url("public/plugins/ionicons/ionicons.min.css");?>">
    <!-- animate css -->
    <link rel="stylesheet" href="<?= base_url("public/plugins/animate-css/animate.css");?>">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="<?= base_url("public/plugins/slider/slider.css");?>">
    <!-- slick slider -->
    <link rel="stylesheet" href="<?= base_url("public/plugins/slick/slick.css");?>">
    <!-- Fancybox -->
    <link rel="stylesheet" href="<?= base_url("public/plugins/facncybox/jquery.fancybox.css");?>">
    <!-- hover -->
    <link rel="stylesheet" href="<?= base_url("public/plugins/hover/hover-min.css);?>");?>">

    <!-- template main css file -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css')?>">
</head>

<body>
<section   class="top-bar animated-header">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12" >
                    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="headercolor">
                        <a class="navbar-brand" href="index.html">
                            <img  class="logo" src="public/images/logoeducafin.png" alt="logo">
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
                                    <a class="nav-link" href="service.html">Estadísticas e Indicadores</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Información de interés para las Juventudes
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo base_url('/apoyos_servicios') ?>">Apoyos y servicios</a>
                                        <a class="dropdown-item" href="<?php echo base_url('/directorio')?>">Directorios</a>
                                        <a class="dropdown-item" href="<?php echo base_url('/temasView')?>">Temas</a>
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
                                        <a class="dropdown-item" href="404.html">¿Qué es?</a>
                                        <a class="dropdown-item" href="gallery.html">Consejo</a>
                                        <a class="dropdown-item" href="single-post.html">Programa Estatal</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url() ?>/login">Iniciar Sesión</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>



    <section id="hero-area" style="background-image: url('public/images/neuronas.jpg');">
        <div class=" container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block wow fadeInUp" data-wow-delay=".3s">
                    <!-- Slider -->
                    <section class="cd-intro">
                        <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s">
                            <span>
                                Red de Investigadores en Juventud
                            </span><br>
                        </h1>
                    </section>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="integrantes" class="works service-page">
        <div class="container">
            <h2 class="subtitle wow fadeInUp animated text-center" data-wow-delay=".3s" data-wow-duration="500ms">
                Proponer estrategias sólidas a fin de consolidar el Sistema Estatal para el Desarrollo y Atención a las
                Juventudes del estado de Guanajuato.</h2>
            <div class="row">
                <?php foreach($datos as $d):?>
                <div class="card col-md-3 col-sm-6">
                    <img class="card-img-top" src="<?php echo base_url('public/images_integrantes/'.$d['id_investigadores'].'/'.$d['imagen'])?>" alt="Card image cap">
                    <div class="card-body">
                        <h4>
                            <a href="#">
                                <?=$d['nombre']?>
                            </a>
                        </h4>
                        <p class="card-text"><?=$d['descripcion']?></p>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>

    <section class="about-feature ">
        <h2 class="subtitle wow fadeInUp animated text-center" id="objetivos" data-wow-delay=".3s"
            data-wow-duration="500ms">Objetivos para el plan de trabajo</h2>
        <div class="container-fluid">
            <div class="row">
                <?php foreach($objetivos as $o):?>
                <div class="col-md-3 col-sm-6" id="frases">
                    <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                        <p>
                            <?=$o['descripcion']?>
                        </p>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="subtitle wow fadeInUp animated text-center">Comisiones de trabajo Consejo Estatal para
                        las Juventudes</h2>
                </div>
                <?php foreach($comisiones as $c):?>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                        <div class="team-img">
                        <img class="team-pic" src="<?php echo base_url('public/images_comisiones/'.$c['id_comisiones'].'/'.$c['imagen'])?>" alt="Card image cap">
                        </div>
                        <p class="team_text"><?=$c['descripcion']?></p>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>

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

</body>

</html>