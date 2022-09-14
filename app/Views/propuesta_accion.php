<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Propuesta de Acción</title>
    <link rel="icon" href="<?= base_url('public/images/icons/user.svg');?>">
    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('public/css/registrate.css');?>">
    <link rel="stylesheet" href="<?= base_url('public/plugins/bootstrap/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/fonts/material-icon/css/material-design-iconic-font.min.css')?>">
    <script src='https://www.google.com/recaptcha/api.js?render=6LdDl1shAAAAABzkXmWfAciikeiuQy4YHeyIslli'></script>
    <script>
    grecaptcha.ready(function() {
    grecaptcha.execute('6LdDl1shAAAAABzkXmWfAciikeiuQy4YHeyIslli', {action: 'formulario'})
    .then(function(token) {
    var recaptchaResponse = document.getElementById('recaptchaResponse');
    recaptchaResponse.value = token;
    });});
</script>
</head>

<body>


    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="editar" action="<?php echo base_url("propuesta/create/")?>" method="POST"
                        class="signup-form">
                        <h2 class="form-title">Propuesta de Acción</h2>
                        <div class="form-group">
                            <label class="col-form-label">Nombre completo:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Sexo:</label>
                            <select class="form-select form-control" id="sexo" name="sexo" required>
                                <option selected disabled value="">Seleccione un opción</option>
                                <option value=" Mujer">Mujer</option>
                                <option value="Hombre">Hombre</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Edad:</label>
                            <input type="numeric" class="form-control" name="edad" id="edad" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Actividad Principal:</label>
                            <select class="form-select form-control" id="actividad" name="actividad"  required>
                                <option selected disabled value="">Seleccione un opción</option>
                                <option value=" Investigador">Investigador</option>
                                <option value="Ama de casa">Ama de casa</option>
                                <option value="Estudiante">Estudiante</option>
                                <option value="Empleado">Empleado</option>
                                <option value="1">Otro</option>
                                <input type="text" class="form-control" style="margin-top: 5px;" name="especifica"
                                    id="especifica" placeholder="Especifica: " />
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Correo electrónico:</label>
                            <input type="email" class="form-control" name="correo" id="correo" required />
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Municipio:</label>
                            <option selected disabled value="">Seleccione un opción</option required>
                            <select class="form-select form-control" name="municipio" required>
                                <?php foreach($municipios as $m):?>
                                <option value="<?=$m['id_municipio'];?>"><?=$m['nombre'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Zona:</label>
                            <select class="form-select form-control" id="zona" name="zona" required>
                                <option selected disabled value="">Seleccione un opción</option>
                                <option value=" Urbana">Urbana</option>
                                <option value="Rural">Rural</option>
                                <option value="Semiurbana">Semiurbana</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Detalla tu propuesta lo más que puedas:</label>
                            <textarea class="form-control" name="detalle" id="detalle" cols="30" rows="10"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Justifica tu propuesta, para este punto puedes indicar ¿por
                                qué consideras que es importante?, ¿cuál es el problema que viste para hacer la
                                propuesta?:</label>
                            <textarea class="form-control" name="justificacion" id="justificacion" cols="30" rows="10"
                                required></textarea>
                        </div>
                        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                        <div class="form-group">
                            <input type="submit" name="Enviar" id="Enviar" class="form-submit" value="Enviar" />
                        </div>
                        <center><a class="txt1" href="<?php echo base_url('/index') ?>">
                                <i class="zmdi zmdi-arrow-left"></i> Volver
                            </a></center>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#actividad').change(function(e) {
            if ($(this).val() === "1") {
                $('#especifica').prop("disabled", false);
            } else {
                $('#especifica').prop("disabled", true);
            }
        })
    });
    </script>
    <script type="text/javascript">
    let mensaje = '<?php echo $mensaje ?>';
    if (mensaje == '1') {
        swal('', 'Propuesta envíada', 'success');
    }
    </script>
</body>

</html>