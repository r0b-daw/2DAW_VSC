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

function existir(){

    $archivo = "claves.txt";

    if (!file_exists($archivo)) {

        echo 'Archivo NO existe..!!';
    } else {

        if (filesize($archivo) > 0) {

            //Abriendo en forma de lectura

            $abrir = fopen($archivo, "r");

            //Obtener el contenido a partir de la lectura

            $contenido = fread($abrir, filesize($archivo));

            //Cerrar el fichero
            fclose($abrir);

            //Imprimir el contenido del archivo

            echo $contenido;
        } else {

            //Abrir el archivo

            $archivo = 'claves.txt';

            $abrir = fopen($archivo, 'w');


            //Información de los productos

            // Descripción precio stock

            $producto1 = 'Lavadora industrial-1500-20' . chr(13) . chr(10);

            $producto2 = 'Televisión 40 pulgadas-3500-30' . chr(13) . chr(10);

            $producto3 = 'Frigorífico  2 m  - 5500 - 10';


            //Enviar información de los productos

            fwrite($abrir, $producto1);

            fwrite($abrir, $producto2);

            fwrite($abrir, $producto3);


            //Cerrar el archivo

            fclose($abrir);
        }
    }
}
