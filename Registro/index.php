<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="POST">

        <?php

        echo "ENTRA";


        $archivo = "fichero.txt";

        if (!file_exists($archivo)) {

            echo 'Archivo NO existe..!!';
        } else {

            //Abrir el archivo


            $abrir = fopen($archivo, 'a+');


            //Enviar información 

            //fwrite("Registro realizado el: " , date("d/m/Y - G:i:s"));
            $cadena = "Registro realizado el: " . date("d/m/Y - G:i:s" . PHP_EOL);
            fwrite($abrir, $cadena) or die("Error al escribir");

            echo "escribe en fichero";

            //Cerrar el archivo

            fclose($abrir);
        }












        ?>
        <button id="enviar" value="enviar">Enviar</button>

    </form>





</body>

</html>