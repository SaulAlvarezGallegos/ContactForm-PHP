<?php

//llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$asunto= $_POST['asunto'];
$mensaje = $_POST['mensaje'];

//datos para el correo
$destinatario = "pibull_peluke@outlook.com";
$asunto = "Contacto desde nuestra web";
 
$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Asunto: $asunto \n";
$carta .= "Mensaje: $mensaje";

//enviando mensaje
mail($destinatario, $asunto, $carta);
 ?>