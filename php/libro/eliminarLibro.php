<?php
    require 'claseLibro.php';
    
    session_start();

    $libros = $_SESSION["libros"];

    $pos = $_POST['pos'];

    foreach($libros as $libro) {
        unset($libros[$pos]);
    }

    $_SESSION["libros"] = $libros;

    header('Location:libros.php');
?>