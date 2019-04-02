<?php 
include('../modelo/dao/conexion.php');

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
			<th>Ciudad</th>
			<th>Acciones</th></thead><tbody>";


	foreach ($datos as $key => $value) {
	    $result .= "<tr><td>{$value['id_prestamo']}</td>
	    			<td>{$value['nombre']}</td>
	    			<td>{$value['cedula_pasaporte']}</td>
	    			<td>{$value['telefono']}</td>
	    			<td>{$value['fecha_nacimiento']}</td>
	    			<td>{$value['email']}</td>
	    			<td>{$value['ciudad']}</td>
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