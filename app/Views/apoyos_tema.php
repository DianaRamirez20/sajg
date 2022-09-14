<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apoyos y Servicios</title>
    <link rel="icon" href="<?php echo base_url('public/images/gto.png')?>">

    <link rel="stylesheet" href="<?= base_url("public/plugins/bootstrap/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?= base_url("public/plugins/ionicons/ionicons.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url('public/plugins/animate-css/animate.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />


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
                                    <a class="nav-link" href="<?php echo base_url('/index') ?>">Inicio
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
                                            href="<?php echo base_url('/apoyos_servicios') ?>">Apoyos y servicios</a>
                                        <a class="dropdown-item" href="gallery.html">Directorios</a>
                                        <a class="dropdown-item" href="<?php echo base_url('/temasView') ?>">Temas</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Investigaciones y Evaluaciones
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"
                                            href="<?php echo base_url('/red-investigadores') ?>">Red
                                            de Investigadores</a>
                                        <a class="dropdown-item"
                                            href="<?php echo base_url('/centro-documental') ?>">Centro documental</a>
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

    <section id="botones">
        <div class="container" style=" color: #000000; ">
            <nav class="">
                <form class="form-inline" method="POST" action="<?php echo base_url('apoyos/buscar') ?>">
                    <div class="container" style="margin-top: 170px;">
                        <div class="row  mb-3">
                            <div class="col">
                                <select class="form-select form-control" name="tema">
                                    <option disabled selected>Tema</option>
                                    <?php foreach($datosT as $t):?>
                                    <option value="<?=$t['id_tema'];?>"><?=$t['descripcionTema'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select form-control" name="derecho">
                                    <option disabled selected>Derecho social</option>
                                    <?php foreach($datosDS as $ds):?>
                                    <option value="<?=$ds['id_derecho'];?>"><?=$ds['descripcion'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select form-control" name="dependencia">
                                    <option disabled selected>Dependencia</option>
                                    <?php foreach($datosD as $d):?>
                                    <option value="<?=$d['id_dependencia'];?>"><?=$d['descripcion_D'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select form-control mr-sm-2" name="apoyo">
                                    <option disabled selected>Tipo de Apoyo</option>
                                    <?php foreach($datosTS as $ts):?>
                                    <option value="<?=$ts['id_tipo_apoyo'];?>"><?=$ts['descripcion_A'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="col">
                                <input class="form-control mr-sm-2" type="input" name="año" placeholder="Año"
                                    aria-label="Año">
                            </div>
                            <div class="col">
                                <button class="btn" style="color: #286ea7" type="submit">Buscar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </nav>
        </div>
    </section>

    <section id="tabla">
        <div class="container" style="margin-top: 50px;  z-index: 99;">
            <table id="example" class="table table-striped table-bordered" style="width:100%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Orden de gobierno</th>
                        <th>Dependencia</th>
                        <th>Programa Social</th>
                        <th>Estatus</th>
                        <th>Año</th>
                        <th>Objetivo General del Programa Social</th>
                        <th>Población Objetivo</th>
                        <th>Rango de edad para acceder al apoyo</th>
                        <th>Tipo de apoyo</th>
                        <th>Monto anual del apoyo económico</th>
                        <th>Responsable o Enlace del programa</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Página web al programa</th>
                        <th>Link a la normatividad</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($buscarTema as $b):?>
                    <tr>
                        <th><?=$b['id_apoyos'] ?>
                        <th><?=$b['orden_gobierno'];?></th>
                        <th><?=$b['id_dependencia'];?></th>
                        <th><?=$b['programa_Social'];?></th>
                        <th><?php if($b['estatus']=='A'): ?>
                            <h5><span class="badge badge-success">Activo
                                    <?php endif ?></span></h5>
                            <?php if($b['estatus']=='B'): ?>
                            <h5><span class="badge badge-danger">Inactivo
                                    <?php endif ?></span></h5>
                        </th>
                        <th><?=$b['año']?></th>
                        <th><?=$b['objetivo_General'];?></th>
                        <th><?=$b['poblacion_Objetivo']?></th>
                        <th><?=$b['rango_Edad'];?></th>
                        <th><?=$b['id_tipo_apoyo']?></th>
                        <th><?=$b['monto_Anual'];?></th>
                        <th><?=$b['responsable']?></th>
                        <th><?=$b['telefono'];?></th>
                        <th><?=$b['correo'];?></th>
                        <th><?=$b['pagina_Web'];?></th>
                        <th><?=$b['link_normartividad'];?></th>

                    </tr>
                    <?php endforeach;?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Orden de gobierno</th>
                        <th>Dependencia</th>
                        <th>Programa Social</th>
                        <th>Estatus</th>
                        <th>Año</th>
                        <th>Objetivo General del Programa Social</th>
                        <th>Población Objetivo</th>
                        <th>Rango de edad para acceder al apoyo</th>
                        <th>Tipo de apoyo</th>
                        <th>Monto anual del apoyo económico</th>
                        <th>Responsable o Enlace del programa</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Página web al programa</th>
                        <th>Link a la normatividad</th>
                    </tr>
                </tfoot>
            </table>
        </div>

    </section>

    <footer id="footer">
        <div class="container" style=" background: #ffffff;">
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


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            bFilter: false,
            lengthChange: false,
            scrollX: true,
            buttons: ['excel']
        });

        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');
    });
    </script>
    <script src="<?php echo base_url('public/js/particles.js') ?>"> </script>
    <script src="<?php echo base_url('public/js/particulas.js') ?>"> </script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js">
    </script>

</body>

</html>