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
    <title>Editar libro</title>
</head>
<body>
    <h1>Editar libro</h1>

    <?php
        $isbn = $_POST['isbn'];
        $posicion = 0;
        
        foreach ($libros as $i => $libro) {
            if ($libro->get_isbn() == $isbn) {
                $titulo = $libro->get_titulo();
                $autor = $libro->get_autor();
                $fecha = $libro->get_fecha();

                break;
            }

            $posicion++;
        }

        echo "<form action='editado.php' method='post'>
                ISBN: <input type='text' name='isbn' value='".$isbn."'>
                <br/><br/>
                Título: <input type='tex't name='titulo' value='".$titulo."'>
                <br/><br/>
                Autor: <input type='text' name='autor' value='".$autor."'>
                <br/><br/>
                Fecha: <input type='text' name='fecha' value='".$fecha."'>
                <br/><br/>
                <input type='hidden' value='".$posicion."' name='pos'>
                <input type='submit' value='Editar'>
            </form>"
    ?>
</body>
</html>