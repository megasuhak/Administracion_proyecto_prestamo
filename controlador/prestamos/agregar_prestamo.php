<?php
include('../../modelo/dao/conexion.php');

$nombre = $_POST['nombre'];
$cedula_pasaporte = $_POST['cedula_pasaporte'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$provincia = $_POST['provincia'];
$ciudad = $_POST['ciudad'];
$calle = $_POST['calle'];
$monto = $_POST['monto'];
$meses = $_POST['meses'];
$comentario = $_POST['comentario'];
$tipo_garantia = $_POST['tipo_garantia'];
$tipo_prestamo = "garantia";
$estado = "pendiente";
$fecha_estado = date('Y-m-d');
$fecha = date('Y-m-d');

$sql = "INSERT INTO prestamo(nombre,cedula_pasaporte,telefono,fecha_nacimiento,email,ciudad,provincia,calle,monto,meses,tipo_garantia,tipo_prestamo,comentario,estado,fecha_estado,fecha) VALUES('".$nombre."','".$cedula_pasaporte."','".$telefono."','".$fecha_nacimiento."','".$email."','".$ciudad."','".$provincia."','".$calle."','".$monto."','".$meses."','".$tipo_garantia."','".$tipo_prestamo."','".$comentario."','".$estado."','".$fecha_estado."','".$fecha."')";

var_dump($_POST);

if (Conexion::ejecutar($sql)) {
	return true;
}else{
	return false;
}



?>