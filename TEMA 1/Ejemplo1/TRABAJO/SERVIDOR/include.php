<?php
$nombre= ($_GET["nombre"]);
$apellido= ($_GET["apellido"]);
$edad= intval ($_GET["edad"]);

function comprobarEdad ($nombre, $apellido, $edad) {
    if ($edad >= 18) {
       echo "Hola, $nombre $apellido, eres mayor de edad ";
    } else {
         echo "Hola, $nombre $apellido, eres menor de edad ";
    }
}
//llamamos a la funcion
comprobarEdad($nombre, $apellido, $edad);
?>