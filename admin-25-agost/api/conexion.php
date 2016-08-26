<?php
/**
 * Created by PhpStorm.
 * User: v09
 * Date: 02/08/16
 * Time: 11:25 AM
 */
/*$conex = '';
$local = 'localhost';
$usuario = 'clientes_efm';
$password = '{zofDN;Vs7ct';
$bd = 'clientes_efm_bd';*/
$conex = '';
$local = 'localhost';
$usuario = 'root';
$password = 'root';
$bd = 'efm_bd';
$conex = new mysqli($local, $usuario, $password, $bd);

//Output any connection error
if ($conex->connect_error) {
    die('Error : (' . $conex->connect_errno . ') ' . $conex->connect_error);
}
