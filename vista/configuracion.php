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
		<div class="col-sm-12 col-md-3 col-lg-3 pt-5 pb-3 bg-dark">
			<?php include('slider.php');?>
		</div>
		<div class="col-sm-12 col-md-8 col-lg-8 pt-5">
			<div class="container">
				
				<h2>Configuracion</h2>


<div class="container mt-4">
  <div class="row text-left justify-content-center">
    <div class="col-sm-12 col-md-5 col-lg-5 bg-light shadow">

    <form id="configurar_cuenta" method="POST">
      <div class="modal-header">
        <h5 class="modal-title">Informacion</h5>
      </div>
      <div class="modal-body">
      
      <div class="form-group">
        <label for="Nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="Nombre" value="<?=$_SESSION['nombre'];?>" placeholder="Ingrese su Nombre">
      </div>
      <div class="form-group">
        <label for="correo_registro">Correo</label>
        <input type="email" name="email" class="form-control" id="correo_registro" aria-describedby="emailHelp" value="<?=$_SESSION['email'];?>" placeholder="Ingrese su correo">
      </div>
      <div class="form-group">
        <label for="telefono_registro">Telefono</label>
        <input type="number" name="telefono" class="form-control" id="telefono_registro" aria-describedby="emailHelp" value="<?=$_SESSION['telefono'];?>" placeholder="Ingrese su telefono">
      </div>
    
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Editar</button>
      </div>
      </form>

    </div>

<div class="col-sm-12 col-md-2 col-lg-2"></div>

<div class="col-sm-12 col-md-5 col-lg-5 bg-light shadow">

    <form id="configurar_clave" method="POST">
      <div class="modal-header">
        <h5 class="modal-title">Contraseña</h5>
      </div>
      <div class="modal-body">
      
      <div class="form-group">
        <label for="clave_anterior">Contraseña anterior</label>
        <input type="password" name="clave_anterior" class="form-control" id="clave_anterior" aria-describedby="emailHelp" placeholder="Ingrese su clave_anterior">
      </div>
      <div class="form-group">
        <label for="clave_registro">Nueva contraseña</label>
        <input type="password" name="nueva_clave" class="form-control" id="clave_registro" placeholder="Ingrese su nueva contraseña">
      </div>
      <div class="form-group">
        <label for="clave_registro">Repetir contraseña</label>
        <input type="password" name="repetir_clave" class="form-control" id="clave_registro" placeholder="Ingrese su repetir contraseña">
      </div>
    
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Editar</button>
      </div>
      </form>

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