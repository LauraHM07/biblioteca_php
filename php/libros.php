<?php
    require 'claseLibro.php';

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

    <table border="1" width="500em" style="text-align:center">
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
            <td>
                <button id="boton"><a href="nuevoLibro.php">Nuevo libro</a></button>
            </td>   
        </tr>

        <?php
            $libros = $_SESSION["libros"];

            foreach($libros as $i => $libro) {
                echo "<tr>";
                echo "<td> <p>" . $libro->get_isbn() . "</p> </td>";
                echo "<td> <p>" . $libro->get_titulo() . "</p> </td>";
                echo "<td> <p>" . $libro->get_autor() . "</p> </td>";
                echo "<td> <p>" . $libro->get_fecha() . "</p> </td>";
                echo "<td> 
                        <form action='editarLibro.php' method='post'>
                            <input type='submit' value='Editar'>
                            <input type='hidden' name='isbn' value='".$libro->get_isbn()."'>
                        </form>
                        <form action='eliminarLibro.php' method='post'>
                            <input type='submit' value='Borrar'>
                            <input type='hidden' name='pos' value='".$i."'>
                        </form>
                    </td>";
                echo "</tr>";
            }
        ?>
    </table>

    <br/>

    <button id="boton"><a href="../index.php">Cerrar</a></button>
</body>
</html>