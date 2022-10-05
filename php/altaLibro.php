<?php  
    require 'libreria.php';

    session_start();

    $libro = new Libro($_POST['isbn'], $_POST['titulo'], $_POST['autor'], $_POST['fecha']);

    array_push($_SESSION["libros"], $libro);

    header('Location:libros.php');
?>