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

$result .= "<table class='table mt-3 text-center'><thead>
			<th>Id</th>
			<th>Codigo prestamo</th>
			<th>Comprobante</th>
			<th>Estado</th>
			<th>Fecha</th>
			<th>Acciones</th></thead><tbody>";


	foreach ($datos as $key => $value) {

		if($value['estado'] == 'deuda'){
			$clase_estado="danger";
		}else if($value['estado'] == 'pago'){
			$clase_estado="success";
		}

		if ($value['fecha']) {
			# code...
		}

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
		$fecha = date("Y-m-d");


        if ($verificar_fecha == date("Y-m-d")) {
        		$sql_moras = "INSERT INTO moras(id_prestamo,mora,fecha) VALUES('".$value['id_prestamo']."','".$mora_total."','".$fecha."')";
				Conexion::ejecutar($sql_moras);
        }

        //obtener imagen
        $sql_comprobante = "SELECT * FROM comprobantes WHERE id_pago = '".$value['id']."'";
		$comprobante = Conexion::una_consulta($sql_comprobante);

        // echo $verificar_fecha."<br>";

	    $result .= "<tr><td>{$value['id']}</td>
	    			<td>(P-{$value['id_prestamo']})</td>
	    			<td>
	    			<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#comprobante'><img src='https://www.prestophoto.com/storage/static/landing/pdf-book-printing/upload-icon.png' width='30px' onclick='valor_id_pago_comprobante({$value['id']},\"{$comprobante['imagen']}\")'></button>
	    			</td>
	    			<td>
	    			<span class='badge badge-{$clase_estado}'>{$value['estado']}</span></td>
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


<!-- Modal -->
<div class="modal fade" id="comprobante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pago con comprobante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <center>
      	<img src="https://portal.icetex.gov.co/Portal/images/default-source/el-icetex-imagenes/iconos-estudiantes/ico-pague-facil.png" id="imagen_comprobante" alt="" width="50%">
      </center>
      <div class="modal-body">
        <form id="frm_comprobante" enctype="multipart/form-data">
        <input type="hidden" id="id_pago_comprobante" name="id_pago_comprobante">
		<input type="file" name="imagen" id="imagen" accept="image/*" required="">
		<input type="submit" class="btn btn-success" value="Guardar Imagen">
	</form>
      </div>

    </div>
  </div>
</div>