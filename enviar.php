<?php

define('SITE_KEY','6Lfr-eUUAAAAAKYokhq2wxsQJJOfQ8b4syyqBtfi');
define('SECRET_KEY','6Lfr-eUUAAAAAAfzABDnn7Wk313THiRtVNqZrOsT');

$form_name = $_POST["form_name"];
$form_email = $_POST["form_email"];
$form_tel = $_POST["form_tel"];
$form_msj = $_POST["form_msj"];

$secret = $_POST["secret"];
$response = $_POST["response"];


$para      = 'ro_alex@consultingarsi.com';
$titulo    = 'Correo de Pagina Web Consulting ARSI';
$mensaje   = 'Nombre : '.$form_name  ."\n".
             'Correo : '.$form_email."\n".   
             'Telefono : '.$form_tel."\n". 
             'Mensaje : '.$form_msj."\n" ;
$cabeceras = 'From: webmaster@consultingarsi.com' . "\r\n" .
    'Reply-To: webmaster@consultingarsi.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
$url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response;
$verify = file_get_contents($url);

echo $verify;

?>