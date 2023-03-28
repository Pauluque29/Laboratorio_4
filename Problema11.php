<!--        LABORATORIO 4
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Realiza un programa que pida dos numeros y luego muestre el resultado de su multiplicacion.-->

<!DOCTYPE html>
<html>
    <head>
        <title>Programa de multiplicación</title>
    </head>
    <body>
        <form method="post" action="">
            <label for="numero1">Ingrese el primer número:</label>
            <input type="number" name="numero1" id="numero1" required><br><br>
            <label for="numero2">Ingrese el segundo número:</label>
            <input type="number" name="numero2" id="numero2" required><br><br>
            <button type="submit">Calcular multiplicación</button>
        </form>
        <?php
            if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $resultado = $numero1 * $numero2;
                echo "<p>El resultado de la multiplicación es: " . $resultado . "</p>";
            }
        ?>
    </body>
</html>