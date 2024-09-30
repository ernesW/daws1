<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio de Formulario</title>
</head>
<body>
    <form action="" method="get">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" value=""><br>
        <input type="submit" value="enviar">
    </form>

    <?php
    
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        
        if (empty($nombre)) {
            echo "inserta nombre"; 
        } else {
            echo "Nombre recibido: " . $nombre;
            $nombre = '';
        }
    }
    ?>
</body>
</html>

