<?php
    require 'libreria.php';

    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <h1>Libros</h1>

    <table border="1">
        <tr">
            <td>
                <p>ISBN</p>
            </td>
            <td>
                <p>Título</p>
            </td>
            <td>
                <p>Autor</p>
            </td>
            <td>
                <p>Fecha</p>
            </td>
        </tr>

        <?php
            $libros = $_SESSION["libros"];

            foreach($libros as $libro) {
                echo "<tr>";
                echo "<td> <p>" . $libro->isbn . "</p> </td>";
                echo "</tr>";
            }
        ?>
    </table>

    <button id="boton"><a href="nuevoLibro.php">Nuevo libro</a></button>
    <button id="boton"><a href="../index.html">Cerrar</a></button>
</body>
</html>