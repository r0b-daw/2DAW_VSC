<?php

include_once ('datos.php');

echo "RESULTADO";

$departamento="";

if(isset( $_POST['departamento'])){
    $departamento = $_POST['departamento'];
    
}

echo $departamento;

$contador = 0;
foreach ($datos as $empresa) {
    if($departamento==$empresa['DEPARTAMENTO']){
        $contador++;
    }
}

echo "Existen ".$contador." departamentos de ".$departamento;

?>