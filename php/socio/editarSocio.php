<?php
    require 'claseSocio.php';

    session_start();

    $socios = $_SESSION["socios"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar socio</title>
</head>
<body>
    <h1>Editar socio</h1>

    <?php
        $dni = $_POST['dni'];
        $posicion = 0;
        
        foreach ($socios as $i => $socio) {
            if ($socio->get_dni() == $dni) {
                $nombre = $socio->get_nombre();
                $apellidos = $socio->get_apellidos();
                $telefono = $socio->get_telefono();
                $direccion = $socio->get_direccion();

                break;
            }

            $posicion++;
        }

        echo "<form action='editado.php' method='post'>
                DNI: <input type='text' name='dni' value='".$dni."'>
                <br/><br/>
                Nombre: <input type='tex't name='nombre' value='".$nombre."'>
                <br/><br/>
                Apellidos: <input type='text' name='apellidos' value='".$apellidos."'>
                <br/><br/>
                Teléfono: <input type='text' name='telefono' value='".$telefono."'>
                <br/><br/>
                Dirección: <input type='text' name='direccion' value='".$direccion."'>
                <br/><br/>
                <input type='hidden' value='".$posicion."' name='pos'>
                <input type='submit' value='Editar'>
            </form>"
    ?>
</body>
</html>