<?php
 if (isset($_GET['nombre']) && isset($_GET['edad'])) {
    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];
    echo "<p>Hola $nombre, que tengas un buen dia.</p>";
    echo "<p>Tu edad es, $edad.</p>";
 }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo con GET</title>
</head>
<body>
    <form action="ejemplo_entrada.php" method="get">
        introduce tu nombre;
        <input type="text" name="nombre"><br>
        introduce tu Apellido:
        <input type="text" name="edad"><br>
        <input type="submit" value="Enviar">
</form>   
</body>
</html>