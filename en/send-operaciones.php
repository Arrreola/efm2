<?php

$nombre = '';
$correo = '';
$checkbox = '';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$checkbox = $_POST['checkbox'];
$Body = "<h2>Operaciones EFM</h2> <br>";
$Body .= "- Nombre:";
$Body .= $nombre;
$Body .= "\n";
$Body .= "<br>- Correo:";
$Body .= $correo;
$Body .= "\n";
$Body .= "<br>- Checkbox:";
$Body .= $checkbox;
$Body .= "\n";

//echo 'este es el cuerpo = ' . $Body;
//$to		= "j.arreolamtz@gmail.com, jorge.arreola@v09.com";
$to = 'j.arreolamtz@gmail.com';
$subject = "Contacto EFM";

$headers = "From: ".$nombre." <".$correo.">\r\n";
$headers .= 'Reply-To: no-reply@v09.com \r\n' ;
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

if (mail($to, $subject, $Body, $headers)) :
    //echo('<br>' . "Email Sent ;D " . '</br>');
    echo 'success';
else :
    //echo("<p>Email Message delivery failed...</p>");
endif;
