<?php 
include('../../modelo/dao/conexion.php');

$id_prestamo = $_POST['id_prestamo'];
$estado = $_POST['estado'];
$fecha = date('Y-m-d');

$sql = "UPDATE prestamo SET estado = '{$estado}' WHERE id_prestamo = '".$id_prestamo."'";
	
if ($estado == "aprobado") {

	$sql_fecha = "UPDATE prestamo SET fecha_estado = '".$fecha."' WHERE id_prestamo = '".$id_prestamo."'";
	Conexion::ejecutar($sql_fecha);

	$sql_pagos = "INSERT INTO pagos(id_prestamo,imagen,estado,fecha) VALUES('".$id_prestamo."','default.jpg','deuda','".$fecha."')";
	Conexion::ejecutar($sql_pagos);
}

if (Conexion::ejecutar($sql)) {
	return true;
}else{
	return false;
}


?>