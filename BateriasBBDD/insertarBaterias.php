<?php

include_once 'datosconexionBD.php';


try {

    $con = new PDO("mysql:host=".SERVIDOR.";dbname=".BBDD, USUARIO, CLAVE);

    // Establecemos el modo de error de PDO para que salten excepciones

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // preparar y vincular parámetros

    $stmt = $con->prepare("INSERT INTO datos (Codigo, Tipo, Modelo, Carga, Capacidad, CiclosVida, Estado ) VALUES (:Codigo, :Tipo, :Modelo, :Carga, :Capacidad, :CiclosVida, :Estado)");

     $stmt->bindParam(':Codigo', $Codigo);
     $stmt->bindParam(':Tipo', $Tipo);
     $stmt->bindParam(':Modelo', $Modelo);
     $stmt->bindParam(':Carga', $Carga);
     $stmt->bindParam(':Capacidad', $Capacidad);
     $stmt->bindParam(':CiclosVida', $CiclosVida);
     $stmt->bindParam(':Estado', $Estado);


    // establecemos los parámetros y ejecutamos para insertar

    $Codigo = "";
    $Tipo = "";
    $Modelo = "";
    $Carga = "";
    $Capacidad = "";
    $CiclosVida = "";
    $Estado = "";
    
if (isset($_POST['codigo'])) {
    $Codigo = $_POST['codigo'];
}

if (isset($_POST['tipo'])) {
    $Tipo = $_POST['tipo'];
}
if (isset($_POST['modelo'])) {
    $Modelo = $_POST['modelo'];
}
if (isset($_POST['carga'])) {
    $Carga = $_POST['carga'];
}

if (isset($_POST['capacidad'])) {
    $Capacidad = $_POST['capacidad'];
}

if (isset($_POST['vida'])) {
    $CiclosVida = $_POST['vida'];
}

if (isset($_POST['estado'])) {
    $Estado = $_POST['estado'];
}

    $stmt->execute();

    echo "Nuevas filas insertadas correctamente";

} catch(PDOException $e) {

    echo "Error: " . $e->getMessage();

}

$con = null;

include_once 'index.php';

?>