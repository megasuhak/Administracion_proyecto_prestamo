<?php
include('../../modelo/dao/conexion.php');
$id_usuario = $_POST['id_usuario'];
$sql = "DELETE FROM usuarios WHERE id_user = '".$id_usuario."'";
echo "id: ".$id_usuario;
if (Conexion::ejecutar($sql)) {
	return true;
}else{
	return false;
}

?>