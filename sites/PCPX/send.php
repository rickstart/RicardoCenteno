<?php

require_once('recaptchalib.php');
  $privatekey = "6LcbCt4SAAAAAPQ7EQBc09wc7mH9MB33n8BDcTZX";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

/*  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("El texto de verificacion es Incorrecto. Intentalo de Nuevo" .
         " (reCAPTCHA: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
  }*/
  if (!$resp->is_valid) {
    //echo $_POST['mensaje'];
    // What happens when the CAPTCHA was entered incorrectly
    die ("CAPTCHA Incorrecto Intentalo de nuevo");
  } else {
    // Your code here to handle a successful verification
  }

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$empresa = $_POST['empresa'];
$empresa = $_POST['telefono'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", de la empresa " . $empresa . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'ricardo.celj@gmail.com';
$asunto = 'Contacto desde Web PCP';

if(mail($para, $asunto, utf8_decode($mensaje), $header))
{
  echo "Mensaje Enviado, Pronto te contactaremos";
}
else
{
  echo "ok";
}
//header("Location: contacto."); 

?> 