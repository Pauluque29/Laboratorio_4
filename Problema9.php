<!--        LABORATORIO 4
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Igual que el programa anterior, pero esta vez la piramide estara hueca se debe ver unicamente el contorno hecho con asteriscos.-->

<?php
    $base = 9;

    for ($i = 1; $i <= $base; $i++) {
        for ($j = 1; $j <= $base - $i; $j++) {
            echo "&nbsp;";
        }
        for ($j = 1; $j <= ($i * 2) - 1; $j++) {
            if ($i == $base || $j == 1 || $j == ($i * 2) - 1) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }
?>