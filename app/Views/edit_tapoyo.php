<?php 
    $id_tipo_apoyo = $datos[0]['id_tipo_apoyo'];
    $descripcion_A = $datos[0]['descripcion_A'];
    $estatus_A = $datos[0]['estatus_A'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Dependencia</title>
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
                    <form method="POST" id="editar" action="<?php echo base_url("apoyosAdmin/updateTApoyo/")?>" method="POST" enctype="multipart/form-data" class="signup-form">
                        <h2 class="form-title">Editar Dependencia</h2>
                        <input type="text" id="id_tipo_apoyo" name="id_tipo_apoyo" hidden="" 
                            value="<?php echo $id_tipo_apoyo ?>">
                        <div class="form-group">
                        <label class="col-form-label">Descripción:</label> 
                            <input type="text" class="form-control" name="descripcion_A" id="descripcion_A" value="<?php echo $descripcion_A?>"/>
                        </div>
                        <div class="form-group">
                        <label class="col-form-label">Seleccione el estatus:</label>
                        <select class="form-select form-control" id="estatus_A" name="estatus_A">
                        <?php if($estatus_A =='A'):?>
                            <option selected><?php echo $estatus_A?></option>
                            <option value="B">B</option>
                        <?php endif ?>
                        <?php if($estatus_A == 'B'):?>
                            <option selected><?php echo $estatus_A?></option>
                            <option value="A">A</option>
                            <?php endif ?>
                        </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="editar" id="editar" class="form-submit" value="Editar"/>
                        </div>
                        <center><a class="txt1" href="<?php echo base_url('/apoyosAdmin') ?>">
                        <i class="zmdi zmdi-arrow-left"></i> Volver  
						</a></center>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</body>
</html>
