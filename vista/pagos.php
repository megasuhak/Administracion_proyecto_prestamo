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
                  <h3>Pagos de prestamos</h3>
	            </div>
	            <div class="col-sm-12 col-md-4 col-lg-4"></div>
	            <div class="col-sm-12 col-md-4 col-lg-4">
	                <input class="form-control mr-sm-2" type="search" name="buscar" placeholder="Buscar" id="buscador_pagos" aria-label="Search">
	            </div>
	          </div>

	          <div id="datos_pagos" style="overflow-X:scroll;" class="mb-5"></div>

			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

 <form id="form_usuario" method="POST">
      <div class="modal-body">

  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese su nombre" required="">
      </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
      <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Ingrese su apellido" required="">
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
      <div class="form-group">
        <label for="fecha_nacimiento">Fecha de nacimiento</label>
        <input type="date" name="fecha_nacimiento" class="form-control" id="fecha_nacimiento" placeholder="Ingrese su fecha de nacimiento" required="">
      </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
      <div class="form-group">
        <label for="correo">Correo</label>
        <input type="email" name="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Ingrese su correo" required="">
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
      <div class="form-group">
        <label for="cedula">Cedula</label>
        <input type="number" name="cedula" class="form-control" id="cedula" placeholder="Ingrese su cedula" required="">
      </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
      <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="number" name="telefono" class="form-control" id="telefono" placeholder="Ingrese su telefono" required="">
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
        <div class="form-group">
          <label for="direccion">Direccion</label>
          <textarea class="form-control" id="direccion" name="direccion" rows="3" placeholder="Ingrese su direccion"></textarea>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
            <div class="form-group">
        <label for="clave">Contraseña</label>
        <input type="password" name="clave" class="form-control" id="clave" placeholder="Ingrese su contraseña">
      </div>
    </div>
  </div>
    
      </div>
      <div class="modal-footer">
        <a href="login.php" class="btn btn-primary text-white" title="">Ingresar</a>
        <button type="submit" class="btn btn-success">Registrar datos</button>
      </div>
      </form>

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