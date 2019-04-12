<?php session_start();

if (!isset($_SESSION['id_user'])) {
	header("location:../index.php");
}?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
</head>
<body>

<?php include('header_dentro.php');?>
	
<div class="justify-content-center pt-5">
	<div class="row">
		<div class="col-sm-12 col-md-3 col-lg-3 pt-5 pb-3" style="background:#D5DBDB;">
			<?php include('slider.php');?>
		</div>
		<div class="col-sm-12 col-md-8 col-lg-8 pt-5">
			<div class="container">
				
				<h2>Perfil</h2>

				<div class="row">
					<div class="col-sm-12 col-md-5 col-lg-5">
						<div class="container">
							<img src="assets/img/default.png" alt="">
						</div>
					</div>
					<div class="col-sm-12 col-md-7 col-lg-7">
						<div class="container">
							<h2 class="alert alert-success">Datos personales</h2> 
							<h4>Nombre:</h4>
							<?=$_SESSION['nombre'];?>
							<h4>Cedula:</h4>
							<?=$_SESSION['cedula'];?>
							<h4>Correo:</h4>
							<?=$_SESSION['email'];?>
							<h4>Telefono:</h4>
							<?=$_SESSION['telefono'];?>
							<h4>Role:</h4>
							<?=$_SESSION['role'];?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>