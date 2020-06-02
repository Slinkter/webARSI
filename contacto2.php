<?php

$para = "consultingarsiapp@gmail.com";
$titulo    = 'Correo de Pagina Web Consulting ARSI';

$form_name = $_POST["form_name"];
$form_email = $_POST["form_email"];
$form_tel = $_POST["form_tel"];
$form_msj = $_POST["form_msj"];

$mensaje   = 'Nombre : '.$form_name  ."\n".
             'Correo : '.$form_email."\n".   
             'Telefono : '.$form_tel."\n". 
             'Mensaje : '.$form_msj."\n" ;

$cabeceras = 'From: webmaster@consultingarsi.com' . "\r\n" .
    'Reply-To: webmaster@consultingarsi.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
header("Location: index.html");
?>