<?php

$codigo = "";
$tipo = "";
$marca = "";
$carga = "";
$capacidad = "";
$vida = "";
$estado = "";


if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];
}

if (isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
}
if (isset($_POST['marca'])) {
    $marca = $_POST['marca'];
}
if (isset($_POST['carga'])) {
    $carga = $_POST['carga'];
}

if (isset($_POST['capacidad'])) {
    $capacidad = $_POST['capacidad'];
}

if (isset($_POST['vida'])) {
    $vida = $_POST['vida'];
}

if (isset($_POST['estado'])) {
    $estado = $_POST['estado'];
}





?>
