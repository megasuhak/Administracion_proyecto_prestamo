<?php
var_dump($_POST);


// Llamado a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

//Datos para el correo

//Prueba con tu correo
 $destinatario = "20163823@itla.edu.do";
 $asunto = "Contacto de la web";


 $carta = "De: $nombre $nombre \n";
 $carta .= "Correo: $correo \n";
 $carta .= "Telefono: $telefono \n ";
 $carta .= "Mensaje: $mensaje \n";

 // Enviar Mensaje
 mail($destinatario, $asunto, $carta);
