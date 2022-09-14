<?php 
    $id_user = $datos[0]['id_user'];
    $nombre = $datos[0]['nombre'];
    $apellidos = $datos[0]['apellidos'];
    $correo = $datos[0]['correo'];
    $telefono = $datos[0]['telefono'];
    $usuario = $datos[0]['usuario'];
    $contrasena = $datos[0]['contrasena'];
    $estatus = $datos[0]['estatus'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuario</title>
    <link rel="icon"href="<?= base_url('public/images/icons/user.svg');?>">
    <!-- Font Icon -->
    <link rel="stylesheet" href="public/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('public/css/registrate.css');?>">
</head>
<body>
    

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="editar" action="<?php echo base_url("/administrador/actualizar")?>" method="POST" class="signup-form">
                        <h2 class="form-title">Editar Usuario</h2>
                        <input type="text" id="id_user" name="id_user" hidden="" 
                            value="<?php echo $id_user ?>">
                        <div class="form-group">
                            <input type="text" class="form-input" name="nombre" id="nombre" value="<?php echo $nombre?>" placeholder="Nombre(s)..." required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="apellidos" id="apellidos" value="<?php echo $apellidos?>" placeholder="Apellidos..." required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="usuario" id="usuario" value="<?php echo $usuario?>" placeholder="Usuario..." required/>
                        </div>
                        <div class="form-group">
                            <input type="number" maxlength="10" class="form-input"name="telefono" id="telefono" value="<?php echo $telefono?>" placeholder="Telefono..." required />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="correo" id="correo" value="<?php echo $correo?>" placeholder="Correo..."required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="contrasena" id="contrasena" value="<?php echo $contrasena?>" placeholder="Contraseña..."required/>
                        </div>
                        <select class="form-select form-input" id="estatus" name="estatus"">
                        <?php if($estatus =='A'):?>
                            <option selected><?php echo $estatus?></option>
                            <option value="B">B</option>
                        <?php endif ?>
                        <?php if($estatus == 'B'):?>
                            <option selected><?php echo $estatus?></option>
                            <option value="A">A</option>
                            <?php endif ?>
                        </select>
                        <div class="form-group">
                            <input type="submit" name="editar" id="editar" class="form-submit" value="Editar" style="margin-top: 10px"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/main.js"></script>
</body>
</html>
