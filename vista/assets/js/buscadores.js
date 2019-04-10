$(buscar_datos_prestamos());
$(buscar_datos_prestamos_administrador());


function buscar_datos_prestamos(consulta){
	$.ajax({
		url: '../controlador/prestamos/ver_mis_prestamos.php',
		type: 'POST',
		dataType: 'html',
		data: {consulta:consulta},
		beforeSend:function(){
			$("#datos_prestamos").html("<br><h3>Cargando....</h3>");
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


function buscar_datos_prestamos_administrador(consulta){
	$.ajax({
		url: '../controlador/prestamos/ver_prestamos_administrador.php',
		type: 'POST',
		dataType: 'html',
		data: {consulta:consulta},
		beforeSend:function(){
			$("#datos_prestamos_administrador").html("<br><h3>Cargando....</h3>");
		}
	}).
	done(function(response){
		$("#datos_prestamos_administrador").html(response);
	}).
	fail(function(){
		console.log("Error :(");
	})
}

$(document).on('keyup','#buscador_prestamos',function(){
	var valor = $(this).val();
	if(valor != ""){
		buscar_datos_prestamos_administrador(valor);
	}else{
		buscar_datos_prestamos_administrador();
	}
});