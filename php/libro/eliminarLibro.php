<?php
    require 'claseLibro.php';
    
    session_start();

    $libros = $_SESSION["libros"];

    $pos = $_POST['pos'];

    array_splice($libros, $pos, 1);

    $_SESSION["libros"] = $libros;

    header('Location:libros.php');
?>