<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
            ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="public/images/gto.png">
    <title>Encuestas</title>
    <!-- Mobile Specific Metas
            ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="public/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("public/plugins/ionicons/ionicons.min.css");?>">
    <link rel="stylesheet" href="public/css/style.css">

</head>

<body style="background-image: url('public/images/signup-bg.jpg');  background-size: 100% 100%; background-repeat: no-repeat;">
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
                                        <a class="nav-link" href="<?php echo base_url('login/salir')?>">Cerrar
                                            Sesión</a>
                                    </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="container" id="nuevo">
        <div class="row">
            <button type="button" id="agregarPublicacion" class="btn btn-success" data-toggle="modal"
                data-target="#agregarNPublicacion">Agregar
                encuesta</button>
            <form class="form-inline" method="POST" action="<?php echo base_url('/ReportePdf')?>">
                <button class="btn" style="color: #286ea7;" type="submit"> Obtener PDF</button>
            </form>
        </div>

    </div>
    <!-- Button trigger modal -->

    <!--Modal Agregar nueva encuesta-->
    <form method="POST" action="<?php echo base_url('encuesta/create')?>" enctype="multipart/form-data">
        <div class="modal fade" id="agregarNPublicacion" tabindex="-1" role="dialog" aria-labelledby="publicacionTitle">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="publicacionTitle">Agregar Encuesta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">Seleccione la pregunta:</label>
                            <select class="form-select" name="id_pregunta">
                                <?php foreach($pregunta as $p):?>
                                <option value="<?=$p['id_pregunta'];?>"><?=$p['pregunta'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Respuesta No° 1:</label>
                            <input type="text" class="form-control" name="respuesta1" id="nombre" requred />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Respuesta No° 2:</label>
                            <input type="text" class="form-control" name="respuesta2" id="nombre" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Respuesta No° 3:</label>
                            <input type="text" class="form-control" name="respuesta3" id="nombre" />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Respuesta No° 4:</label>
                            <input type="text" class="form-control" name="respuesta4" id="nombre" />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Fecha Inicio:</label>
                            <input type="date" class="form-control" name="fecha_inicio" id="año" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Fecha Fin:</label>
                            <input type="date" class="form-control" name="fecha_fin" id="año" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Seleccione el estatus:</label>
                            <select class="form-select" id="estatus" name="estatus">
                                <option selected disabled>Seleccione un estatus</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>

                </div>
            </div>
        </div>
    </form>



    <!--Tabl de busqueda-->
    <div class="container" id="search">
        <div class="row">
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="head">
                            <h1 class="text-primary">Lista de Encuestas Cortas</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Pregunta</th>
                                        <th>Respuesta N° 1</th>
                                        <th>Respuesta N° 2</th>
                                        <th>Respuesta N° 3</th>
                                        <th>Respuesta N° 4</th>
                                        <th>Fecha Inicio</th>
                                        <th>Feha Final</th>
                                        <th>Estatus</th>
                                        <th>Fecha última modificación</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($encuestas as $e):?>
                                    <tr>
                                        <th><?=$e['id_encuestasC'] ?>
                                        <th><?=$e['pregunta'];?></th>
                                        <th><?=$e['respuesta1'];?></th>
                                        <th><?=$e['respuesta2'];?></th>
                                        <th><?=$e['respuesta3'];?></th>
                                        <th><?=$e['respuesta4'];?></th>
                                        <th><?=$e['fecha_inicio'];?></th>
                                        <th><?=$e['fecha_fin'];?></th>
                                        <th><?php if($e['estatus']=='A'): ?>
                                            <h5><span class="badge badge-success">Activo
                                                    <?php endif ?></span></h5>
                                            <?php if($e['estatus']=='B'): ?>
                                            <h5><span class="badge badge-danger">Inactivo
                                                    <?php endif ?></span></h5>
                                        </th>
                                        <th><?=$e['fecha_modificacion'];?></th>
                                        <th><a href="<?= base_url('encuesta/edit/'.$e['id_encuestasC']);?>"><img
                                                    width="40" height="40" class="edit" data-toggle="modal"
                                                    data-target="#modalEditar" src="public/images/icons/edit.svg"></a>
                                        </th>
                                        <th>
                                            <form action="<?= base_url('encuesta/delete/'.$e['id_encuestasC']);?>"
                                                method="POST">
                                                <center>
                                                    <button type="submit" style="border: #FFFFFF"><img width="40"
                                                            height="40" class="delete"
                                                            src="public/images/icons/trash.svg"></button>
                                                    <a href=""></a>
                                                </center>
                                            </form>
                                        </th>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Pregunta</th>
                                        <th>Respuesta N° 1</th>
                                        <th>Respuesta N° 2</th>
                                        <th>Respuesta N° 3</th>
                                        <th>Respuesta N° 4</th>
                                        <th>Fecha Inicio</th>
                                        <th>Feha Final</th>
                                        <th>Estatus</th>
                                        <th>Fecha última modificación</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container" id="">
        <div class="row">
            <button type="button" id="agregarPublicacion" class="btn btn-success" data-toggle="modal"
                data-target="#agregarNPregunta">Agregar
                pregunta</button>
        </div>

    </div>
    <!-- Button trigger modal -->

    <!--Modal Agregar nueva encuesta-->
    <form method="POST" action="<?php echo base_url('encuesta/createPregunta')?>">
        <div class="modal fade" id="agregarNPregunta" tabindex="-1" role="dialog" aria-labelledby="publicacionTitle">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="publicacionTitle">Agregar Pregunta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">Pregunta:</label>
                            <input type="text" class="form-control" name="pregunta" id="nombre" requred />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Seleccione el estatus:</label>
                            <select class="form-select" id="estatus" name="estatusP">
                                <option selected disabled>Seleccione un estatus</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>

                </div>
            </div>
        </div>
    </form>



    <!--Tabl de busqueda-->
    <div class="container" id="search">
        <div class="row">
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="head">
                            <h1 class="text-primary">Lista de Preguntas</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Pregunta</th>
                                        <th>Estatus</th>
                                        <th>Fecha última modificación</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($preguntas as $e):?>
                                    <tr>
                                        <th><?=$e['id_pregunta'] ?>
                                        <th><?=$e['pregunta'];?></th>
                                        <th><?php if($e['estatusP']=='A'): ?>
                                            <h5><span class="badge badge-success">Activo
                                                    <?php endif ?></span></h5>
                                            <?php if($e['estatusP']=='B'): ?>
                                            <h5><span class="badge badge-danger">Inactivo
                                                    <?php endif ?></span></h5>
                                        </th>
                                        <th><?=$e['fecha_modificacion'];?></th>
                                        <th><a href="<?= base_url('encuesta/editPregunta/'.$e['id_pregunta']);?>"><img
                                                    width="40" height="40" class="edit" data-toggle="modal"
                                                    data-target="#modalEditar" src="public/images/icons/edit.svg"></a>
                                        </th>
                                        <th>
                                            <form action="<?= base_url('encuesta/deletePregunta/'.$e['id_pregunta']);?>"
                                                method="POST">
                                                <center>
                                                    <button type="submit" style="border: #FFFFFF"><img width="40"
                                                            height="40" class="delete"
                                                            src="public/images/icons/trash.svg"></button>
                                                    <a href=""></a>
                                                </center>
                                            </form>
                                        </th>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Pregunta</th>
                                        <th>Estatus</th>
                                        <th>Fecha última modificación</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container" id="">
        <div class="row">
            <button type="button" id="agregarPublicacion" class="btn btn-success" data-toggle="modal"
                data-target="#agregarNEncuestaL">Agregar
                encuesta larga</button>
        </div>

    </div>
    <!-- Button trigger modal -->

    <!--Modal Agregar nueva encuesta-->
    <form method="POST" action="<?php echo base_url('encuesta/createEncuestaL')?>" enctype="multipart/form-data">
        <div class="modal fade" id="agregarNEncuestaL" tabindex="-1" role="dialog" aria-labelledby="publicacionTitle">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="publicacionTitle">Agregar Encuesta Larga</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">Descripción:</label>
                            <input type="text" class="form-control" name="descripcionL" id="descripcionL" requred />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Enlace:</label>
                            <input type="text" class="form-control" name="enlace" id="enlace" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Fecha Inicio:</label>
                            <input type="date" class="form-control" name="fecha_inicioL" id="fecha_inicioL" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Fecha Fin:</label>
                            <input type="date" class="form-control" name="fecha_finL" id="fecha_finL" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Seleccione el estatus:</label>
                            <select class="form-select" id="estatus" name="estatusL">
                                <option selected disabled>Seleccione un estatus</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>

                </div>
            </div>
        </div>
    </form>



    <!--Tabl de busqueda-->
    <div class="container" id="search">
        <div class="row">
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="head">
                            <h1 class="text-primary">Lista de Encuestas Largas</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Descripcion</th>
                                        <th>Enlace</th>
                                        <th>Fecha Inicio</th>
                                        <th>Feha Final</th>
                                        <th>Estatus</th>
                                        <th>Fecha última modificación</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($encuestasL as $el):?>
                                    <tr>
                                        <th><?=$el['id_encuestasL'] ?>
                                        <th><?=$el['descripcion'];?></th>
                                        <th><?=$el['enlace'];?></th>
                                        <th><?=$el['fecha_inicio'];?></th>
                                        <th><?=$el['fecha_fin'];?></th>
                                        <th><?php if($el['estatus']=='A'): ?>
                                            <h5><span class="badge badge-success">Activo
                                                    <?php endif ?></span></h5>
                                            <?php if($el['estatus']=='B'): ?>
                                            <h5><span class="badge badge-danger">Inactivo
                                                    <?php endif ?></span></h5>
                                        </th>
                                        <th><?=$el['fecha_modificacion'];?></th>
                                        <th><a
                                                href="<?= base_url('encuesta/editEncuestaLarga/'.$el['id_encuestasL']);?>"><img
                                                    width="40" height="40" class="edit" data-toggle="modal"
                                                    data-target="#modalEditar" src="public/images/icons/edit.svg"></a>
                                        </th>
                                        <th>
                                            <form
                                                action="<?= base_url('encuesta/deleteEncuestaLarga/'.$el['id_encuestasL']);?>"
                                                method="POST">
                                                <center>
                                                    <button type="submit" style="border: #FFFFFF"><img width="40"
                                                            height="40" class="delete"
                                                            src="public/images/icons/trash.svg"></button>
                                                    <a href=""></a>
                                                </center>
                                            </form>
                                        </th>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Descripcion</th>
                                        <th>Enlace</th>
                                        <th>Fecha Inicio</th>
                                        <th>Feha Final</th>
                                        <th>Estatus</th>
                                        <th>Fecha última modificación</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </tfoot>

                            </table>
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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
    let mensaje = '<?php echo $mensaje ?>';
    if (mensaje == '1') {
        swal('', 'Encuesta actualizada con éxito', 'success');
    } else if (mensaje == '2') {
        swal('', 'Encuesta creada con éxito', 'success');
    } else if (mensaje == '3') {
        swal('', 'El estatus de la encuesta es requerido', 'error');
    } else if (mensaje == '4') {
        swal('', 'Encuesta eliminada correctamente', 'success');
    } else if (mensaje == '5') {
        swal('', 'Pregunta actualizada con éxito', 'success');
    } else if (mensaje == '6') {
        swal('', 'Pregunta creada con éxito', 'success');
    } else if (mensaje == '7') {
        swal('', 'El estatus de la pregunta es requerido', 'error');
    } else if (mensaje == '8') {
        swal('', 'Pregunta eliminada correctamente', 'success');
    } else if (mensaje == '9') {
        swal('', 'Encuesta larga actualizada con éxito', 'success');
    } else if (mensaje == '10') {
        swal('', 'Encuesta larga creada con éxito', 'success');
    } else if (mensaje == '11') {
        swal('', 'El estatus de la encuesta larga es requerido', 'error');
    } else if (mensaje == '12') {
        swal('', 'Encuesta larga eliminada correctamente', 'success');
    }
    </script>
    <script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    </script>
</body>


</html>