<?php

require_once('recaptchalib.php');
  $privatekey = "6LcbCt4SAAAAAPQ7EQBc09wc7mH9MB33n8BDcTZX";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
header('Location: error.html');
exit(); // ensures script ends here and does the redirect in the previous line
}

$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$ciudad = $_POST['ciudad'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", con número de cédula " . $cedula . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Su teléfono es: " . $telefono . " \r\n";
$mensaje .= "Vive en: " . $ciudad . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'aer@grupocp.mx,jalfonso@zootropostudio.com,cui@zootropostudio.com';
$asunto = 'Contacto desde Web PCP';

mail($para, $asunto, utf8_decode($mensaje), $header);

//echo 'exito.html';

echo "<script language=\"JavaScript\" type=\"text/javascript\">location.href=\"exito.html\";</script>";

?> 