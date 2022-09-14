<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
            ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="public/images/gto.png">
    <title>Temas</title>
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
        <div class="row" style="margin: 3px">
            <button type="button" id="agregarTema" class="btn btn-success" data-toggle="modal"
                data-target="#agregarTemaN">Agregar
                tema</button>

        </div>

    </div>
    <!-- Button trigger modal -->

    <!--Modal Agregar nuevo tema-->
    <form method="POST" action="<?php echo base_url('temas/createTema')?>" enctype="multipart/form-data">
        <div class="modal fade" id="agregarTemaN" tabindex="-1" role="dialog" aria-labelledby="temaTitle">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="temaTitle">Agregar Tema</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">Nombre:</label>
                            <input name="nombre" class="form-control" id="nombre" cols="30" rows="3" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Link:</label>
                            <input name="link" class="form-control" id="link" cols="30" rows="3" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Descripcion:</label>
                            <textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="3"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Subir Imagen que hace referencia al tema:</label>
                            <input class="form-control" name="imagen" id="imagen" type="file"
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
                            <h1 class="text-primary">Lista de Temas</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Imagen</th>
                                        <th>Link</th>
                                        <th>Estatus</th>
                                        <th>Fecha última modificación</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($datos as $t):?>
                                    <tr>
                                        <th><?=$t['id_tema'] ?></th>
                                        <th><?=$t['descripcionTema'];?></th>
                                        <th><?=$t['descripcionMas'];?></th>
                                        <th><img src="<?php echo base_url('public/images_temas/'.$t['id_tema'].'/'.$t['imagen'])?>"
                                                width="100" alt=""></th>
                                        <th><?php if($t['link'] == !null):?>
                                            <a href="<?= $t['link']?>" target="_blank" class="btn btn-success"
                                                style="margin: 5px">Ver más</a><?php endif?>
                                        </th>
                                        <th><?php if($t['estatusTema']=='A'): ?>
                                            <h5><span class="badge badge-success">Activo
                                                    <?php endif ?></span></h5>
                                            <?php if($t['estatusTema']=='B'): ?>
                                            <h5><span class="badge badge-danger">Inactivo
                                                    <?php endif ?></span></h5>
                                        </th>
                                        <th><?=$t['fecha_modificacionTema'];?></th>
                                        <th><a href="<?= base_url('temas/edit/'.$t['id_tema']);?>"><img width="40"
                                                    height="40" class="edit" src="public/images/icons/edit.svg"></a>
                                        </th>
                                        <th>
                                            <form action="<?= base_url('temas/delete/'.$t['id_tema']);?>" method="POST">
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
                                        <th>Imagen</th>
                                        <th>Link</th>
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
        swal('', 'Tema actualizado con éxito', 'success');
    } else if (mensaje == '2') {
        swal('', 'Tema creado con éxito', 'success');
    } else if (mensaje == '3') {
        swal('', 'El estatus es requerido', 'error');
    } else if (mensaje == '4') {
        swal('', 'Tema eliminado con éxito', 'success');
    }
    </script>
    <script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    </script>
</body>


</html>