<?php
    require 'claseLibro.php';

    session_start();

    $_SESSION["libros"] = array();
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

    <table border="1" width="700em" style="text-align:center">
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
                echo "<td> <p>" . $libro->titulo . "</p> </td>";
                echo "<td> <p>" . $libro->autor . "</p> </td>";
                echo "<td> <p>" . $libro->fecha . "</p> </td>";
                echo "</tr>";
            }
        ?>
    </table>

    <br/>

    <button id="boton"><a href="nuevoLibro.php">Nuevo libro</a></button>
    <button id="boton"><a href="../index.php">Cerrar</a></button>
</body>
</html>