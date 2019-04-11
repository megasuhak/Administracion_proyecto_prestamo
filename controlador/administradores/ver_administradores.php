<?php 
include('../../modelo/dao/conexion.php');

$result = "";
$sql = "SELECT * FROM usuarios WHERE role = 'admin' ORDER BY id_user DESC limit 30";
if (isset($_POST['consulta'])) {
	$q = Conexion::getConexion()->real_escape_string($_POST['consulta']);
	$sql = "SELECT * FROM usuarios WHERE nombre LIKE '%".$q."%' OR cedula LIKE '%".$q."%' OR email LIKE '%".$q."%' AND role = 'admin'";
}

$datos = Conexion::consultar($sql);
if (count($datos) > 0) {

$result .= "<table class='table mt-3'><thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Cedula</th>
			<th>Telefono</th>
			<th>Nacimiento</th>
			<th>Email</th>
			<th>Estado</th>
			<th>Acciones</th></thead><tbody>";


	foreach ($datos as $key => $value) {

		if($value['estado'] == 'activo'){
			$clase_estado="success";
		}else{
			$clase_estado="danger";
		}

	    $result .= "<tr><td>{$value['id_user']}</td>
	    			<td>{$value['nombre']}</td>
	    			<td>{$value['cedula']}</td>
	    			<td>{$value['telefono']}</td>
	    			<td>{$value['fecha_nacimiento']}</td>
	    			<td>{$value['email']}</td>
	    			<td><span class='badge badge-{$clase_estado}'>{$value['estado']}</span></td>
	    			<td>
	    				<a class='btn btn-warning' onclick='editar_usuario({$value['id_user']})'><img src='../vista/assets/img/editar.png' width='20'></a>
	    				<a class='btn btn-danger' onclick='eliminar_usuario({$value['id_user']});'><img src='../vista/assets/img/eliminar.png' width='18'></a>
	    				<a class='btn btn-secondary text-white' onclick='cambiar_estado_usuario({$value['id_user']})'>Estado</a>
	    			</td></tr>";

	}

$result .= "</tbody></table>";

}else{
	$result .= "<br><h3 class='text-danger'>Busqueda no encontrada :(</h3>";
}

echo $result;

?>