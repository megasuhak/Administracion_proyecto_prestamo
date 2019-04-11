$(buscar_datos_prestamos());
$(buscar_datos_prestamos_administrador());
$(buscar_datos_usuarios());
$(buscar_datos_administradores());
$(buscar_datos_pagos());


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

//administrador
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

//usuarios
function buscar_datos_usuarios(consulta){
	$.ajax({
		url: '../controlador/usuarios/ver_usuarios.php',
		type: 'POST',
		dataType: 'html',
		data: {consulta:consulta},
		beforeSend:function(){
			$("#datos_usuarios").html("<br><h3>Cargando....</h3>");
		}
	}).
	done(function(response){
		$("#datos_usuarios").html(response);
	}).
	fail(function(){
		console.log("Error :(");
	})
}

$(document).on('keyup','#buscador_prestamos',function(){
	var valor = $(this).val();
	if(valor != ""){
		buscar_datos_usuarios(valor);
	}else{
		buscar_datos_usuarios();
	}
});

//administradores
function buscar_datos_administradores(consulta){
	$.ajax({
		url: '../controlador/administradores/ver_administradores.php',
		type: 'POST',
		dataType: 'html',
		data: {consulta:consulta},
		beforeSend:function(){
			$("#datos_administradores").html("<br><h3>Cargando....</h3>");
		}
	}).
	done(function(response){
		$("#datos_administradores").html(response);
	}).
	fail(function(){
		console.log("Error :(");
	})
}

$(document).on('keyup','#buscador_prestamos',function(){
	var valor = $(this).val();
	if(valor != ""){
		buscar_datos_administradores(valor);
	}else{
		buscar_datos_administradores();
	}
});

//pagos
function buscar_datos_pagos(consulta){
	$.ajax({
		url: '../controlador/pagos/ver_pagos.php',
		type: 'POST',
		dataType: 'html',
		data: {consulta:consulta},
		beforeSend:function(){
			$("#datos_pagos").html("<br><h3>Cargando....</h3>");
		}
	}).
	done(function(response){
		$("#datos_pagos").html(response);
	}).
	fail(function(){
		console.log("Error :(");
	})
}

$(document).on('keyup','#buscador_pagos',function(){
	var valor = $(this).val();
	if(valor != ""){
		buscar_datos_pagos(valor);
	}else{
		buscar_datos_pagos();
	}
});