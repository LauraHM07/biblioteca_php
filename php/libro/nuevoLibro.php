<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Libro</h1>

    <form action="altaLibro.php" method="post">
        ISBN: <input type="text" name="isbn">
        <br/><br/>
        Título: <input type="text" name="titulo">
        <br/><br/>
        Autor: <input type="text" name="autor">
        <br/><br/>
        Fecha: <input type="text" name="fecha">
        <br/><br/>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>

