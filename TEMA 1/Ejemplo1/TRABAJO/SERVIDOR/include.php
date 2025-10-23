<?php
$nombre= $_get['nombre'];
$apellido= $_get['apellido'];
$edad= $_get['edad'];

function comprobarEdad ($nombre, $apellido, $edad) {
    if ($edad >= 18) {
       echo "Hola, $nombre $apellido, eres mayor de edad " ;;
    } else {
         echo "Hola, $nombre $apellido, eres menor de edad " ;;
    }
}
//llamamos a la funcion
comprobarEdad($nombre, $apellido, $edad);
?>