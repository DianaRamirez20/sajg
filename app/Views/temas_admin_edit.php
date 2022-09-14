<?php 
    $id_tema = $datos[0]['id_tema'];
    $descripcion = $datos[0]['descripcionTema'];
    $imagen = $datos[0]['imagen'];
    $estatus = $datos[0]['estatusTema'];
    $link = $datos[0]['link'];
    $descripcionMas = $datos[0]['descripcionMas'];
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
                    <form method="POST" id="editar" action="<?php echo base_url("temas/update/")?>" method="POST" enctype="multipart/form-data" class="signup-form">
                        <h2 class="form-title">Editar Tema</h2>
                        <input type="text" id="id_tema" name="id_tema" hidden="" 
                            value="<?php echo $id_tema ?>">
                        <div class="form-group">
                        <label class="col-form-label">Nombre del tema:</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $descripcion?>"/>
                        </div>
                        <div class="form-group">
                        <label class="col-form-label">Descripcion del tema:</label>
                            <input type="text" class="form-control" name="descripcionMas" id="descripcionMas" value="<?php echo $descripcionMas?>"/>
                        </div>
                        <div class="form-group">
                        <label class="col-form-label">Link del tema:</label>
                            <input type="text" class="form-control" name="link" id="link" value="<?php echo $link?>"/>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Subir Imagen que hace referencia al tema:</label>
                            <input name="imagen" required   class="form-control" id="imagen" type="file" style="color:#4469C5;"value="<?php echo $imagen?>"><br />
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
                        <center><a class="txt1" href="<?php echo base_url('/temas') ?>">
                        <i class="zmdi zmdi-arrow-left"></i> Volver  
						</a></center>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
   
    <script type="text/javascript">
        let mensaje = '<?php echo $mensaje ?>';
        if(mensaje =='2'){
            swal('','Fallo al actualizar seleccione un documento JPG,JPEG,PNG','error');
        }
    </script>
</body>
</html>
