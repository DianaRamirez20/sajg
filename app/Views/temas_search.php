<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temas</title>
    <link rel="icon" href="<?php echo base_url("public/images/gto.png")?>">

    <link rel="stylesheet" href="<?= base_url("public/plugins/bootstrap/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url('public/plugins/animate-css/animate.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css') ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<style>
#color {
    width: 100%;
    height: 100%;
    position: fixed;
    z-index: -1;
    background: url("../images/jovenes.jpg") no-repeat 50%;
    background: linear-gradient(147deg, #3b89ff 10%, #595ea8 30%, #3b89ff 100%);
    opacity: 87%
}

#particles-js {
    width: 100%;
    position: fixed;
}
</style>

<body>
<div id="particles-js"> </div>
    <div id="color">
    </div>
    <section class="top-bar animated-header">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="headercolor">
                        <a class="navbar-brand" href="index.html">
                            <img class="logo" src="<?php echo base_url('public/images/logoeducafin.png')?>" alt="logo">
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
                                        <a class="dropdown-item" href="404.html">Apoyos y servicios</a>
                                        <a class="dropdown-item" href="gallery.html">Directorios</a>
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
    <div class="container" style=" margin-top: 145px; color: #fff ">
        <nav class=" navbar navbar-light bg-light">
            <a class="navbar-brand">Búsqueda por Tema</a>
            <form class="form-inline" method="POST" action="<?php echo base_url('temasView/Search')?>">
                <select class="form-select form-control mr-sm-2" placeholder="Tema" name="descripcionTema">
                    <option disabled selected>Seleccione el tema</option>
                    <?php foreach($datosT as $t):?>
                    <option><?=$t['descripcionTema'];?></option>
                    <?php endforeach;?>
                </select>

                <button class="btn" style="color: #286ea7" type="submit">Buscar</button>
                <form action="<?php echo base_url('temasView')?>">
                    <button class="btn" style="color: #286ea7; margin: 5px">Todas</button>
                </form>
            </form>

        </nav>
    </div>

    <section class="section" style="margin-top:30px">
        <div class="container">
            <div class="row">
                <?php foreach($buscarTema as $td):?>
                <div class="card col-md-3 col-sm-6 wow animated  animate__bounceIn box1" data-wow-delay="0.2s"" style="
                    margin: 25px">
                    <img class="card-img-top "
                        src="<?php echo base_url('public/images_temas/'.$td['id_tema'].'/'.$td['imagen'])?>"
                        style="height: 200px;" alt="Card image cap">
                    <div class="center wow animated bounceInLeft box1" data-wow-delay="0.2s">
                        <hr style="color: #0056b2;" />
                        <h1 class="" style="text-align:center"><?= $td['descripcionTema'] ?></h1>
                        <hr style="color: #0056b2;" />
                        <p class="card-text"><?= $td['descripcionMas']?> </p>
                    </div>
                    <a href="<?= $td['link']?>" target="_blank" class="btn btn-primary">Ver más</a>
                </div>
                <?php endforeach;?>
            </div>


        </div>
    </section>
    <script src="public/plugins/jQurey/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="public/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url('public/js/particles.js')?>"> </script>
    <script src="<?php echo base_url('public/js/particulas.js')?>"> </script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!-- template main js -->
    <script src="public/js/main.js"></script>
    <script src="<?php echo base_url('public/plugins/wow-js/wow.min.js')?>  "></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script>
    new WOW().init();
    </script>
</body>

</html>