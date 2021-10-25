<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>


<?php

include_once ('datos.php');


//crear un array para almacenar los departamentos

$departamentos=array();
//$contador = 0;

//recorrer el array de empresas
foreach ($datos as $empresa) {
    
    $empresa['DEPARTAMENTO'];
    //por cada empresa preguntar si el array departamentos contiene el departamento

    if(!in_array($empresa['DEPARTAMENTO'],$departamentos)){
        // $departamentos[$contador]=$empresa['DEPARTAMENTO'];
        // $contador++;
        array_push($departamentos, $empresa['DEPARTAMENTO']);
    }

    //si no lo contiene, se añade el departamento al array


    //si lo contiene no hago nada
}//fin del foreach

//print_r($departamentos);



?>


<body>

<form action="buscar.php" method="post">  
<label>Buscar: </label>
<?php

echo "<select name='departamento'>";

foreach ($departamentos as $departamento) {
    echo "<option value='".$departamento."'>".$departamento."</option>";
}

echo "</select>";


?>

<input type="submit" value="Enviar" name="Enviar">




</form>
</body>
</html>