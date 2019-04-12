<?php 
session_start();
include('../modelo/dao/conexion.php');
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
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>

<?php include('header_dentro.php');?>
	
<div class="justify-content-center pt-5">
	<div class="row">
		<div class="col-sm-12 col-md-3 col-lg-3 pt-5 pb-3" style="background:#D5DBDB;">
			<?php include('slider.php');?>
		</div>
		<div class="col-sm-12 col-md-8 col-lg-8 pt-5">
			<div class="container mt-3">
				
				<h2>Estadisticas de prestamos</h2>

<div class="row">
	<div class="col-sm-12 col-md-8 col-lg-8 pt-5">
		<canvas id="myChart"></canvas>
	</div>
	<div class="col-sm-12 col-md-4 col-lg-4 pt-5">


<?php 

$result = "";
$sql = "SELECT * FROM usuarios ORDER BY id_user DESC limit 3";

$datos = Conexion::consultar($sql);

foreach ($datos as $key => $value) {?>
<div class="alert alert-success">
<div class="row">
	<div class="col-sm-3 col-md-3 col-lg-3">
		<div class="container">
			<img src="assets/img/default.png" width="40px" alt="">
		</div>
	</div>
	<div class="col-sm-6 col-md-6 col-lg-6">
		<div class="container aling-center">
			<?=$value['nombre']?>
		</div>
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3">
		<div class="container aling-center">
			<?=$value['id_user']?>
		</div>
	</div>
</div>
</div>
<?php }?>

	</div>
</div>

			</div>
		</div>
	</div>
</div>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Prestamos',
            backgroundColor: 'skyblue',
            borderColor: 'green',
            data: [0, 10, 5, 2, 20, 30, 45]
        }]
    },

    // Configuration options go here
    options: {}
});
</script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>