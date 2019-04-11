<?php session_start();

if (!isset($_SESSION['id_user'])) {
	header("location:../index.php");
}?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Finaciera</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="./assets/css/toastr.css"/>
</head>
<body>

<?php include('header_dentro.php');?>
	
<div class="justify-content-center pt-5">
	<div class="row">
		<div class="col-sm-12 col-md-3 col-lg-3 pt-5 pb-3" style="background:#D5DBDB;">
			<?php include('slider.php');?>
		</div>
		<div class="col-sm-12 col-md-9 col-lg-9 pt-5">
			<div class="container">

	          <div class="row">
	            <div class="col-sm-12 col-md-4 col-lg-4">
                <h3>Moras de prestamos</h3>
	            </div>
	            <div class="col-sm-12 col-md-4 col-lg-4"></div>
	            <div class="col-sm-12 col-md-4 col-lg-4">
	                <input class="form-control mr-sm-2" type="search" name="buscar" placeholder="Buscar" id="buscador_prestamos" aria-label="Search">
	            </div>
	          </div>

	          <div id="datos_prestamos" style="overflow-X:scroll;" class="mb-5"></div>

			</div>
		</div>
	</div>
</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/toastr.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/buscadores.js"></script>
</body>
</html>