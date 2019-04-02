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
						console.log('Logeado');
						setTimeout(function(){location.href = './dentro.php';},1000);
					}else{
						toastr.error('Status','Datos incorrectos, intente nuevamente.',{timeOut:5000});
						console.log('Error');
					}
				}
			});
	});


	$("#form_prestamo").submit(function(event){
		event.preventDefault();
		$.ajax({
				url: '../modelo/agregar_prestamo.php',
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


function eliminar_prestamo(id_prestamo){
	$.ajax({
		url: '../controlador/eliminar_prestamo.php',
		type: 'POST',
		data: {id_prestamo:id_prestamo},
		beforeSend:function(){
			toastr.info('Status','Procesando...',{timeOut:3000});
		},
		success:function(data){
			if (data === 'ok') {
				toastr.success('','Eliminado correctamente!',{timeOut:5000});
				buscar_datos_prestamos();
			}else if (data === 'error'){
				toastr.error('','No se puedo eliminar, intente nuevamente.',{timeOut:5000});
			}
		}
	});
}
