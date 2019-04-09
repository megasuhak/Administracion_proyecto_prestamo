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
	                <a class="nav-link text-white btn btn-primary" data-toggle="modal" data-target="#exampleModal" href="#">Agregar prestamo</a>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
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
                   <input type="text" name="nombre" class="form-control" value="" required>
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">cédula/pasaporte*</label>
                   <input type="text" name="cedula_pasaporte" class="form-control" value="" required>
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">fecha de nacimiento(01/01/1990)*</label>
                   <input type="date" name="fecha_nacimiento" class="form-control" value="" required>
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">Teléfonos*</label>
                   <input type="tel" name="telefono" class="form-control" value="" required>
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">email*</label>
                   <input type="email" name="email" class="form-control" value="" required>
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">provincia*</label>
                   <input type="text" name="provincia" class="form-control" value="" required>
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">ciudad*</label>
                   <input type="text" name="ciudad" class="form-control" value="" required>
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">calle*</label>
                   <input type="text" name="calle" class="form-control" value="" required>
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
                   <input type="number" name="monto" class="form-control" value="" required>
                 </div>
               </div>
                 <div class="form-group">
                   <label for="nombres" class="text-uppercase">comentario*</label>
                   <textarea class="form-control" name="comentario" rows="3" required></textarea>
                 </div>
              <!--  <p>El cliente es responsable de la veracidad de sus datos, comprometiéndose a no introducir datos falsos y a proceder a la modificación de los mismos si fuera necesario. Al rellenar esta solicitud reconoce y autoriza a Avalyca S.R.L. a verificar dicha información con todos los medios a nuestro alcance, incluido la consulta en los burós de información de crédito que consideremos oportunos. Avalyca S.R.L. se reserva el derecho de solicitar más información en caso de que sea necesario. Una solicitud de préstamo no constituye una obligación imputable a Avalyca S.R.L. para la aprobación del mismo.</p>
               <p>Su información podrá ser compartida con otras entidades ajenas a AVALYCA S.R.L. en aquellos casos en los que dicha entidad deba realizar alguna acción para nosotros o para satisfacer la necesidad de su solicitud. En estos casos AVALYCA S.R.L. tratará de asegurar que la información sólo se utilizará por parte de estas entidades para realizar la función para la que se contratan. Sólo revelaremos aquella información que sea absolutamente precisa para dicha labor. En cualquier momento podrá ejercitar los derechos de acceso, rectificación, cancelación y oposición, comunicándolo a AVALYCA S.R.L. por e-mail (info@avalyca.com) o por carta a AVALYCA, calle Arquímedes Soto número 3, Higuey, provincia La Altagracia, República Dominicana.
               </p> -->
               <input type="submit" name="" class="btn btn-success text-white justify-content-center enviar" value="SOLICITAR">
             </form>
      </div>
    </div>
  </div>
</div>



<div class="modal fade prestamo" id="formulario_prestamo" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header bg-primary">
             <h5 class="modal-title text-uppercase text-white" id="exampleModalScrollableTitle">Solicitud Préstamos con garantía</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <form class="" id="form_prestamo" method="post">
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">nombres y apellidos*</label>
                   <input type="text" name="nombre" class="form-control" value="" required>
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">cédula/pasaporte*</label>
                   <input type="text" name="cedula_pasaporte" class="form-control" value="" required>
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">fecha de nacimiento(01/01/1990)*</label>
                   <input type="date" name="fecha_nacimiento" class="form-control" value="" required>
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">Teléfonos*</label>
                   <input type="tel" name="telefono" class="form-control" value="" required>
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">email*</label>
                   <input type="email" name="email" class="form-control" value="" required>
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">provincia*</label>
                   <input type="text" name="provincia" class="form-control" value="" required>
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">ciudad*</label>
                   <input type="text" name="ciudad" class="form-control" value="" required>
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">calle*</label>
                   <input type="text" name="calle" class="form-control" value="" required>
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
                   <input type="number" name="monto" class="form-control" value="" required>
                 </div>
               </div>
                 <div class="form-group">
                   <label for="nombres" class="text-uppercase">comentario*</label>
                   <textarea class="form-control" name="comentario" rows="3" required></textarea>
                 </div>
              <!--  <p>El cliente es responsable de la veracidad de sus datos, comprometiéndose a no introducir datos falsos y a proceder a la modificación de los mismos si fuera necesario. Al rellenar esta solicitud reconoce y autoriza a Avalyca S.R.L. a verificar dicha información con todos los medios a nuestro alcance, incluido la consulta en los burós de información de crédito que consideremos oportunos. Avalyca S.R.L. se reserva el derecho de solicitar más información en caso de que sea necesario. Una solicitud de préstamo no constituye una obligación imputable a Avalyca S.R.L. para la aprobación del mismo.</p>
               <p>Su información podrá ser compartida con otras entidades ajenas a AVALYCA S.R.L. en aquellos casos en los que dicha entidad deba realizar alguna acción para nosotros o para satisfacer la necesidad de su solicitud. En estos casos AVALYCA S.R.L. tratará de asegurar que la información sólo se utilizará por parte de estas entidades para realizar la función para la que se contratan. Sólo revelaremos aquella información que sea absolutamente precisa para dicha labor. En cualquier momento podrá ejercitar los derechos de acceso, rectificación, cancelación y oposición, comunicándolo a AVALYCA S.R.L. por e-mail (info@avalyca.com) o por carta a AVALYCA, calle Arquímedes Soto número 3, Higuey, provincia La Altagracia, República Dominicana.
               </p> -->
               <input type="submit" name="" class="btn btn-success text-white justify-content-center enviar" value="SOLICITAR">
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