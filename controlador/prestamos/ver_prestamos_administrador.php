<?php 
include('../../modelo/dao/conexion.php');

$result = "";
$sql = "SELECT * FROM prestamo ORDER BY id_prestamo DESC limit 30";
if (isset($_POST['consulta'])) {
	$q = Conexion::getConexion()->real_escape_string($_POST['consulta']);
	$sql = "SELECT * FROM prestamo WHERE nombre LIKE '%".$q."%' OR cedula_pasaporte LIKE '%".$q."%' OR email LIKE '%".$q."%'";
}

$datos = Conexion::consultar($sql);
if (count($datos) > 0) {

$result .= "<table class='table mt-3'><thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Cedula_pasaporte</th>
			<th>Telefono</th>
			<th>Nacimiento</th>
			<th>Email</th>
			<th>Monto</th>
			<th>Meses</th>
			<th>Pagos Mensual</th>
			<th>Garantia</th>
			<th>Estado</th>
			<th>Acciones</th></thead><tbody>";


	foreach ($datos as $key => $value) {

		$interes = (($value['monto']*(10*.01))/$value['meses']);
		$pago_mensul = (($value['monto']/$value['meses'])+$interes);
		if($value['estado'] == 'pendiente'){
			$clase_estado="secondary";
		}else if($value['estado'] == 'aprobado'){
			$clase_estado="success";
		}else if($value['estado'] == 'rechazado'){
			$clase_estado="danger";
		}

	    $result .= "<tr><td>{$value['id_prestamo']}</td>
	    			<td>{$value['nombre']}</td>
	    			<td>{$value['cedula_pasaporte']}</td>
	    			<td>{$value['telefono']}</td>
	    			<td>{$value['fecha_nacimiento']}</td>
	    			<td>{$value['email']}</td>
	    			<td>{$value['monto']}</td>
	    			<td>{$value['meses']}</td>
	    			<td><span class='badge badge-info'>{$pago_mensul}</span></td>
	    			<td>{$value['tipo_garantia']}</td>
	    			<td><span class='badge badge-{$clase_estado}'>{$value['estado']}</span></td>
	    			<td>
	    				<a class='btn btn-warning' onclick=''><img src='../vista/assets/img/editar.png' width='20'></a>
	    				<a class='btn btn-danger' onclick='eliminar_prestamo({$value['id_prestamo']});'><img src='../vista/assets/img/eliminar.png' width='18'></a>
	    				<a class='btn btn-secondary text-white' onclick=''>Pendiente</a>
	    			</td></tr>";

	}

$result .= "</tbody></table>";

}else{
	$result .= "<br><h3 class='text-danger'>Busqueda no encontrada :(</h3>";
}

echo $result;

?>