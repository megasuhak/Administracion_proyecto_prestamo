<?php 
include('../../modelo/dao/conexion.php');

$result = "";
$sql = "SELECT * FROM pagos ORDER BY id DESC limit 30";
if (isset($_POST['consulta'])) {
	$q = Conexion::getConexion()->real_escape_string($_POST['consulta']);
	$sql = "SELECT * FROM pagos WHERE id_prestamo LIKE '%".$q."%' OR fecha LIKE '%".$q."%' OR estado LIKE '%".$q."%'";
}

$datos = Conexion::consultar($sql);
if (count($datos) > 0) {

$result .= "<table class='table mt-3'><thead>
			<th>Id</th>
			<th>Codigo prestamo</th>
			<th>Imagen</th>
			<th>Estado</th>
			<th>Fecha</th>
			<th>Acciones</th></thead><tbody>";


	foreach ($datos as $key => $value) {

		if($value['estado'] == 'deuda'){
			$clase_estado="danger";
		}else if($value['estado'] == 'pago'){
			$clase_estado="success";
		}

	    $result .= "<tr><td>{$value['id']}</td>
	    			<td>(P-{$value['id_prestamo']})</td>
	    			<td>{$value['imagen']}</td>
	    			<td><span class='badge badge-{$clase_estado}'>{$value['estado']}</span></td>
	    			<td>{$value['fecha']}</td>
	    			<td width='200px'>
	    				<a class='btn btn-secondary text-white' onclick='estado_pago_prestamo({$value['id']})'>Estado</a>
	    			</td></tr>";

	}

$result .= "</tbody></table>";

}else{
	$result .= "<br><h3 class='text-danger'>Busqueda no encontrada :(</h3>";
}

echo $result;

?>