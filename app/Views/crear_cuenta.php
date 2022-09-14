<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate</title>
    <link rel="icon" href="public/images/icons/user.svg"/>
    <!-- Font Icon -->
    <link rel="stylesheet" href="public/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="public/css/registrate.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="crearcuenta" action="<?php echo base_url("/guardar")?>" method="POST" class="signup-form">
                        <h2 class="form-title">Crear Cuenta</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nombre" id="nombre" placeholder="Nombre(s)..." required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="apellidos" id="apellidos" placeholder="Apellidos..." required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="usuario" id="usuario" placeholder="Usuario..." required/>
                        </div>
                        <div class="form-group">
                            <input type="number" maxlength="10" class="form-input"name="telefono" id="telefono" placeholder="Telefono..." required />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="correo" id="correo" placeholder="Correo..."required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="contrasena" id="contrasena" placeholder="Contraseña..."required/>
                        </div>
                        <div class="form-group">
                        <select class="form-select form-input" id="estatus" name="estatus">
                            <option selected disabled>Seleccione un estatus</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="crear" id="crear" class="form-submit" value="Crear"/>
                        </div>
                        <center><a class="txt1" href="<?php echo base_url('/administrador') ?>">
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
        
    </script>
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/main.js"></script>
</body>
</html>
