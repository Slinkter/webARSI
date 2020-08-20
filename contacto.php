<?php

//$para = "ro_alex@consultingarsi.com";


if(isset($_POST["name"])){

    $form_name = $_POST["name"];
    $form_email = $_POST["email"] ;
    $form_tel = $_POST["phone"];
    $form_catetegory = $_POST["category"];
    $form_msj = $_POST["message"] ;

    $to = "consultingarsiapp@gmail.com";
    $titulo = 'Correo de Página Web Consulting ARSI';

    $cabeceras = 'From: webmaster@consultingarsi.com' . "\r\n" .
        'Reply-To: webmaster@consultingarsi.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $mensaje   = 'Nombre : '.$form_name  ."\n".
                'Correo : '.$form_email."\n".   
                'Telefono : '.$form_tel."\n". 
                'Categoria : '.$form_catetegory."\n". 
                'Mensaje : '.$form_msj."\n" ;



    mail($to, $titulo, $mensaje, $cabeceras);
    header("Location: index.html");

}





?>