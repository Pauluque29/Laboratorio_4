<!--        LABORATORIO 4
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Realiza un conversor de Kb a Mb-->

<?php
// Pedir al usuario que ingrese el valor en Kb
echo "Ingrese el valor en Kb: ";
$kb = 2048;

// Convertir Kb a Mb
$mb = $kb / 1024;

// Mostrar el resultado
echo $kb . " Kb equivalen a " . $mb . " Mb.\n";
?>