<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
            ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="public/images/gto.png">
    <title>Centro Documental</title>
    <!-- Mobile Specific Metas
            ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
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

</head>

<body style="background-image: url('public/images/books.png')">
    <!--
        ==================================================
        Header Section Start
        ================================================== -->
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
                                            <a class="dropdown-item" href="404.html">Apoyos y servicios</a>
                                            <a class="dropdown-item" href="gallery.html">Directorios</a>
                                            <a class="dropdown-item" href="single-post.html">Temas</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Investigaciones y Evaluaciones
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item"
                                                href="<?php echo base_url('/red-investigadores-edit')?>">Red de
                                                Investigadores</a>
                                            <a class="dropdown-item"
                                                href="<?php echo base_url('/investigadores')?>">Centro
                                                documental</a>
                                            <a class="dropdown-item" href="<?php echo base_url('/temas')?>">Temas</a>
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

    <!--
        ==================================================
        Table Section
        ================================================== -->
    <div class="container" id="nuevo">
        <div class="row">
            <button type="button" id="agregarPublicacion" class="btn btn-success" data-toggle="modal"
                data-target="#agregarNPublicacion">Agregar
                publicación</button>

        </div>

    </div>
    <!-- Button trigger modal -->

    <!--Modal Agregar nueva publicación-->
    <form method="POST" action="<?php echo base_url('investigadores/createInv')?>" enctype="multipart/form-data">
        <div class="modal fade" id="agregarNPublicacion" tabindex="-1" role="dialog" aria-labelledby="publicacionTitle">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="publicacionTitle">Agregar Investigación</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">Nombre de la investigación/estudio:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Fecha:</label>
                            <input type="date" class="form-control" name="año" id="año" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Seleccione el tema:</label>
                            <select class="form-select" name="id_tema">
                                <?php foreach($tema as $t):?>
                                <option value="<?=$t['id_tema'];?>"><?=$t['descripcionTema'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Descripcion:</label>
                            <textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="3"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Subir Imagen que hace referencia al estudio:</label>
                            <input id="elegirImagen" class="form-control" name="informe" id="informe" type="file"
                                style="color:#4469C5;" /><br />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Subir Archivo/Estudio:</label>
                            <input id="elegiraArchivo" class="form-control" name="archivo" id="archivo" type="file"
                                style="color:#4469C5;" /><br />
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
                            <h1 class="text-primary">Lista de Investigaciones</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Fecha</th>
                                        <th>Tema</th>
                                        <th>Archivo</th>
                                        <th>Imagen</th>
                                        <th>Estatus</th>
                                        <th>Fecha última modificación</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($datos as $d):?>
                                    <tr>
                                        <th><?=$d['id_investigacion'] ?>
                                        <th><?=$d['nombre'];?></th>
                                        <th><?=$d['descripcion'];?></th>
                                        <th><?=$d['año'];?></th>
                                        <th><?=$d['descripcionTema']?></th>
                                        <th><?php if($d['archivo'] == !null):?><a
                                                href="<?php echo base_url('public/documentos_investigaciones/'.$d['id_investigacion'].'/'.$d['archivo'])?>"
                                                download="<?php $d['archivo'] ?>" class="btn btn-success btn-sm">
                                                Descargar</a><?php endif?></th>
                                        <th><img src="<?php echo base_url('public/images_investigaciones/'.$d['id_investigacion'].'/'.$d['informe'])?>"
                                                width="100" alt=""></th>
                                        <th><?php if($d['estatus']=='A'): ?>
                                            <h5><span class="badge badge-success">Activo
                                                    <?php endif ?></span></h5>
                                            <?php if($d['estatus']=='B'): ?>
                                            <h5><span class="badge badge-danger">Inactivo
                                                    <?php endif ?></span></h5>
                                        </th>
                                        <th><?=$d['fecha_modificacion'];?></th>
                                        <th><a href="<?= base_url('investigadores/edit/'.$d['id_investigacion']);?>"><img
                                                    width="40" height="40" class="edit" data-toggle="modal"
                                                    data-target="#modalEditar" src="public/images/icons/edit.svg"></a>
                                        </th>
                                        <th>
                                            <form
                                                action="<?= base_url('investigadores/delete/'.$d['id_investigacion']);?>"
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
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Fecha</th>
                                        <th>Tema</th>
                                        <th>Archivo</th>
                                        <th>Imagen</th>
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
        swal('', 'Investigación actualizada con éxito', 'success');
    } else if (mensaje == '2') {
        swal('', 'Investigación creada con éxito', 'success');
    } else if (mensaje == '3') {
        swal('', 'El estatus es requerido', 'error');
    } else if (mensaje == '4') {
        swal('', 'Investigación eliminada correctamente', 'success');
    }
    </script>
    <script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    </script>
</body>


</html>