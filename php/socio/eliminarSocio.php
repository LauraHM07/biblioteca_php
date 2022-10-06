<?php
    require 'claseSocio.php';
    
    session_start();

    $socios = $_SESSION["socios"];

    $pos = $_POST['pos'];

    array_splice($socios, $pos, 1);

    $_SESSION["socios"] = $socios;

    header('Location:socios.php');
?>