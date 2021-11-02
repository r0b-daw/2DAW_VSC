<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    //Definición del nombre del archivo

    $archivo = "formatos.txt";


    //Verificando la existencia del archivo

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

            echo "fichero vacio crack";
        }
    }

    ?>


</body>

</html>