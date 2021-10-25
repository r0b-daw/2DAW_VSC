<?php

include_once'cabecera.php';

?>

<body>

<div class="container">

<?php

echo "<h2>Buenas tardes</h2>";

$usuario = "Roberto Sánchez";
$curso ="2ºDAW";

echo '<br>';
?>

<p>Usuario: <?php echo $usuario.' '.$curso;
echo '<br>';
echo '<br>';
echo '<br>';

  $array = [['pepe', 10, 15],

            ['manolo', 20, 30],

            ['sara', 200, 300]];

  

// Mostramos mensaje con el índice de cada  array y los valores que contiene
echo '<table class="table">
    <thead>
    <tr>
        <th>Empleados : </th>
        <th>Cuota 1: </th>
        <th>Cuota 2: </th>
        <th></th>
        <th></th>
      </tr>
      </thead>
      <tbody>';



  for($i=0; $i<count($array); $i++) {
    for($x=0; $x<count($array[$i]); $x++) {

        echo '<td>';
         echo $array[$i][$x];
        echo '</td>';

    } //fin de bucle inf

    
    echo '<td> <a href="#" class="btn btn-info" role="button">Editar</a> </td>';
    echo '<td> <a href="#" class="btn btn-danger" role="button">Eliminar</a> </td>';
    echo '</tr>';

  } // fin de bucle sup

  echo'</tbody>
  </table>';


?></p>


</div>

</body>



