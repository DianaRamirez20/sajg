<!DOCTYPE html>
<html lang="en">
<head>
	<title>Iniciar Sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" href="public/images/icons/home.svg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('public/images/login.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo base_url("/entrar")?>" method="POST">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-home"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Correo">
						<input class="input100" id="correo" type="email" name="correo" placeholder="nombre@gmail.com" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Usuario">
						<input class="input100" id="usuario" type="text" name="usuario" placeholder="Administrador..." required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Contraseña">
						<input class="input100" id="contrasena" type="password" name="contrasena" placeholder="Contraseña" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="container-login100-form-btn">
						
							<button class="login100-form-btn">
								Entrar
							</button>
						
						
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							¿Olvidaste tu contraseña?
						</a>
					</div>
					<div class="text-center p-t-90">
					<center><a class="txt1" href="<?php echo base_url('/index') ?>">
                        <i class="zmdi zmdi-arrow-left"></i> Inicio  
						</a></center>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="public/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="public/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="public/vendor/bootstrap/js/popper.js"></script>
	<script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="public/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="public/vendor/daterangepicker/moment.min.js"></script>
	<script src="public/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="public/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="public/js/main.js"></script>

</body>
</html>