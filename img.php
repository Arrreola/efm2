<?php
//error_reporting(0);

$imagen = $_GET['file']; 
 
include "PHPImagen.lib.php"; 
 
$imagen = new Imagen($imagen); 

if(isset($_GET['ancho']))
{
	$nuevo_ancho = $_GET['ancho'];
    $nuevo_alto = $_GET['alto'];
    $cut = (isset($_GET['cut'])) ? true : false; 
	$imagen->resize($nuevo_ancho,$nuevo_alto,$cut);
}

$imagen->doPrint(100);

?> 


