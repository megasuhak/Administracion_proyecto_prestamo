$(document).ready(function(){

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
					// toastr.success('Status','Datos correctos!',{timeOut:5000});
					Swal.fire({position: 'top',type: 'success',
					  title: 'Datos correctos',
					  showConfirmButton: false,
					  timer: 1500
					})
					setTimeout(function(){location.href = './dentro.php';},1000);
				}else{
					// toastr.error('Status','Datos incorrectos, intente nuevamente.',{timeOut:5000});
					Swal.fire({position: 'top',type: 'error',
					  title: 'Datos incorrectos, intentar nuevamente!',
					  showConfirmButton: false,
					  timer: 1500
					})
				}
			}
		});
	});

	$("#form_prestamo").submit(function(event){
		event.preventDefault();
		$.ajax({
			url: '../controlador/agregar_prestamo.php',
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
		url: '../controlador/eliminar_prestamo.php',
		type: 'POST',
		data: {id_prestamo:id_prestamo},
		beforeSend:function(){
			toastr.info('Status','Procesando...',{timeOut:3000});
		},
		success:function(data){
			if (data) {
				// toastr.success('','Eliminado correctamente!',{timeOut:5000});
				Swal.fire({position: 'top',type: 'warning',
				  title: 'Eliminado correctamente!',
				  showConfirmButton: false,
				  timer: 1500
				});
				buscar_datos_prestamos();
			}else{
				// toastr.error('','No se puedo eliminar, intente nuevamente.',{timeOut:5000});
				Swal.fire({position: 'top',type: 'error',
				  title: 'Error al eliminar prestamo',
				  showConfirmButton: false,
				  timer: 1500
				});
			}
		}
	});
}
