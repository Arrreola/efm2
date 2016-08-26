<?php
$file = $_GET['pdf'];
$len = filesize($file);
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="' . $file . '"');
header('Content-Length: ' . $len);
readfile($file);