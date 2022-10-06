<?php
    require 'claseSocio.php';

    session_start();

    $socios = $_SESSION["socios"];

    $socio = new Socio($_POST['dni'], $_POST['nombre'], $_POST['apellidos'], $_POST['telefono'], $_POST['direccion']);

    $socios[$_POST["pos"]] = $socio;

    $_SESSION["socios"] = $socios;

    header('Location:socios.php');
?>