<?php  
    require 'claseSocio.php';

    session_start();

    $socio = new Socio($_POST['dni'], $_POST['nombre'], $_POST['apellidos'], $_POST['telefono'], $_POST['direccion']);

    array_push($_SESSION["socios"], $socio);

    header('Location:socios.php');
?>