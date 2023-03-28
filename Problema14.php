<!--        LABORATORIO 4
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Escribe un programa que sume que reste que multiplique y divida dos numeros introducidos por teclado-->

<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora básica</title>
    </head>
    <body>
        <form method="post" action="">
            <label for="numero1">Ingrese el primer número:</label>
            <input type="number" name="numero1" id="numero1" required><br><br>
            <label for="numero2">Ingrese el segundo número:</label>
            <input type="number" name="numero2" id="numero2" required><br><br>
            <button type="submit">Calcular</button>
        </form>
        <?php
            if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                echo "<p>La suma de " . $numero1 . " y " . $numero2 . " es: " . ($numero1 + $numero2) . "</p>";
                echo "<p>La resta de " . $numero1 . " y " . $numero2 . " es: " . ($numero1 - $numero2) . "</p>";
                echo "<p>La multiplicación de " . $numero1 . " y " . $numero2 . " es: " . ($numero1 * $numero2) . "</p>";
                echo "<p>La división de " . $numero1 . " entre " . $numero2 . " es: " . ($numero1 / $numero2) . "</p>";
            }
        ?>
    </body>
</html>