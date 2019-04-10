<?php
include('../../modelo/dao/conexion.php');
$id_prestamo = $_POST['id_prestamo'];
$sql = "DELETE FROM prestamo WHERE id_prestamo = '".$id_prestamo."'";
echo "id: ".$id_prestamo;
if (Conexion::ejecutar($sql)) {
	return true;
}else{
	return false;
}

?>