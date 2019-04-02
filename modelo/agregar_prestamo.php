<?php

include('dao/conexion.php');

$nombre = $_POST['nombre'];
$cedula_pasaporte = $_POST['cedula_pasaporte'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$provincia = $_POST['provincia'];
$ciudad = $_POST['ciudad'];
$calle = $_POST['calle'];
$monto = $_POST['monto'];
$comentario = $_POST['comentario'];
$tipo_garantia = $_POST['tipo_garantia'];
$tipo_prestamo = "garantia";
$estado = "pendiente";
$fecha = date('Y-m-d');

$sql = "INSERT INTO prestamo(nombre,cedula_pasaporte,telefono,fecha_nacimiento,email,ciudad,provincia,calle,monto,tipo_garantia,tipo_prestamo,comentario,estado,fecha) VALUES('".$nombre."','".$cedula_pasaporte."','".$telefono."','".$fecha_nacimiento."','".$email."','".$ciudad."','".$provincia."','".$calle."','".$monto."','".$tipo_garantia."','".$tipo_prestamo."','".$comentario."','".$estado."','".$fecha."')";

if (Conexion::ejecutar($sql)) {
	return true;
}else{
	return false;
}



?>