<!--        LABORATORIO 4
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Escribe un programa que calcule el area de un rectangulo, se debera introducir por teclado-->

<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora de área de un rectángulo</title>
    </head>
    <body>
        <form method="post" action="">
            <label for="base">Ingrese la base:</label>
            <input type="number" name="base" id="base" required><br><br>
            <label for="altura">Ingrese la altura:</label>
            <input type="number" name="altura" id="altura" required><br><br>
            <button type="submit">Calcular</button>
        </form>
        <?php
            if (isset($_POST['base']) && isset($_POST['altura'])) {
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $area = $base * $altura;
                echo "<p>El área del rectángulo es: " . $area . "</p>";
            }
        ?>
    </body>
</html>