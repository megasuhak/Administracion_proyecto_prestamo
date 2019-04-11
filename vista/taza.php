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
				
				<h2>Calcular taza</h2>

				<div class="row justify-content-center">
					<div class="col-sm-12 col-md-5 col-lg-5 pt-5 pb-5 shadow">
			                 <div class="form-group">
			                   <label for="monto" class="text-uppercase">Monto</label>
			                   <input type="number" name="monto" id="monto" class="form-control" placeholder="Monto" required>
			                 </div>
			                 <div class="form-group">
			                   <label for="meses" class="text-uppercase">Meses</label>
			                   <input type="number" name="meses" id="meses" class="form-control" placeholder="Meses" required>
			                 </div>
			                 <div class="form-group">
			                   <label for="interes" class="text-uppercase">Interes</label>
			                   <input type="number" name="interes" id="interes" class="form-control" placeholder="Interes" required>
			                 </div>

			                 <div class="alert alert-warning text-center" role="alert">
			                 	monto a pagar mensual
							  <span id="total"></span>
							</div>

			               <input type="button" onclick="calcular()" class="btn btn-primary text-white justify-content-center" value="Calcular taza">
					</div>
				</div>


			</div>
		</div>
	</div>
</div>

<script>
	
function calcular(){
	var monto = $('#monto').val();
	var meses = $('#meses').val();
	var interes = $('#interes').val();
	var total = $('#total');
	var interes_totalt = (monto * (interes * .01)) / meses;
	var pagos_mensuales = ((monto / meses) + interes_totalt).toFixed(2);
	total.html(pagos_mensuales);
}

</script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>