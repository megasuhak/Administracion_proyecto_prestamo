$(document).ready(function(){

$("#frm_comprobante").submit(function(event){
		event.preventDefault();

		var formData = new FormData;
		formData.append("id_pago_comprobante",$("input[name=id_pago_comprobante]").val());
		formData.append("imagen",$("input[name=imagen]")[0].files[0]);

		$.ajax({
			url:'../controlador/comprobantes/guardar_comprobante.php',
			type:'POST',
			data:formData,
			method:'POST',
			processData:false,
			contentType:false,
			cache:false,
			beforeSend:function(){
				toastr.info('Status','Procesando...',{timeOut:3000});
			},
			success: function(data){
				if(data){
					toastr.success('','Subida completado!',{timeOut:5000});
					buscar_datos_pagos();
					$("#comprobante").modal('hide');
				}else{
					toastr.error('','Intantar mas tarde',{timeOut:5000});
				}
			}
		});
	
	});

	$("#login_usuario").submit(function(event){
		event.preventDefault();
		$.ajax({
			url: '../controlador/login_usuario.php',
			type: 'POST',
			data: $(this).serialize(),
			beforeSend:function(){
				toastr.info('Status','Procesando...',{timeOut:3000});
			},
			success:function(data){
				if (data) {
					toastr.success('Status','Datos correctos!',{timeOut:5000});
					setTimeout(function(){location.href = './dentro.php';},1000);
				}else{
					toastr.error('Status','Datos incorrectos, intente nuevamente.',{timeOut:5000});
				}
			}
		});
	});

	$("#form_prestamo").submit(function(event){
		event.preventDefault();
		$.ajax({
			url: '../controlador/prestamos/agregar_prestamo.php',
			type: 'POST',
			data: $(this).serialize(),
			beforeSend:function(){
				toastr.info('Status','Procesando...',{timeOut:3000});
			},
			success:function(data){
				if (data) {
					toastr.success('Status','Registro completado!',{timeOut:5000});
					console.log('Guardado');
					$('#formulario_prestamo').modal('hide');
					buscar_datos_prestamos();
					$('#form_prestamo')[0].reset();
				}else{
					toastr.error('Status','No se puedo registrar, intente nuevamente.',{timeOut:5000});
					console.log('Error');
				}
			}
		});
	});


	$("#form_usuario").submit(function(event){
		event.preventDefault();
		$.ajax({
			url: '../controlador/registro_usuarios.php',
			type: 'POST',
			data: $(this).serialize(),
			beforeSend:function(){
				toastr.info('Status','Procesando...',{timeOut:3000});
			},
			success:function(data){
				if (data) {
					// toastr.success('','Registro completado!',{timeOut:5000});
					$('#form_usuario')[0].reset();
					setTimeout(function(){location.href='login.php'},2000);
					Swal.fire({position: 'top',type: 'success',
					  title: 'Registrado correctamente',
					  showConfirmButton: false,
					  timer: 1500
					});
				}else{
					Swal.fire({position: 'top',type: 'error',
					  title: 'Error al registrarte',
					  showConfirmButton: false,
					  timer: 1500
					});
				}
			}
		});	
	});

});


function eliminar_prestamo(id_prestamo){
	$.ajax({
		url: '../controlador/prestamos/eliminar_prestamo.php',
		type: 'POST',
		data: {id_prestamo:id_prestamo},
		beforeSend:function(){
			toastr.info('Status','Procesando...',{timeOut:3000});
		},
		success:function(data){
			if (data) {
				toastr.success('','Eliminado correctamente!',{timeOut:5000});
				buscar_datos_prestamos();
				buscar_datos_prestamos_administrador();
			}else{
				toastr.error('','No se puedo eliminar, intente nuevamente.',{timeOut:5000});
			}
		}
	});
}


function estado_prestamo(id_prestamo,estado){
	$.ajax({
		url: '../controlador/prestamos/cambiar_estado_prestamo.php',
		type: 'POST',
		data: {id_prestamo:id_prestamo,estado:estado},
		beforeSend:function(){
			toastr.info('Status','Procesando...',{timeOut:3000});
		},
		success:function(data){
			if (data) {
				toastr.success('','correcto!',{timeOut:5000});
				buscar_datos_prestamos_administrador();
			}else if (data) {
				toastr.error('','Intente nuevamente.',{timeOut:5000});
			}
		}
	});
}


function estado_pago_prestamo(id_pago){
	$.ajax({
		url: '../controlador/pagos/cambiar_estado_pago.php',
		type: 'POST',
		data: {id_pago:id_pago},
		beforeSend:function(){
			toastr.info('Status','Procesando...',{timeOut:3000});
		},
		success:function(data){
			if (data) {
				toastr.success('','correcto!',{timeOut:5000});
				buscar_datos_pagos();
			}else if (data) {
				toastr.error('','Intente nuevamente.',{timeOut:5000});
			}
		}
	});
}


function valor_id_pago_comprobante(id_pago,imagen){
	console.log(imagen);
	$("#id_pago_comprobante").val(id_pago);
	if (imagen == "") {
		$("#imagen_comprobante").attr('src','https://munini.net/wp/wp-content/plugins/woocommerce/assets/images/placeholder.png');
	}else{
		$("#imagen_comprobante").attr('src','./assets/img/pagos/'+imagen);
	}
}