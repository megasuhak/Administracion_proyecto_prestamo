<?php

include('../modelo/dao/conexion.php');

$email = $_POST['email'];
$clave = $_POST['clave'];

$cx = Conexion::login($email,$clave);
if ($cx) {
	return true;
}else{
	return false;
}


?>