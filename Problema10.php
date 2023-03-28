<!--        LABORATORIO 4
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Igual que el programa anterior, pero esta vez la piramide debe aparecer invertida, con el vertice hacia abajo.-->

<?php
    $base = 9;

    for ($i = $base; $i >= 1; $i--) {
        for ($j = $base - $i; $j >= 1; $j--) {
            echo "&nbsp;";
        }
        for ($j = ($i * 2) - 1; $j >= 1; $j--) {
            echo "*";
        }
        echo "<br>";
    }
?>