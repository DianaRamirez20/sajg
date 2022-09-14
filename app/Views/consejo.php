<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consejo</title>
    <link rel="icon" href="public/images/gto.png">

    <link rel="stylesheet" href="<?= base_url("public/plugins/bootstrap/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url('public/plugins/animate-css/animate.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css') ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url("public/plugins/animate-css/animate.css");?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/hexagono.css') ?>">
    <link rel="stylesheet" href="<?= base_url("public/plugins/ionicons/ionicons.min.css");?>">
    <link rel="stylesheet" href="public/fonts/material-icon/css/material-design-iconic-font.min.css">

</head>
<style>
#particles-js {
    width: 100%;
    position: fixed;
    z-index: -1;

}
</style>

<body>

    <div id="particles-js"> </div>
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
                                    <a class="nav-link" href="service.html">Estadísticas e Indicadores</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Información de interés para las Juventudes
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"
                                            href="<?php echo base_url('/apoyos_servicios')?>">Apoyos y servicios</a>
                                        <a class="dropdown-item"
                                            href="<?php echo base_url('/directorio')?>">Directorios</a>
                                        <a class="dropdown-item" href="<?php echo base_url('/temasView')?>">Temas</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Investigaciones y Evaluaciones
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo base_url('/red-investigadores')?>">Red
                                            de Investigadores</a>
                                        <a class="dropdown-item"
                                            href="<?php echo base_url('/centro-documental')?>">Centro documental</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo base_url('/consejo')?>"
                                        id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Sistema para el Desarrollo y Atención a las Juventudes de Guanajuato
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" class="sr-only sr-only-focusable" href="#about-us">¿Qué
                                            es?</a>
                                        <a class="dropdown-item" class="sr-only sr-only-focusable"
                                            href="#about">Consejo</a>
                                        <a class="dropdown-item" class="sr-only sr-only-focusable"
                                            href="#programa">Programa Estatal</a>
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

    <section id="about-us">

        <div class="lineas_caja_herramientas" style="margin-top:150px;">
            <div class="linea-pedagogica ribbon">
                Sistema para el Desarrollo y Atención a las Juventudes de Guanajuato
            </div>
            <div class="colmena">
                <div class="linea-fija">
                    <div class="hexagono linea-pedagogica"
                        onclick="document.location.href='https://univirtual.utp.edu.co/campus_univirtual/mod/scorm/view.php?id=32701'">
                        <div class="contenido-hexagono">
                            CONSEJO ESPECIAL DE LA JUVENTUD
                            <i class="zmdi zmdi-accounts" style=" font-size: 48px;"></i>
                        </div>
                    </div>

                    <div class="hexagono linea-pedagogica"
                        onclick="document.location.href='https://univirtual.utp.edu.co/campus_univirtual/mod/scorm/view.php?id=32717';">
                        <div class="contenido-hexagono">
                            PROGRAMA INTERINSTITUCIONAL / TRANSVERSAL
                            <i class="zmdi zmdi-book" style=" font-size: 48px;"></i>

                        </div>
                    </div>
                    <div class="hexagono linea-pedagogica"
                        onclick="document.location.href='https://univirtual.utp.edu.co/campus_univirtual/mod/scorm/view.php?id=32715';">
                        <div class="contenido-hexagono">
                            <div class="row">
                                SISTEMA DE INFORMACIÓN Y EVALUACIÓN
                            </div>
                            <div class="row">
                                <i class="zmdi zmdi-settings" style=" margin-left: 70px; font-size: 48px;"></i>
                            </div>
                        </div>
                    </div>

                    <div class="hexagono linea-pedagogica"
                        onclick="document.location.href='https://univirtual.utp.edu.co/campus_univirtual/mod/scorm/view.php?id=32724';">
                        <div class="contenido-hexagono">
                            <div class="row">
                                SISTEMA DE APOYOS FINANCIEROS Y NO FIANCIEROS
                            </div>
                            <div class="row">
                                <i class="zmdi zmdi-balance" style="  margin-left: 70px; font-size: 48px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>¿Qué es?</h1>
                    <h5 style="text-align: justify">
                        Es la instancia de coordinación institucional de los objetivos, métodos y actividades para la
                        evaluación de las intervenciones públicas de la Administración Pública Estatal.
                    </h5>
                </div>
                <div class="col">
                    <h1>Objetivo</h1>
                    <h5 style="text-align: justify">
                        Coordinar, orientar, integrar y estandarizar el proceso de evaluación de las politícas,
                        programas y proyectos de la administración, informar sobre su desempeño. generar y usar
                        información que fortalezca la formulación de politícas y la planeación estratpegica de la
                        Administración Pública Estatal.
                    </h5>
                </div>
            </div>
        </div>

    </section>



    <section id="about">
        <div id=color>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="block wow fadeInUp" data-wow-delay=".3s">
                        <section class="cd-intro">
                            <h2 class="subtitle wow fadeInUp animated text-center" data-wow-delay=".3s"
                                data-wow-duration="500ms" style="margin-top: 15px ;">
                                El Consejo Estatal es un órgano colegiado de deliberación, consulta, asesoría y
                                participación social,
                                con carácter interinstitucional, coadyuvante en el diseño, planeación, programación,
                                instrumentación,
                                segui
                            </h2>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-4">
                    <img src="public/images/estructura.jpeg" style="float:left; margin: 150px auto;">
                </div>
                <div class="col-md-6 mt-4">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Un elemento
                            danger de grupo de lista</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Un elemento
                            danger de grupo de lista</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Un elemento
                            danger de grupo de lista</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Un elemento
                            danger de grupo de lista</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Un elemento
                            danger de grupo de lista</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Un elemento
                            danger de grupo de lista</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Un elemento
                            danger de grupo de lista</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Un elemento
                            danger de grupo de lista</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Un elemento
                            danger de grupo de lista</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Un elemento
                            danger de grupo de lista</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Un elemento
                            danger de grupo de lista</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Un elemento
                            danger de grupo de lista</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Un elemento
                            danger de grupo de lista</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Un elemento
                            danger de grupo de lista</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Un elemento
                            danger de grupo de lista</a>


                    </div>
                </div>
            </div>

        </div>

    </section>

    <section id="programa">
        <div id="color">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="block wow fadeInUp" data-wow-delay=".3s">
                        <section class="cd-intro">
                            <h2 class="subtitle wow fadeInUp animated text-center" data-wow-delay=".3s"
                                data-wow-duration="500ms" style="margin-top: 30px ;">
                                Programa Estatal para el Desarrollo y Atención a las Juventudes del Estado de
                                Guanajuato

                            </h2>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="row">
                        <h1>Objetivo</h1>
                        <h5 style="text-align: justify">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum itaque voluptate nam sint,
                            eius facere molestias! Temporibus, deserunt, dignissimos iste id maxime, rerum ullam nostrum
                            magnam doloremque nemo qui minus.
                        </h5>
                    </div>
                    <div class="row mt-4">
                        <h1>¿Cómo se construyó?</h1>
                        <h5 style="text-align: justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus adipisci numquam id dolore
                            molestiae vitae explicabo? Qui at, maxime est molestias, rerum sit itaque quis eius omnis
                            nam excepturi doloribus?
                        </h5>
                    </div>
                    <div class="row mt-4">

                    </div>
                    <div class="row mt-4">
                        <h1>¿Quieres ver el avance de los indicadores del programa?</h1>
                        <a href="<?php echo base_url('/index')?>" target="_blank ">
                        <i class="zmdi zmdi-badge-check" style="margin-left: 180px; font-size: 28px;">Ver</i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="public/images/IMG_0937.jpg" style="height: 500px; width: 700px;">
                </div>


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
                            <a href="https://www.facebook.com/JuventudEsGto" target="_blank " class=Facebook">
                                <i class="ion-social-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/JuventudEsGto" target="_blank " class=Twitter">
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
    </footer>



    <script src="public/plugins/jQurey/jquery.min.js"></script>
    <script src="public/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url('public/plugins/wow-js/wow.min.js')?>  "></script>
    <script src="public/plugins/facncybox/jquery.fancybox.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo base_url('public/js/particles.js')?>"> </script>
    <script src="<?php echo base_url('public/js/particulas.js')?>"> </script>
    <script src="<?php echo base_url('public/js/hexagono.js')?>"> </script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="public/plugins/slick/slick.min.js"></script>
</body>

</html>