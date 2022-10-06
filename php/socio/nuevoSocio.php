<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socio</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Socio</h1>

    <form action="altaSocio.php" method="post">
        DNI: <input type="text" name="dni">
        <br/><br/>
        Nombre: <input type="text" name="nombre">
        <br/><br/>
        Apellidos: <input type="text" name="apellidos">
        <br/><br/>
        Teléfono: <input type="text" name="telefono">
        <br/><br/>
        Dirección: <input type="text" name="direccion">
        <br/><br/>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>

