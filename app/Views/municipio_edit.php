<?php 
    $id_municipio = $datos[0]['id_municipio'];
    $nombre = $datos[0]['nombre'];
    $pdf = $datos[0]['pdf'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Municipio</title>
    <link rel="icon"href="<?= base_url('public/images/icons/user.svg');?>">
    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('public/css/registrate.css');?>">
    <link rel="stylesheet" href="<?= base_url('public/plugins/bootstrap/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/fonts/material-icon/css/material-design-iconic-font.min.css')?>">
</head>
<body>
    

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="editar" action="<?php echo base_url("index-admin/update/")?>" method="POST" enctype="multipart/form-data" class="signup-form">
                        <h2 class="form-title">Editar Municipio</h2>
                        <input type="text" id="id_municipio" name="id_municipio" hidden="" 
                            value="<?php echo $id_municipio ?>">
                        <div class="form-group">
                        <label class="col-form-label">Nombre:</label> 
                            <input type="text" class="form-input" name="nombre" id="nombre" value="<?php echo $nombre?>"/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Subir PDF:</label>
                            <input class="form-control" name="pdf" id="pdf" type="file" value="<?php echo $pdf?>"/ style="color:#4469C5;" required /><br />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="editar" id="editar" class="form-submit" value="Editar"/>
                        </div>
                        <center><a class="txt1" href="<?php echo base_url('/index-admin') ?>">
                        <i class="zmdi zmdi-arrow-left"></i> Volver  
						</a></center>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        let mensaje = '<?php echo $mensaje ?>';
        if(mensaje =='2'){
            swal('','Fallo al editar el municipio seleccione un documento PDF','error');
        }
    </script>
</body>
</html>
