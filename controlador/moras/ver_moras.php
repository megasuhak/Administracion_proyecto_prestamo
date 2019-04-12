<?php 
session_start();
include('../../modelo/dao/conexion.php');

        //consultar pagos mensuales y agregar mora
        $sql_prestamo_data_user = "SELECT * FROM prestamo WHERE email = '".$_SESSION['email']."'";
		$prestamo_user = Conexion::una_consulta($sql_prestamo_data_user);

$result = "";
$sql = "SELECT * FROM moras WHERE id_prestamo = '".$prestamo_user['id_prestamo']."' ORDER BY id DESC limit 30";
if (isset($_POST['consulta'])) {
	$q = Conexion::getConexion()->real_escape_string($_POST['consulta']);
	$sql = "SELECT * FROM moras WHERE id_prestamo = '".$prestamo_user['id_prestamo']."' LIKE '%".$q."%' OR fecha LIKE '%".$q."%' OR estado LIKE '%".$q."%'";
}

$datos = Conexion::consultar($sql);
if (count($datos) > 0) {

$result .= "<table class='table mt-3'><thead>
			<th>Id</th>
			<th>Codigo prestamo</th>
			<th>Mora</th>
			<th>Residuo</th>
			<th>Interes</th>
			<th>Fecha</th></thead><tbody>";


	foreach ($datos as $key => $value) {

		//proximo mes
		$fecha = explode("-",$value['fecha']);
		$dia = $fecha[0];
		$mes = (($fecha[1]+1)<10)? "0".($fecha[1]+1): ($fecha[1]+1);
		$ano = $fecha[2]+5;
        $verificar_fecha = $dia."-".$mes."-".$ano;

        //consultar pagos mensuales y agregar mora
        $sql_prestamo = "SELECT * FROM prestamo WHERE id_prestamo = '".$value['id_prestamo']."'";
		$prestamo = Conexion::una_consulta($sql_prestamo);

		//calculando la taza 
        $interes = (($prestamo['monto']*(10*.01))/$prestamo['meses']);
		$pago_mensul = round((($prestamo['monto']/$prestamo['meses'])+$interes),2);
		$mora_total = round(((30*$pago_mensul)/100),2);
		// echo $mora_total;
		$residuo = (($prestamo['monto']-$mora_total)-$pago_mensul);

	    $result .= "<tr><td>{$value['id']}</td>
	    			<td>(P-{$value['id_prestamo']})</td>
	    			<td>\${$mora_total}</td>
	    			<td><span class='badge badge-danger'>{$residuo}</span></td>
	    			<td>30%</td>
	    			<td>{$value['fecha']}</td></tr>";

	}

$result .= "</tbody></table>";

}else{
	$result .= "<br><h3 class='text-danger'>Busqueda no encontrada :(</h3>";
}

echo $result;

?>