<?php
    require 'claseLibro.php';

    session_start();

    $libros = $_SESSION["libros"];

    $libro = new Libro($_POST['isbn'], $_POST['titulo'], $_POST['autor'], $_POST['fecha']);

    $libros[$_POST["pos"]] = $libro;

    $_SESSION["libros"] = $libros;

    header('Location:libros.php');
?>