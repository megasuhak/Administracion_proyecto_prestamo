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
				
				<h2>Prestamos</h2>

	          <div class="row">
	            <div class="col-sm-12 col-md-4 col-lg-4">
	                <a class="nav-link text-white btn btn-primary" data-toggle="modal" data-target="#prestamo" href="#">Agregar prestamo</a>
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


<div class="modal fade" id="prestamo" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Solicitar prestamo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                     <form class="" id="form_prestamo" method="post">
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">nombres y apellidos*</label>
                   <input type="text" value="<?=$_SESSION['nombre'];?>" class="form-control" disabled>
                   <input type="hidden" name="nombre" value="<?=$_SESSION['nombre'];?>">
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">cédula/pasaporte*</label>
                   <input type="text" name="cedula_pasaporte" class="form-control" value="<?=$_SESSION['cedula'];?>" required disabled>
                   <input type="hidden" name="cedula_pasaporte" class="form-control" value="<?=$_SESSION['cedula'];?>">
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">fecha de nacimiento(01/01/1990)*</label>
                   <input type="date" class="form-control" value="<?=$_SESSION['fecha_nacimiento'];?>" disabled>
                   <input type="hidden" name="fecha_nacimiento" class="form-control" value="<?=$_SESSION['fecha_nacimiento'];?>">
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">Teléfonos*</label>
                   <input type="tel" class="form-control" value="<?=$_SESSION['telefono'];?>" disabled>
                   <input type="hidden" name="telefono" class="form-control" value="<?=$_SESSION['telefono'];?>">
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">email*</label>
                   <input type="email" name="email" value="<?=$_SESSION['email'];?>" class="form-control" required disabled>
                   <input type="hidden" name="email" value="<?=$_SESSION['email'];?>" class="form-control">
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">provincia*</label>
                   <input type="text" name="provincia" class="form-control" required>
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">ciudad*</label>
                   <input type="text" name="ciudad" class="form-control" required>
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">calle*</label>
                   <input type="text" name="calle" class="form-control" required>
                 </div>
               </div>
                <div class="form_group">
                   <label for="tipo_garantia" class="text-uppercase">Tipo garantia</label>
                  <select name="tipo_garantia" id="tipo_garantia" class="form-control">
                    <option value="aval">Aval</option>
                    <option value="embargo">Embargo</option>
                    <option value="hipoteca">Hipoteca</option>
                  </select>
                 <div class="form-group">
                   <label for="nombres" class="text-uppercase">Monto rd$*</label>
                   <input type="number" name="monto" class="form-control" required>
                 </div>
               </div>
                 <div class="form-group">
                   <label for="nombres" class="text-uppercase">comentario*</label>
                   <textarea class="form-control" name="comentario" rows="3" required></textarea>
                 </div>
            
               <input type="submit" name="" class="btn btn-success text-white justify-content-center enviar" value="Solicitar prestamo">
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