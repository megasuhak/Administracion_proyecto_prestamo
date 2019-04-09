<?php
include('../modelo/dao/conexion.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$email = $_POST['email'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$clave = md5($_POST['clave']);
$imagen = "default.png";
$role = "estudiante";
$estado = "inactivo";
$fecha = date('Y-m-d');

$sql = "INSERT INTO usuarios(nombre,apellido,fecha_nacimiento,email,cedula,telefono,direccion,clave,imagen,role,estado,fecha) 
VALUES ('".$nombre."','".$apellido."','".$fecha_nacimiento."','".$email."','".$cedula."','".$telefono."','".$direccion."','".$clave."','".$imagen."','".$role."','".$estado."','".$fecha."')";

if (Conexion::ejecutar($sql)) {

		// $message  = '<html>'.
		// '<head><title>TuPrestamoHoy</title></head>'.
		// '<body><div style="background:#f1f1f1;padding:40px;box-sizing:border-box;">'.
		// '<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkbRtD4aOpXLTTcI9O1kCm1ZKc0dLyoH0fTNjvP12bF3LesiEP" style="width:80%;border-radius:8px;"></center><br>'.
		// '<h2 style="color:green;">Desde TuPrestamoHoy</h2>'.
		// '<h3>Hola '.$nombre.' '.$apellido.'</h3>'.
		// '<div style="background:white;padding:10px;box-sizing:border-box;border-left:2px solid green;border-right:2px solid green;">
		// <center>
		// <h1>Ya estas registrado en nuestro sistema!</h1>
		// <h2>Felicitaciones!</h2>
		// </center>
		// </div>'.
		// '</div></body>'.
		// '</html>';
			
		// $to = "{$email}";
		// $subject = "TuPrestamoHoy";
		// $txt = "Bienvenid@ y gracias por formar parte.";
		// $headers = "From: TuPrestamoHoy"."\r\n"."CC: ".$email;
		// $headers .= 'MIME-Version: 1.0' . "\r\n";
		// $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		
		// mail($to,$subject,$message,$headers);

	// return true;
	echo "ok";
}else{
	// return false;
	echo "error";
}

?>