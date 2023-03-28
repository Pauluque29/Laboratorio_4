<!--        LABORATORIO 4
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Realiza un conversor de dolares a bolivianos. Ahora la cantidad en DOLARES que se quiere convertir se debera introducir por teclado-->

<!DOCTYPE html>
<html>
    <head>
        <title>Conversor de dólares a bolivianos</title>
    </head>
    <body>
        <form method="post" action="">
            <label for="dolares">Ingrese la cantidad en dólares:</label>
            <input type="number" name="dolares" id="dolares" required><br><br>
            <button type="submit">Convertir a bolivianos</button>
        </form>
        <?php
            if (isset($_POST['dolares'])) {
                $dolares = $_POST['dolares'];
                $tipo_cambio = 6.97; // tipo de cambio actual
                $bolivianos = $dolares * $tipo_cambio;
                echo "<p>" . $dolares . " dólares son " . $bolivianos . " bolivianos.</p>";
            }
        ?>
    </body>
</html>