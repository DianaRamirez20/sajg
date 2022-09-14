<?php 
    $id_investigacion = $datos[0]['id_investigacion'];
    $nombre = $datos[0]['nombre'];
    $descripcion = $datos[0]['descripcion'];
    $año = $datos[0]['año'];
    $id_tema = $datos[0]['id_tema'];
    $descripcionTema = $datos[0]['descripcionTema'];
    $archivo = $datos[0]['archivo'];
    $informe = $datos[0]['informe'];
    $estatus = $datos[0]['estatus'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Investigación</title>
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
                    <form method="POST" id="editar" action="<?php echo base_url("investigadores/update/")?>" method="POST" enctype="multipart/form-data" class="signup-form">
                        <h2 class="form-title">Editar Investigación</h2>
                        <input type="text" id="id_investigacion" name="id_investigacion" hidden="" 
                            value="<?php echo $id_investigacion ?>">
                        <div class="form-group">
                        <label class="col-form-label">Nombre de la investigación/estudio:</label> 
                            <input type="text" class="form-input" name="nombre" id="nombre" value="<?php echo $nombre?>"/>
                        </div>
                        <div class="form-group">
                        <label class="col-form-label">Fecha:</label> 
                            <input type="date" class="form-input" name="año" id="año" value="<?php echo $año?>"/>
                        </div>
                        <div class="form-group">
                        <label class="col-form-label">Seleccione el tema:</label> 
                            <select class="form-select form-control form-input" name="id_tema"  value="<?= $id_tema ?>" required>
                                <option disabled value="<?= $id_tema ?>"  ><?php echo $descripcionTema?></option>
                                <?php foreach($tema as $t):?>
                                    <option value="<?=$t['id_tema'];?>"><?=$t['descripcionTema'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                        <label class="col-form-label">Descripción:</label> 
                            <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $descripcion?>"/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Subir Imagen que hace referencia al estudio:</label>
                            <input class="form-control" name="informe"  id="informe" type="file" value="<?php echo $informe?>"/ style="color:#4469C5;" required /><br />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Subir Archivo/Estudio:</label>
                            <input class="form-control" name="archivo" id="archivo" type="file" value="<?php echo $archivo?>"/ style="color:#4469C5;" /><br />
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
                        <center><a class="txt1" href="<?php echo base_url('/investigadores') ?>">
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
            swal('','Fallo al actualizar seleccione un documento JPG,JPEG,PNG','error');
        }else if (mensaje == '3'){
            swal('','Fallo al actualizar seleccione un documento PDF, DOCX','error');
        }else if (mensaje == '4'){
            swal('','Fallo al crear seleccione un documento PDF, DOCX','error');
        }else if (mensaje == '5'){
            swal('','Fallo al crear seleccione un documento PDF, DOCX','error');
        }
    </script>
</body>
</html>
