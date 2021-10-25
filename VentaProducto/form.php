<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Venta de productos</title>
</head>
<body>
    
<h1>Venta de productos</h1>



<?php

$producto="";
$precio="";
$cantidad="";
$total="";
$cuotas="";

if(isset($_POST['idProducto'])){
    $idProductoSeleccionado = $_POST['idProducto'];
}


if(isset($_POST['cantidad'])){
    $cantidad = $_POST['cantidad'];
}
if(isset($_POST['cuotas'])){
    $cuotas = $_POST['cuotas'];
}






$productos_precios = array(    

array("id"=>1,"nombre"=>"Lavadora","valor"=>200),
array("id"=>2,"nombre"=>"Frigorífico","valor"=>350),
array("id"=>3,"nombre"=>"Lavavajillas","valor"=>150),
array("id"=>4,"nombre"=>"Tostadora","valor"=>20)


);

?>


<form action="form.php" method="POST">


<label for="producto">Producto</label>
<select name="idProducto" >
    
<?php

    echo '<option value="0">Producto</option>';
    foreach ($productos_precios as $producto) {

$seleccion="";
if($idProductoSeleccionado==$producto['id']){
        
        $seleccion = "selected";
        $precio = $producto['valor'];
}

echo ' <option value="'.$producto['id'].'"'.$seleccion.'>'.$producto['nombre'].'</option>';
    }



?>

</select>

<?php

if($cantidad!=""){

  $total = $cantidad * $precio;

     echo $total;

 }

?>


<p>
<label for="precio">Precio</label>


<input type="text" name="precio" value="<?php echo $precio.' €' ?>">
<p>
<label for="cantidad">Cantidad</label>
<input type="text" name="cantidad" value="">
<p>
<label for="total">Total</label>
<input type="text" name="total" value="<?php echo $total.' €' ?>">
<p>
<label for="cuotas">Cuotas</label>

<select name="cuotas">
    <?php

 for($i=1; $i<=12 ; $i++){

echo '<option value="'.$i.'">'.$i.'</option>';

 }


    ?>  

</select>
<p>
<input type="submit" value="Calcular">

<input type="reset" value="Limpiar">


</form>

</body>
</html>