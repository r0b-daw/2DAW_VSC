<?php


include_once 'conexion.php';
$config = parse_ini_file('datosConexionBD.ini');



obtenerConexionPDO($config, $BD='');


?>