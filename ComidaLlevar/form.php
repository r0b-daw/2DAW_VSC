<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comida para llevar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<h1>Comida para llevar</h1>

<?php


$productos_precios = array(    

array("id"=>1,"nombre"=>"Ensalada","valor"=>4),
array("id"=>2,"nombre"=>"Hamburguesa","valor"=>6),
array("id"=>3,"nombre"=>"Bocadillo","valor"=>3),
array("id"=>4,"nombre"=>"Sandwich","valor"=>2.60),
array("id"=>5,"nombre"=>"Patatas con costilla","valor"=>10),
array("id"=>6,"nombre"=>"Orejas con salsa","valor"=>8),
array("id"=>7,"nombre"=>"Espaguettis a la boloñesa","valor"=>6.55)


);


?>

<form action="form.php" method="POST">


<?php


$cantidades = array();
foreach ($productos_precios as $producto) {
    
    
    if(isset($_POST['cantidad_'.$producto['id']])){
        // array_push($cantidades,$_POST['cantidad_'.$producto['id']]);

        $cantidades[$producto['id']]=$_POST['cantidad_'.$producto['id']];
       
        
    }
}




?>


<form action="form.php" method="$_POST">

<?php



echo '<table>';

foreach($productos_precios as $producto){

    echo '<tr>';

    echo '<td>'.$producto['nombre'].'</td>';
    echo '<td><input type="text" name="cantidad_'.$producto['id'].'"value=""></td>';
    echo '<td>'.$producto['valor'].'€'.'</td>';
    echo '<td>0.0€</td>';
    echo '</tr>';

}
echo '</table>';

?>
<p></p>
<input type="submit" value="Calcular">
                            

</form>
</body>
</html>