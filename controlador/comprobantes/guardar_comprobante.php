<?php
include('../../modelo/dao/conexion.php');

$id_pago = $_POST['id_pago_comprobante'];
$ruta_carpeta = "../../vista/assets/img/pagos/";
$ruta_guardar_archivo = $ruta_carpeta.basename($_FILES['imagen']['name']);
$nombre = $_FILES['imagen']['name'];
$fecha = date("Y-m-d");


if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_guardar_archivo)) {

	$sql_pagos = "INSERT INTO comprobantes(id_pago,imagen,fecha) VALUES('".$id_pago."','".$nombre."','".$fecha."')";
	Conexion::ejecutar($sql_pagos);

	return true;
}else{
	return false;
}

?>