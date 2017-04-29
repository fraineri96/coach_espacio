<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" media="only screen and (min-width:481px) and (max-width:750px)" href="css/sign-in-up-750.css">
	<link rel="stylesheet" type="text/css" media="only screen and (max-width:480px)" href="css/sign-in-up-480.css">

	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet"> 

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="js/sign-in-up.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Coaching | Iniciá sesión</title>
</head>
<body>
	<?php
		$activePage = 'sign-in-up.php'; 
		$userLogin = 'd';
			/*$userLogin = isset($_SESSION['username'])?$_SESSION['username']:null
			*/
		include('php/header.include.php');
	?>
	<div class="form-container">
		<div class="form-login-container">
			<div class="form-login-shadow"></div>
			<div class="form-login-titleCont">
				<h1 class="form-login-title">INGRESAR</h1>
				<a class="form-login-icon" href="#"><i class="fa fa-user-o fa-5x" aria-hidden="true"></i></a>
			</div>
			<form class="form-login-inputs">
				<input class="form-login-txtUsuario" type="text" id="ingreso" name="Ingreso" placeholder="Usuario" required>
			
				<input class="form-login-txtPass" type="password" id="contraseña" name="contraseña" placeholder="Contraseña" required>		
				
				<div class="form-login-remember">
					<label class="form-login-lblRemember">Recordame!</label>
					<input class="form-login-chkRemember" type="checkbox" name="">
				</div>

				<button class="form-button-login standard-button button-cyan" type="submit">ENTRAR</button>
			</form>
			<a class="form-login-forgot" href="">Olvidaste tu contraseña?</a>
						
			</div>
		</div>
	</div>
</body>
</html>