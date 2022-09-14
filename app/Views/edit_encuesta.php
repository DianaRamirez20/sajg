<?php 
    $id_encuestasC = $datos[0]['id_encuestasC'];
    $respuesta1 = $datos[0]['respuesta1'];
    $respuesta2 = $datos[0]['respuesta2'];
    $respuesta3 = $datos[0]['respuesta3'];
    $respuesta4 = $datos[0]['respuesta4'];
    $fecha_inicio = $datos[0]['fecha_inicio'];
    $fecha_fin = $datos[0]['fecha_fin'];
    $estatus = $datos[0]['estatus'];
    $id_pregunta = $datos[0]['id_pregunta'];
    $pregunta = $datos[0]['pregunta'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Respuesta</title>
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
                    <form method="POST" id="editar" action="<?php echo base_url("encuesta/update/")?>" method="POST" class="signup-form">
                        <h2 class="form-title">Editar Respuesta</h2>
                        <input type="text" id="id_encuestasC" name="id_encuestasC" hidden="" 
                            value="<?php echo $id_encuestasC ?>">
                            <div class="form-group">
                        <label class="col-form-label">Seleccione la pregunta:</label> 
                            <select class="form-select form-control form-input" name="id_pregunta"  value="<?= $id_pregunta ?>" required>
                                <option disabled selected value="<?= $id_pregunta ?>"  ><?php echo $pregunta?></option>
                                <?php foreach($preguntas as $p):?>
                                <option value="<?=$p['id_pregunta'];?>"><?=$p['pregunta'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Respuesta No° 1:</label>
                            <input type="text" class="form-control" name="respuesta1" id="nombre" value="<?php echo $respuesta1?>" requred/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Respuesta No° 2:</label>
                            <input type="text" class="form-control" name="respuesta2" id="nombre" value="<?php echo $respuesta2?>" requred/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Respuesta No° 3:</label>
                            <input type="text" class="form-control" name="respuesta3" id="nombre" value="<?php echo $respuesta3?>" requred/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Respuesta No° 4:</label>
                            <input type="text" class="form-control" name="respuesta4" id="nombre" value="<?php echo $respuesta4?>" requred/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Fecha Inicio:</label>
                            <input type="date" class="form-control" name="fecha_inicio" value="<?php echo $fecha_inicio?>" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Fecha Fin:</label>
                            <input type="date" class="form-control" name="fecha_fin" value="<?php echo $fecha_fin?>" required />
                        </div>
                    
                        <div class="form-group">
                        <label class="col-form-label">Seleccione el estatus:</label>
                        <select class="form-select form-control" id="estatus" name="estatus"">
                        <?php if($estatus =='A'):?>
                            <option selected><?php echo $estatus?></option>
                            <option value="B">B</option>
                        <?php endif ?>
                        <?php if($estatus == 'B'):?>
                            <option selected><?php echo $estatus?></option>
                            <option value="A">A</option>
                            <?php endif ?>
                        </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="editar" id="editar" class="form-submit" value="Editar"/>
                        </div>
                        <center><a class="txt1" href="<?php echo base_url('/encuesta') ?>">
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
        if(mensaje =='1'){
            swal('','Fallo al crear la respuesta seleccione un documento JPG,JPEG,PNG','error');
        }
    </script>
</body>
</html>
