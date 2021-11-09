<head>

    <title>DATOS</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>


<?php


//recuperamos el nombre del fichero
if (isset($_POST["fichero"]))

    $fichero = $_POST["fichero"];


//opción A

$dirpath = realpath(dirname(getcwd()));

$directorio = $dirpath . "/ficheros/subidas/";

$ruta_fichero = $directorio . basename($_FILES["fichero"]["name"]);


//opción B

//$directorio = "/appweb/ficheros/subidas/";

//$ruta_fichero = $_SERVER['DOCUMENT_ROOT'].$directorio . basename($_FILES["fichero"]["name"]);



$uploadOk = 1;


$mensajeFichero = "";


// Comprobar que el fichero ya existe

if (file_exists($ruta_fichero)) {

    $mensajeFichero .= crearMensajeInfo("El fichero ya existe");

    $uploadOk = 0;
}

// Comprobar el tamaño del fichero

if ($_FILES["fichero"]["size"] > 500000) {

    $mensajeFichero .= crearMensajeInfo("El fichero es demasiado grande");

    $uploadOk = 0;
}

// Comprobar que el fichero es tipo csv

$tipoFichero = strtolower(pathinfo($ruta_fichero, PATHINFO_EXTENSION));

if ($tipoFichero != "csv") {

    $mensajeFichero .= crearMensajeInfo("Sólo están permitidos los ficheros csv");

    $uploadOk = 0;
}


// Se comprueba si se ha dado algún caso anterior de error.

if ($uploadOk == 0) {

    $mensaje = '<div class="w3-container w3-blue"><p>El fichero no ha sido subido</p></div>';

    $mensajeFichero .= $mensaje;

    // Si todas las comprobaciones han ido bien, intenta subir el fichero.

} else {

    if (move_uploaded_file($_FILES["fichero"]["tmp_name"], $ruta_fichero)) {

        $mensaje = '<div class="w3-container w3-green"><p>El fichero ' . basename($_FILES["fichero"]["name"]) . ' ha sido subido</p></div>';

        $mensajeFichero .= $mensaje;
    } else {

        $mensaje = '<div class="w3-container w3-red"><p>Error al subir el ficheros</p></div>';

        $mensajeFichero .= $mensaje;
    }
}


$fichero = fopen($ruta_fichero, "r") or die("No se puede abrir el fichero!");



echo '<div class="container">

 <h2>Datos que se van a leer</h2>';


echo $mensajeFichero;


echo '

 <div class="text-right">

           <a href="formularioCargarHorarios.php" class="btn btn-warning" role="button">Volver</a>

 </div>';



$datos = array();

//Abrimos nuestro archivo

//Lo recorremos
// echo '<table class="table"> <th>nombre</th><th>numero</th><th>email</th> ';
while (($fila = fgetcsv($fichero)) == true) {
    echo '<br>';
    // print_r($fila);

    echo '<br>';
    echo '<table>';
    echo "<b>Nombre:</b> ".$fila[0]." <b>Numero:</b>"." ".$fila[1]."<b> Email:</b>"." ".$fila[2];
    echo '</table>';
    array_push($datos, $fila);
    echo '<br>';
    //array_push($datos,explode(";",$fila[0]));
    
} // fin del bucle while que recorre las filas del fichero csv.
// insertarEnTabla($datos);
echo '<br>';
echo '<br>';
print_r($datos);

//Cerramos el archivo

fclose($fichero);

// function insertarEnTabla(){



// }


function crearMensajeInfo($contenidoMensaje)
{


    $mensaje = '<div class="w3-container w3-red"><p>' . $contenidoMensaje . '</p></div>';

    return $mensaje;
}


?>