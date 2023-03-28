<!--        LABORATORIO 4
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Realiza un conversor de boliviano a dolares. Ahora la cantidad en BOLIVIANOS que se quiere convertir se debera introducir por teclado-->

<!DOCTYPE html>
<html>
    <head>
        <title>Conversor de bolivianos a dólares</title>
    </head>
    <body>
        <form method="post" action="">
            <label for="bolivianos">Ingrese la cantidad en bolivianos:</label>
            <input type="number" name="bolivianos" id="bolivianos" required><br><br>
            <button type="submit">Convertir a dólares</button>
        </form>
        <?php
            if (isset($_POST['bolivianos'])) {
                $bolivianos = $_POST['bolivianos'];
                $tipo_cambio = 0.14; // tipo de cambio actual
                $dolares = $bolivianos * $tipo_cambio;
                echo "<p>" . $bolivianos . " bolivianos son " . $dolares . " dólares.</p>";
            }
        ?>
    </body>
</html>