<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="public/images/gto.png">
    <title>Apoyos y Servicios</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="public/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/plugins/ionicons/ionicons.min.css">
    <link rel="stylesheet" href="public/plugins/animate-css/animate.css">
    <link rel="stylesheet" href="public/plugins/slider/slider.css">
    <link rel="stylesheet" href="public/plugins/slick/slick.css">
    <link rel="stylesheet" href="public/plugins/facncybox/jquery.fancybox.css">
    <link rel="stylesheet" href="public/plugins/hover/hover-min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="<?= base_url('public/libs/sweet2/dist/sweetalert2.min.css')?>">

</head>

<body style="background-image: url('public/images/books.png')">
    <header class="top-bar animated-header">
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                                            <a class="dropdown-item" href="<?php echo base_url('/apoyosAdmin')?>">Apoyos
                                                y servicios</a>
                                            <a class="dropdown-item"
                                                href="<?php echo base_url('/directorio')?>">Directorios</a>
                                            <a class="dropdown-item"
                                                href="<?php echo base_url('/temasView')?>">Temas</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Investigaciones y Evaluaciones
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item"
                                                href="<?php echo base_url('/red-investigadores')?>">Red de
                                                Investigadores</a>
                                            <a class="dropdown-item"
                                                href="<?php echo base_url('/centro-documental')?>">Centro
                                                documental</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sistema para el Desarrollo y Atención a las Juventudes de Guanajuato
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="<?php echo base_url('/consejo')?>">¿Qué
                                                es?</a>
                                            <a class="dropdown-item"
                                                href="<?php echo base_url('/consejo')?>">Consejo</a>
                                            <a class="dropdown-item" href="<?php echo base_url('/consejo')?>">Programa
                                                Estatal</a>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link"><?php echo session('nombre')?></a>
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
        </main>
    </header>
    <div class="container" id="nuevo">
        <div class="row">
            <button type="button" id="agregarPublicacion" class="btn btn-success" data-toggle="modal"
                data-target="#agregarPublicacionN">Agregar apoyo y servicio</button>

        </div>

    </div>

    <!--Modal Agregar nuevo apoyo y servicio-->
    <form method="POST" action="<?php echo base_url('apoyosAdmin/createApoyo')?>" enctype="multipart/form-data">
        <div class="modal fade" id="agregarPublicacionN" tabindex="-1" role="dialog" aria-labelledby="publicacionTitle">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="publicacionTitle">Agregar Apoyo y Servicios</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">Orden de gobierno:</label>
                            <input type="text" class="form-control" name="orden" id="orden" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Derecho:</label>
                            <select class="form-select form-control" name="id_derecho">
                                <?php foreach($derechoOrdenado as $d):?>
                                <option value="<?=$d['id_derecho'];?>"><?=$d['descripcion'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Tema:</label>
                            <select class="form-select form-control" name="tema">
                                <?php foreach($temaOrdenado as $t):?>
                                <option value="<?=$t['id_tema'];?>"><?=$t['descripcionTema'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Dependencia:</label>
                            <select class="form-select form-control" name="dependencia">
                                <?php foreach($dependenciaOrdenado as $d):?>
                                <option value="<?=$d['id_dependencia'];?>"><?=$d['descripcion_D'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Programa Social:</label>
                            <input class="form-control" name="programa" type="text" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Seleccione el estatus:</label>
                            <select class="form-select form-control" id="estatus" name="estatus">
                                <option selected disabled>Seleccione un estatus</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Año:</label>
                            <input class="form-control" name="año" type="number" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Objetivo General del Programa Social:</label>
                            <input class="form-control" name="objetivo_general" type="text" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Rango de edad para acceder al apoyo:</label>
                            <input class="form-control" name="rango" type="text" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Población Objetivo:</label>
                            <input class="form-control" name="poblacion" type="text" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Tipo de apoyo:</label>
                            <select class="form-select form-control" name="apoyo">
                                <?php foreach($apoyoOrdenado as $d):?>
                                <option value="<?=$d['id_tipo_apoyo'];?>"><?=$d['descripcion_A'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Monto anual del apoyo económico:</label>
                            <input class="form-control" name="monto" type="number" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Presupuesto:</label>
                            <input class="form-control" name="presupuesto" type="number" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Responsable o Enlace del programa:</label>
                            <input class="form-control" name="responsable" type="text" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Teléfono:</label>
                            <input class="form-control" name="telefono" type="tel" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Correo:</label>
                            <input class="form-control" name="correo" type="email" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Página web al programa:</label>
                            <input class="form-control" name="pagina" type="text" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Normatividad:</label>

                            <select class="form-select form-control" name="normatividad">
                                <?php foreach($normatividadOrdenado as $n):?>
                                <option value="<?=$n['id_normatividad'];?>"><?=$n['descripcion_N'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Link a la normatividad:</label>
                            <input class="form-control" name="link" type="text" required />
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
    <div class="container" id="">
        <div class="row">
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="head">
                            <h1 class="text-primary">Lista de Apoyos y Servicios</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Orden de gobierno</th>
                                        <th>Derecho</th>
                                        <th>Tema</th>
                                        <th>Dependencia</th>
                                        <th>Programa Social</th>
                                        <th>Estatus</th>
                                        <th>Año</th>
                                        <th>Objetivo General del Programa Social</th>
                                        <th>Población Objetivo</th>
                                        <th>Rango de edad para acceder al apoyo</th>
                                        <th>Tipo de apoyo</th>
                                        <th>Monto anual del apoyo económico</th>
                                        <th>Presupuesto</th>
                                        <th>Responsable o Enlace del programa</th>
                                        <th>Teléfono</th>
                                        <th>Correo</th>
                                        <th>Página web al programa</th>
                                        <th>Normatividad</th>
                                        <th>Link a la normativid</th>
                                        <th>Fecha última modificación</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($datos as $d):?>
                                    <tr>
                                        <th><?=$d['id_apoyos'] ?>
                                        <th><?=$d['orden_gobierno'];?></th>
                                        <th><?=$d['descripcion'];?></th>
                                        <th><?=$d['descripcionTema'];?></th>
                                        <th><?=$d['descripcion_D']?></th>
                                        <th><?=$d['programa_Social'] ?>
                                        <th><?php if($d['estatus_apoyo']=='A'): ?>
                                            <h5><span class="badge badge-success">Activo
                                                    <?php endif ?></span></h5>
                                            <?php if($d['estatus_apoyo']=='B'): ?>
                                            <h5><span class="badge badge-danger">Inactivo
                                                    <?php endif ?></span></h5>
                                        </th>
                                        <th><?=$d['año'];?></th>
                                        <th><?=$d['objetivo_General'];?></th>
                                        <th><?=$d['poblacion_Objetivo'];?></th>
                                        <th><?=$d['rango_Edad']?></th>
                                        <th><?=$d['descripcion_A'];?></th>
                                        <th><?=$d['monto_Anual'];?></th>
                                        <th><?=$d['presupuesto'];?></th>
                                        <th><?=$d['responsable']?></th>
                                        <th><?=$d['telefono'];?></th>
                                        <th><?=$d['correo'];?></th>
                                        <th><?php if($d['pagina_Web'] == !null):?><a href="<?=$d['pagina_Web'];?>"
                                                target="_blank" class="btn btn-success btn-sm">
                                                Ver página web</a><?php endif?></th>
                                        <th><?=$d['descripcion_N'];?></th>
                                        <th><?php if($d['link_normartividad'] == !null):?><a
                                                href="<?=$d['link_normartividad'];?>" target="_blank"
                                                class="btn btn-success btn-sm">
                                                Ver normatividad</a><?php endif?></th>
                                        <th><?=$d['fecha_modificacion_AP'];?></th>
                                        <th><a href="<?= base_url('investigadores/edit/'.$d['id_apoyos']);?>"><img
                                                    width="40" height="40" class="edit" data-toggle="modal"
                                                    data-target="#modalEditar" src="public/images/icons/edit.svg"></a>
                                        </th>
                                        <th>
                                            <form action="<?= base_url('apoyosAdmin/deleteApoyo/'.$d['id_apoyos']);?>"
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

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container" style=" margin-top: 30px;  margin-left: 120px; margin-bottom: 20px;">
        <div class="row">
            <button type="button" id="agregarDerecho" class="btn btn-success" data-toggle="modal"
                data-target="#agregarDerechoN">Agregar Derecho</button>
        </div>
    </div>

    <form method="POST" action="<?php echo base_url('apoyosAdmin/createDerecho')?>" enctype="multipart/form-data">
        <div class="modal fade" id="agregarDerechoN" tabindex="-1" role="dialog" aria-labelledby="publicacionTitle">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="publicacionTitle">Agregar Derecho</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">Descripción:</label>
                            <input type="text" class="form-control" name="descripcionDerecho" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Seleccione el estatus:</label>
                            <select class="form-select form-control" name="estatusDerecho">
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

    <div class="container" id="">
        <div class="row">
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="head">
                            <h1 class="text-primary">Lista de Derechos</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Descripción</th>
                                        <th>Estatus</th>
                                        <th>Fecha última modificación</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($derecho as $d):?>
                                    <tr>
                                        <th><?=$d['id_derecho'] ?>
                                        <th><?=$d['descripcion'];?></th>
                                        <th><?php if($d['estatus']=='A'): ?>
                                            <h5><span class="badge badge-success">Activo
                                                    <?php endif ?></span></h5>
                                            <?php if($d['estatus']=='B'): ?>
                                            <h5><span class="badge badge-danger">Inactivo
                                                    <?php endif ?></span></h5>
                                        </th>
                                        <th><?=$d['fecha_modificacion'];?></th>
                                        <th><a href="<?= base_url('apoyosAdmin/editDerecho/'.$d['id_derecho']);?>"><img
                                                    width="40" height="40" class="edit" data-toggle="modal"
                                                    data-target="#modalEditar" src="public/images/icons/edit.svg"></a>
                                        </th>
                                        <th>
                                            <center>
                                                <button onclick="confirmar(<?=$d['id_derecho']?>)"
                                                    style="border: #FFFFFF"><img width="40" height="40" class="delete"
                                                        src="public/images/icons/trash.svg"></button>
                                                <a href=""></a>
                                            </center>

                                        </th>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container" style=" margin-top: 30px;  margin-left: 120px; margin-bottom: 20px;">
        <div class="row">
            <button type="button" id="agregarDerecho" class="btn btn-success" data-toggle="modal"
                data-target="#agregarDependenciaN">Agregar Dependencia</button>
        </div>
    </div>

    <form method="POST" action="<?php echo base_url('apoyosAdmin/createDependencia')?>" enctype="multipart/form-data">
        <div class="modal fade" id="agregarDependenciaN" tabindex="-1" role="dialog" aria-labelledby="publicacionTitle">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="publicacionTitle">Agregar Dependencia</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">Descripción:</label>
                            <input type="text" class="form-control" name="descripcionDependencia" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Seleccione el estatus:</label>
                            <select class="form-select form-control" name="estatusDependencia">
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

    <div class="container" id="">
        <div class="row">
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="head">
                            <h1 class="text-primary">Lista de Dependencias</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Descripción</th>
                                        <th>Estatus</th>
                                        <th>Fecha última modificación</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($dependencia as $d):?>
                                    <tr>
                                        <th><?=$d['id_dependencia'] ?>
                                        <th><?=$d['descripcion_D'];?></th>
                                        <th><?php if($d['estatus_D']=='A'): ?>
                                            <h5><span class="badge badge-success">Activo
                                                    <?php endif ?></span></h5>
                                            <?php if($d['estatus_D']=='B'): ?>
                                            <h5><span class="badge badge-danger">Inactivo
                                                    <?php endif ?></span></h5>
                                        </th>
                                        <th><?=$d['fecha_modificacion_D'];?></th>
                                        <th><a
                                                href="<?= base_url('apoyosAdmin/editDependencia/'.$d['id_dependencia']);?>"><img
                                                    width="40" height="40" class="edit" data-toggle="modal"
                                                    data-target="#modalEditar" src="public/images/icons/edit.svg"></a>
                                        </th>
                                        <th>
                                            <center>
                                                <button onclick="confirmarDependencia(<?=$d['id_dependencia']?>)"
                                                    style="border: #FFFFFF"><img width="40" height="40" class="delete"
                                                        src="public/images/icons/trash.svg"></button>
                                                <a href=""></a>
                                            </center>
                                        </th>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="container" style=" margin-top: 30px;  margin-left: 120px; margin-bottom: 20px;" ;">
        <div class="row">
            <button type="button" id="agregarDerecho" class="btn btn-success" data-toggle="modal"
                data-target="#agregarApoyoN">Agregar Tipo de Apoyo</button>
        </div>
    </div>

    <form method="POST" action="<?php echo base_url('apoyosAdmin/createTipoApoyo')?>" enctype="multipart/form-data">
        <div class="modal fade" id="agregarApoyoN" tabindex="-1" role="dialog" aria-labelledby="publicacionTitle">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="publicacionTitle">Agregar Tipo de Apoyo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">Descripción:</label>
                            <input type="text" class="form-control" name="descripcionApoyo" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Seleccione el estatus:</label>
                            <select class="form-select form-control" name="estatusApoyo">
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

    <div class="container" id="">
        <div class="row">
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="head">
                            <h1 class="text-primary">Lista de Tipo de Apoyo</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Descripción</th>
                                        <th>Estatus</th>
                                        <th>Fecha última modificación</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($apoyo as $a):?>
                                    <tr>
                                        <th><?=$a['id_tipo_apoyo'] ?>
                                        <th><?=$a['descripcion_A'];?></th>
                                        <th><?php if($a['estatus_A']=='A'): ?>
                                            <h5><span class="badge badge-success">Activo
                                                    <?php endif ?></span></h5>
                                            <?php if($a['estatus_A']=='B'): ?>
                                            <h5><span class="badge badge-danger">Inactivo
                                                    <?php endif ?></span></h5>
                                        </th>
                                        <th><?=$a['fecha_modificacion_A'];?></th>
                                        <th><a href="<?= base_url('apoyosAdmin/editTApoyo/'.$a['id_tipo_apoyo']);?>"><img
                                                    width="40" height="40" class="edit" data-toggle="modal"
                                                    data-target="#modalEditar" src="public/images/icons/edit.svg"></a>
                                        </th>
                                        <th>
                                            <center>
                                                <button onclick="confirmarTipoApoyo(<?=$a['id_tipo_apoyo']?>)"
                                                    style="border: #FFFFFF"><img width="40" height="40" class="delete"
                                                        src="public/images/icons/trash.svg"></button>
                                                <a href=""></a>
                                            </center>
                                        </th>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <div class="container" style=" margin-top: 30px;  margin-left: 120px; margin-bottom: 20px;">
        <div class="row">
            <button type="button" id="agregarDerecho" class="btn btn-success" data-toggle="modal"
                data-target="#agregarNormatividad">Agregar Normatividad</button>
        </div>
    </div>

    <form method="POST" action="<?php echo base_url('apoyosAdmin/createNormatividad')?>" enctype="multipart/form-data">
        <div class="modal fade" id="agregarNormatividad" tabindex="-1" role="dialog" aria-labelledby="publicacionTitle">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="publicacionTitle">Agregar Normatividad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">Descripción:</label>
                            <input type="text" class="form-control" name="orden" id="orden" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Seleccione el estatus:</label>
                            <select class="form-select form-control" id="estatus" name="estatus">
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

    <div class="container" id="">
        <div class="row">
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="head">
                            <h1 class="text-primary">Lista de Normatividad</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Descripción</th>
                                        <th>Estatus</th>
                                        <th>Fecha última modificación</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($normatividad as $n):?>
                                    <tr>
                                        <th><?=$n['id_normatividad'] ?>
                                        <th><?=$n['descripcion_N'];?></th>
                                        <th><?php if($n['estatus_N']=='A'): ?>
                                            <h5><span class="badge badge-success">Activo
                                                    <?php endif ?></span></h5>
                                            <?php if($n['estatus_N']=='B'): ?>
                                            <h5><span class="badge badge-danger">Inactivo
                                                    <?php endif ?></span></h5>
                                        </th>
                                        <th><?=$n['fecha_modificacion_N'];?></th>
                                        <th><a href="<?= base_url('investigadores/edit/'.$n['id_normatividad']);?>"><img
                                                    width="40" height="40" class="edit" data-toggle="modal"
                                                    data-target="#modalEditar" src="public/images/icons/edit.svg"></a>
                                        </th>
                                        <th>

                                            <center>
                                                <button onclick="confirmarNormatividad(<?=$n['id_normatividad']?>)"
                                                    style="border: #FFFFFF"><img width="40" height="40" class="delete"
                                                        src="public/images/icons/trash.svg"></button>
                                                <a href=""></a>
                                            </center>
                                        </th>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>

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
    <script src="<?php echo base_url('public/libs/sweet2/dist/sweetalert2.min.js')?>"></script>
    <script src="<?php echo base_url('public/js/dashboard.js')?>"></script>

    <script>
    function confirmar(id) {
        Swal.fire({
            title: '¿Estás seguro de eliminar este registro?',
            text: "Existen apoyos con este registro, una vez eliminado no se podrá retroceder.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Registro eliminado!',
                    'success'
                )
                window.location = 'apoyosAdmin/deleteDerecho/' + id;

            }
        })
    }
    </script>
     <script>
    function confirmarDependencia(id) {
        Swal.fire({
            title: '¿Estás seguro de eliminar este registro?',
            text: "Existen apoyos con este registro, una vez eliminado no se podrá retroceder.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Registro eliminado!',
                    'success'
                )
                window.location = 'apoyosAdmin/deleteDependencia/' + id;

            }
        })
    }
    </script>
     <script>
    function confirmarTipoApoyo(id) {
        Swal.fire({
            title: '¿Estás seguro de eliminar este registro?',
            text: "Existen apoyos con este registro, una vez eliminado no se podrá retroceder.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Registro eliminado!',
                    'success'
                )
                window.location = 'apoyosAdmin/deleteTApoyo/' + id;

            }
        })
    }
    </script>
     <script>
    function confirmarNormatividad(id) {
        Swal.fire({
            title: '¿Estás seguro de eliminar este registro?',
            text: "Existen apoyos con este registro, una vez eliminado no se podrá retroceder.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Registro eliminado!',
                    'success'
                )
                window.location = 'apoyosAdmin/deleteNormatividad/' + id;

            }
        })
    }
    </script>
    <script type="text/javascript">
    let mensaje = '<?php echo $mensaje ?>';
    if (mensaje == '1') {
        swal('', 'Apoyo y Servicio actualizado con éxito', 'success');
    } else if (mensaje == '2') {
        swal('', 'Apoyo y Servicio creado con éxito', 'success');
    } else if (mensaje == '3') {
        swal('', 'El estatus es requerido', 'error');
    } else if (mensaje == '4') {
        swal('', 'Investigación eliminada correctamente', 'success');
    } else if (mensaje == '5') {
        swal('', 'Derecho creado con éxito', 'success');
    } else if (mensaje == '6') {
        swal('', 'El estatus del derecho es requerido', 'error');
    } else if (mensaje == '7') {
        swal('', 'Dependencia creada con éxito', 'success');
    } else if (mensaje == '8') {
        swal('', 'El estatus de la dependencia es requerido', 'error');
    } else if (mensaje == '9') {
        swal('', 'Tipo de apoyo creado con éxito', 'success');
    } else if (mensaje == '10') {
        swal('', 'El estatus del tipo de apoyo es requerido', 'error');
    } else if (mensaje == '12') {
        swal('', 'Dependencia eliminada correctamente', 'success');
    } else if (mensaje == '13') {
        swal('', 'Tipo de Apoyo eliminado correctamente', 'success');
    } else if (mensaje == '14') {
        swal('', 'Tipo de Apoyo actualizado con éxito', 'success');
    } else if (mensaje == '15') {
        swal('', 'Dependencia actualizada con éxito', 'success');
    } else if (mensaje == '16') {
        swal('', 'Derecho actualizado con éxito', 'success');
    } else if (mensaje == '17') {
        swal('', 'Apoyo y Servicio eliminado con éxito', 'success');
    }
    </script>
    <script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    </script>
</body>


</html>