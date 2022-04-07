<?php
$name = $_POST['nombre'];
$namep = $_POST['apellidopaterno'];
$namem = $_POST['apellidomaterno'];
$mail = $_POST['correoelectronico'];
$phone = $_POST['numerotelefonico'];
$validartema = $_POST['validarTema'];
$message = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Tema elejido: " . $validartema . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'victorugalde.09@gmail.com';
$asunto = 'Mensaje de pagina de contacto de prueba';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:validacion-list.component.html");
?>