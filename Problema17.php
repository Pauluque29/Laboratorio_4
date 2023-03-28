<!--        LABORATORIO 4
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Escribe un programa que calcule la media de cuatro numeros , se debera introducir por teclado-->

<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora de media de cuatro números</title>
    </head>
    <body>
        <form method="post" action="">
            <label for="numero1">Ingrese el primer número:</label>
            <input type="number" name="numero1" id="numero1" required><br><br>
            <label for="numero2">Ingrese el segundo número:</label>
            <input type="number" name="numero2" id="numero2" required><br><br>
            <label for="numero3">Ingrese el tercer número:</label>
            <input type="number" name="numero3" id="numero3" required><br><br>
            <label for="numero4">Ingrese el cuarto número:</label>
            <input type="number" name="numero4" id="numero4" required><br><br>
            <button type="submit">Calcular</button>
        </form>
        <?php
            if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3']) && isset($_POST['numero4'])) {
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $numero3 = $_POST['numero3'];
                $numero4 = $_POST['numero4'];
                $media = ($numero1 + $numero2 + $numero3 + $numero4) / 4;
                echo "<p>La media de los cuatro números es: " . $media . "</p>";
            }
        ?>
    </body>
</html>