<?php 
session_start();
include('../../modelo/dao/conexion.php');

$result = "";
$sql = "SELECT * FROM prestamo WHERE email = '".$_SESSION['email']."' ORDER BY id_prestamo DESC limit 30";
if (isset($_POST['consulta'])) {
	$q = Conexion::getConexion()->real_escape_string($_POST['consulta']);
	$sql = "SELECT * FROM prestamo WHERE email = '".$_SESSION['email']."' AND nombre LIKE '%".$q."%' OR cedula_pasaporte LIKE '%".$q."%'";
}

$datos = Conexion::consultar($sql);
if (count($datos) > 0) {

$result .= "<table class='table mt-3'><thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Cedula_pasaporte</th>
			<th>Telefono</th>
			<th>Monto</th>
			<th>Meses</th>
			<th>Pagos Mensual</th>
			<th>Garantia</th>
			<th>Estado</th>
			<th>Acciones</th></thead><tbody>";


	foreach ($datos as $key => $value) {

		$interes = (($value['monto']*(10*.01))/$value['meses']);
		$pago_mensul = (($value['monto']/$value['meses'])+$interes);
		$editar = "";
		$eliminar = "";
		if($value['estado'] == 'pendiente'){
			$clase_estado="secondary";
			$editar = "<a class='btn btn-warning' onclick=''><img src='../vista/assets/img/editar.png' width='20'></a>";
			$eliminar = "<a class='btn btn-danger' onclick='eliminar_prestamo({$value['id_prestamo']});'><img src='../vista/assets/img/eliminar.png' width='18'></a>";
		}else if($value['estado'] == 'aprobado'){
			$clase_estado="success";
		}else if($value['estado'] == 'rechazado'){
			$clase_estado="danger";
			$eliminar = "<a class='btn btn-danger' onclick='eliminar_prestamo({$value['id_prestamo']});'><img src='../vista/assets/img/eliminar.png' width='18'></a>";
		}


	    $result .= "<tr><td>{$value['id_prestamo']}</td>
	    			<td>{$value['nombre']}</td>
	    			<td>{$value['cedula_pasaporte']}</td>
	    			<td>{$value['telefono']}</td>
	    			<td>{$value['monto']}</td>
	    			<td>{$value['meses']}</td>
	    			<td><span class='badge badge-info'>{$pago_mensul}</span></td>
	    			<td>{$value['tipo_garantia']}</td>
	    			<td><span class='badge badge-{$clase_estado}'>{$value['estado']}</span></td>
	    			<td>
	    			{$editar}
	    			{$eliminar}
	    			</td></tr>";

	}

$result .= "</tbody></table>";

}else{
	$result .= "<br><h3 class='text-danger'>Busqueda no encontrada :(</h3>";
}

echo $result;

?>