<?php
$file = $_GET['pdf'];
$path = $_GET['path'];

if ($path == 'ficha'):
    $path = 'descargas/';
else:
    $path = 'img/blog/';
endif;

$len = filesize($file);
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="' . $file . '"');
header('Content-Length: ' . $len);
readfile($path . $file);