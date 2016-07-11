<?php
	$nombre			= $_POST['nombre'];
	$correo			= $_POST['correo'];
	$movil			= $_POST['movil'];
	$mensaje	= $_POST['mensaje'];

	$headers		= "Content-Type: text/plain; charset=iso-8859-1\n";
	$headers		= "From: $nombre <$correo>\n";
	$recipient		= "j.arreolamtz@gmail.com,jorge.arreola@v09.com";
	$subject		= "Contacto Malacara";
	$message		= "Nombre: $nombre\nEmail: $correo\nMovil: $movil\nMensaje: $mensaje\n";

	mail($recipient, $subject, $message, $headers);

	header("location: http://efmcapital.com/es");
?>
