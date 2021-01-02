<!DOCTYPE html>
<html>
<head>
	<title>Mi sistema E-Commerce</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<style type="text/css">
		form{
			max-width: 460px;
			width: calc(100% - 40px);
			padding: 20px;
			background: #fff;
			border-radius: 5px;
			margin: auto;
		}
		form h3{
			margin: 5px 0;
		}
		form input{
			padding: 7px 10px;
			width: calc(100% - 22px);
			margin-bottom: 10px;
		}
		form button{
			padding: 10px 15px;
			width: calc(100%);
			background: var(--main-red);
			border: none;
			color: #fff;
		}
		form p{
			margin: 0;
			margin-bottom: 5px;
			color: var(--main-red);
			font-size: 14px;
		}
	</style>
</head>
<body>
	<header>
		<div class="logo-place"><a href="index.php"><img src="assets/logo.png"></a></div>
	</header>
	<div class="main-content">
		<div class="content-page">
			<div>
				<form action="servicios/login.php" method="POST">
					<h3>Iniciar sesión</h3>
					<input type="text" name="emausu" placeholder="Correo">
					<input type="password" name="pasusu" placeholder="Contraseña">
					<?php
						if (isset($_GET['e'])) {
							switch ($_GET['e']) {
								case '1':
									echo '<p>Error de conexión</p>';
									break;	
								case '2':
									echo '<p>Email inválido</p>';
									break;	
								case '3':
									echo '<p>Contraseña incorrecta</p>';
									break;							
								default:
									break;
							}
						}
					?>
					<button type="submit">Ingresar</button>
				</form>	
			</div>
			<div>
				<form action="servicios/register.php" method="POST">
					<h3>Regístrate</h3>
					<input type="text" name="emausur" placeholder="Correo">
					<input type="password" name="pasusur" placeholder="Contraseña">
					<input type="password" name="pasusu2r" placeholder="Confirmar contraseña">
					<?php
						if (isset($_GET['er'])) {
							switch ($_GET['er']) {
								case '1':
									echo '<p>Error de conexión</p>';
									break;	
								case '2':
									echo '<p>Email ya esta siendo usado</p>';
									break;	
								case '3':
									echo '<p>Las contraseñas no coinciden</p>';
									break;							
								default:
									break;
							}
						}
					?>
					<button type="submit">Crear cuenta</button>
				</form>
			</div>	
		</div>
	</div>
</body>
</html>