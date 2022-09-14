<?php 
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Documental</title>
    <link rel="icon" href="<?php echo base_url('public/images/gto.png')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/plugins/bootstrap/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/plugins/ionicons/ionicons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css') ?>">
</head>
<style>
#particles-js {
    width: 100%;
    height: 100%;
    position: fixed;
    z-index: -1;
}
</style>

<body>
    <div id="particles-js"> </div>
    <section class="top-bar animated-header" style="z-index: 99;">
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
                                    <a class="nav-link"
                                        href="<?php echo base_url('/centro-documental')?>">CENDOC</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="<?php echo base_url('/red-investigadores')?>">Red de Investigadores</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url() ?>/login">Iniciar Sesión</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('/contactanos')?>">Contactanos</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <div class="container" style=" margin-top: 150px; z-index: 99;">
        <nav class=" navbar navbar-light bg-light">
            <a class="navbar-brand">Búsqueda de Investigaciones</a>
            <form class="form-inline" method="POST" action="<?php echo base_url('centro-documental/ByNombre')?>">
                <input class="form-control mr-sm-2" type="input" name="nombre" id="nombre" placeholder="Nombre"
                    aria-label="Nombre">
                <select class="form-select form-control mr-sm-2" placeholder="Tema" name="id_tema">
                    <option disabled selected>Seleccione el tema</option>
                    <?php foreach($datosT as $t):?>
                    <option value="<?=$t['id_tema'];?>"><?=$t['descripcionTema'];?></option>
                    <?php endforeach;?>
                </select>
                <button class="btn" style="color: #286ea7" type="submit">Buscar</button>
               
            </form>
            <form action="<?php echo base_url('centro-documental')?>">
                    <button class="btn" style="color: #286ea7; margin: 5px">Todas</button>
                </form>

        </nav>
    </div>
    <section>
        <div class="container" style="margin-top: 30px; z-index: 99;">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <?php foreach($buscarNombre as $d):?>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                  
                                    <?=$d['descripcionTema'];?>
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo base_url('public/images_investigaciones/'.$d['id_investigacion'].'/'.$d['informe'])?>"
                                            width="500" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <div class=row>

                                            <h1 class="text-primary">
                                            <?= $d['nombre'] ?>
                                            </h1>
                                       
                                        
                                    </div>
                                    <div class=row>
                                        <?= $d['año'] ?>
                                    </div>
                                    <div class=row style="margin-top:15px">
                                        <?= $d['descripcion'] ?>
                                    </div>
                                    <div class="row" style="margin-top:15px">

                                        <?php if($d['archivo'] == !null):?>

                                            <a href="<?php echo base_url('public/documentos_investigaciones/'.$d['id_investigacion'].'/'.$d['archivo'])?>" target="_blank" class="btn-success btn-lg" style="margin: 5px">Ver documento</a>
                                        <?php endif?>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
          
        </div>

    </section>

    <footer id="footer" style="z-index: 99;">
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

    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/main.js"></script>
    <script src="<?php echo base_url('public/js/particles.js')?>"> </script>
    <script src="<?php echo base_url('public/js/particulas.js')?>"> </script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

</body>

</html>