<?php

$razonEmp = '';
$razonEmp = $_POST['razonEmp'];

$direcEmp = '';
$direcEmp = $_POST['direcEmp'];

$telEmp = '';
$telEmp = $_POST['telEmp'];

$pagEmp = '';
$pagEmp = $_POST['pagEmp'];

$corpEmp = '';
$corpEmp = $_POST['corpEmp'];

$nombreCon = '';
$nombreCon = $_POST['nombreCon'];

$cargCon = '';
$cargCon = $_POST['cargCon'];

$telCon = '';
$telCon = $_POST['telCon'];

$correoCon = '';
$correoCon = $_POST['correoCon'];

$checkFoEmp21 = '';
$checkFoEmp21 = $_POST['checkFoEmp21'];

$checkFoEmp22 = '';
$checkFoEmp22 = $_POST['checkFoEmp22'];

$checkFoEmp23 = '';
$checkFoEmp23 = $_POST['checkFoEmp23'];

$girEmp2 = '';
$girEmp2 = $_POST['girEmp2'];

$ranEmp2 = '';
$ranEmp2 = $_POST['ranEmp2'];

$empEmp2 = '';
$empEmp2 = $_POST['empEmp2'];

$intEmp2 = '';
$intEmp2 = $_POST['intEmp2'];

$refEmp2 = '';
$refEmp2 = $_POST['refEmp2'];

$checkCor1DocRec = '';
$checkCor1DocRec = $_POST['checkCor1DocRec'];

$checkCor2DocRec = '';
$checkCor2DocRec = $_POST['checkCor2DocRec'];

$checkCor3DocRec = '';
$checkCor3DocRec = $_POST['checkCor3DocRec'];

$checkCor4DocRec = '';
$checkCor4DocRec = $_POST['checkCor4DocRec'];

$checkCor5DocRec = '';
$checkCor5DocRec = $_POST['checkCor5DocRec'];

$checkCor6DocRec = '';
$checkCor6DocRec = $_POST['checkCor6DocRec'];

$checkCor7DocRec = '';
$checkCor7DocRec = $_POST['checkCor7DocRec'];


$Body = "<h2>Más informacion / ".$projNameForm."<br>".
    " - Nombre de la Razón Social: ".$razonEmp."<br> - Dirección: ".$direcEmp."<br> - Teléfono: ".$telEmp."<br> - Página Web: ".$pagEmp."<br> - Pertenece al corporativo :".$corpEmp."<br> <hr> <b>Identificación del Contacto.</b>"."<br> - Nombre: ".$nombreCon."<br> - Cargo: ".$cargCon."<br> - Teléfono: ".$telCon."<br> - Correo electrónico: ".$correoCon."<br> <b>Información de la Empresa.</b>"."<br> - Es un: "."<br> + Fondo de inversión: ".$checkFoEmp21."<br> + Oficina familiar: ".$checkFoEmp22."<br> + Empresa privada: ".$checkFoEmp23."<br> - Giro: ".$girEmp2."<br> - Rango de ingresos: ".$ranEmp2."<br> - Número de empleados: ".$empEmp2."<br> - Proceso de fusiones: ".$proEmp2."<br> - Interes especifico en esta transacción: ".$intEmp2. "<br> - Referencias de instituciones financieras: ".$refEmp2."<br> <b>- Para persona moral.</b>"."<br> - Acta constitutiva: ".$checkCor1DocRec."<br> - Poderes representate legal: ".$checkCor2DocRec."<br> - identificación oficial: ".$checkCor3DocRec."<br> - Comprobante de domicilio fiscal: ".$checkCor4DocRec."<br> <b>- Para Persona fisica.</b>"."<br> - Identificacion oficial: ".$checkCor5DocRec."<br> - Curp: ".$checkCor6DocRec."<br> - Comprobante de domicilio: ".$checkCor7DocRec ;

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
