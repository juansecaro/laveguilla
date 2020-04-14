<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$encargo = $_POST['encargo'];

$cabeceras = 'From: info@adeter.org' . "\r\n" .
    'Reply-To: info@adeter.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$mensaje = "Tienes un nuevo encargo de " . $nombre . ",\r\n";
$mensaje .= "Su teléfono es: " . $telefono . " \r\n";
$mensaje .= "La entrega es en: " . $direccion . " \r\n";
$mensaje .= "y el encargo realizado es: " . $encargo . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'juanmi@valledelosmolinos.com';
$asunto = "Tienes un nuevo encargo de " . $nombre . ".";

mail($para, $asunto, utf8_decode($mensaje), $cabeceras);

header("Location:gracias.html");
?>
