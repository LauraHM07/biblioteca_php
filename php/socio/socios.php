<?php
    require 'claseSocio.php';

    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socios</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    
    <h1>Socios</h1>

    <table border="1" width="500em" style="text-align:center">
        <tr">
            <td>
                <p>DNI</p>
            </td>
            <td>
                <p>Nombre</p>
            </td>
            <td>
                <p>Apellidos</p>
            </td>
            <td>
                <p>Teléfono</p>
            </td>
            <td>
                <p>Dirección</p>
            </td>
            <td>
                <button id="boton"><a href="nuevoSocio.php">Nuevo socio</a></button>
            </td>   
        </tr>

        <?php
            $socios = $_SESSION["socios"];

            foreach($socios as $i => $socio) {
                echo "<tr>";
                echo "<td> <p>" . $socio->get_dni() . "</p> </td>";
                echo "<td> <p>" . $socio->get_nombre() . "</p> </td>";
                echo "<td> <p>" . $socio->get_apellidos() . "</p> </td>";
                echo "<td> <p>" . $socio->get_telefono() . "</p> </td>";
                echo "<td> <p>" . $socio->get_direccion() . "</p> </td>";
                echo "<td> 
                        <form action='editarSocio.php' method='post'>
                            <input type='submit' value='Editar'>
                            <input type='hidden' name='dni' value='".$socio->get_dni()."'>
                        </form>
                        <form action='eliminarSocio.php' method='post'>
                            <input type='submit' value='Borrar'>
                            <input type='hidden' name='pos' value='".$i."'>
                        </form>
                    </td>";
                echo "</tr>";
            }
        ?>
    </table>

    <br/>

    <button id="boton"><a href="../../index.php">Cerrar</a></button>
</body>
</html>