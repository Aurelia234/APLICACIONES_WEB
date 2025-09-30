<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['Ashley']);
    $apellido = htmlspecialchars($_POST['Seriche']);
    $ciudad = htmlspecialchars($_POST['ciudad']);
    $preferencias = htmlspecialchars($_POST['preferencias']);

    // Aquí puedes procesar los datos, como guardarlos en una base de datos o enviarlos por correo electrónico.
    echo "<h1>Datos recibidos:</h1>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Apellido: $apellido</p>";
    echo "<p>Ciudad: $Ciudad</p>";
    echo "<p>Preferencias: $preferencias</strong> "
 implode(",", $preferencias) </p>;
} 
?>
    
