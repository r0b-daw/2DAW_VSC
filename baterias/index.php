<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

<div class="container">

<form action="datos.php" method="post">  


<p>Codigo:<input type="text" id="codigo" name="codigo"> </p>
<label>Tipo</label>
<select name="tipo" id="tipo" name="tipo">
<option>Plomo-ácido (PB-ácido)</option>
<option>Níquel-cadmio (NiCd)</option>
<option>Níquel-hidruro metálico (NiMh)</option>
<option>Ion-litio (LiCoO2)</option>
<option>Ion-litio con cátodo de LiFePO4</option>
<option>Polímero de litio (LiPo)</option>
</select>
<p>Modelo:<input type="text" id="marca" name="modelo"> </p>
<p>Carga:<input type="text" id="carga" name="carga"> </p>
<p>Capacidad:<input type="text" id="capacidad" name="capacidad"> </p>
<p>Ciclos de vida:<input type="text" id="vida" name="vida"> </p>
<p>Estado:<input type="text" id="estado" name="estado"> </p>
<input type="submit" value="Guardar datos">



</form>
</div>
    
</body>
</html>