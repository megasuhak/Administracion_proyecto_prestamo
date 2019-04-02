$(buscar_datos_prestamos());

function buscar_datos_prestamos(consulta){
	$.ajax({
		url: '../controlador/ver_prestamos.php',
		type: 'POST',
		dataType: 'html',
		data: {consulta:consulta},
		beforeSend:function(){
			$("#datos_paticipantes").html("<br><h3>Cargando....</h3>");
		}
	}).
	done(function(response){
		$("#datos_prestamos").html(response);
	}).
	fail(function(){
		console.log("Error :(");
	})
}

$(document).on('keyup','#buscador_prestamos',function(){
	var valor = $(this).val();
	if(valor != ""){
		buscar_datos_prestamos(valor);
	}else{
		buscar_datos_prestamos();
	}
});