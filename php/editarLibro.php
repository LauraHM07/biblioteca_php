<?php
    require 'claseLibro.php';

    session_start();

    $libros = $_SESSION["libros"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar libro</h1>

    <form action="editado.php" method="post">
        ISBN: <input type="text" name="isbn">
        <br/><br/>
        Título: <input type="text" name="titulo">
        <br/><br/>
        Autor: <input type="text" name="autor">
        <br/><br/>
        Fecha: <input type="text" name="fecha">
        <br/><br/>
        <input type="submit" value="Editar">
    </form>
</body>
</html>