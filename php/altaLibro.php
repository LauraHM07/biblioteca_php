<?php  
    require 'libreria.php';

    session_start();

    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $fecha = $_POST['fecha'];

    $libro = new Libro($isbn, $titulo, $autor, $fecha);

    array_push($_SESSION["libros"], $libro);

    header('Location:libros.php');
?>