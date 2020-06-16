<?php

$para = "ro_alex@consultingarsi.com";
$titulo = 'Correo de Pagina Web Consulting ARSI';

$form_name = $_POST["name"];
$form_email = $_POST["email"];
$form_tel = $_POST["phone"];
$form_catetegory = $_POST["category"];
$form_msj = $_POST["message"];

$mensaje   = 'Nombre : '.$form_name  ."\n".
             'Correo : '.$form_email."\n".   
             'Telefono : '.$form_tel."\n". 
             'Categoria : '.$form_catetegory."\n". 
             'Mensaje : '.$form_msj."\n" ;

$cabeceras = 'From: webmaster@consultingarsi.com' . "\r\n" .
    'Reply-To: webmaster@consultingarsi.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
header("Location: index.html");
?>