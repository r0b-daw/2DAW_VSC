<?php

define("SERVIDOR", "localhost");
define("USUARIO", "usuariodaw");
define("CLAVE", "admin1234");

/* Recibe el nombre de la base de datos que queremos usar.*/

/* Si no se indica ningún nombre de la bases de datos se pasa cadena '' como valor por defecto.*/

function obtenerConexionPDO($config)

   {

       /* Intentamos establecer una conexión con el servidor.*/

       try {

               $conexion  = new PDO("mysql:host=" . $config['host'] . ";dbname=" . $config['dbname'].";charset=utf8", $config['username'], $config['password']);

           

           /* Establecemos atributos para configurar la conexión PDO*/

           $conexion ->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);

           $conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           echo "<p>Conexión realizada pdo";

           return($conexion );

       } catch (PDOException $e) {

           die ("<p><H3>No se ha podido establecer la conexión.

                 <p>Compruebe si está activado el servidor de bases de datos MySQL.</H3></p>\n <p>Error: ". $e->getMessage()."</p>\n");

           exit();

       } // end try

   }
