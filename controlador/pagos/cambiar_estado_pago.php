<?php 
include('../../modelo/dao/conexion.php');

$id_pago = $_POST['id_pago'];

$sql = "SELECT * FROM pagos WHERE id = '".$id_pago."'";
$datos = Conexion::una_consulta($sql);


	if ($datos['estado'] == 'deuda') {
		
		$sql = "UPDATE pagos SET estado = 'pago' WHERE id = '".$id_pago."'";
		Conexion::ejecutar($sql);
		return true;

	}else{

		$sql = "UPDATE pagos SET estado = 'deuda' WHERE id = '".$id_pago."'";
		Conexion::ejecutar($sql);
		return true;
	}

?>