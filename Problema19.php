<!--        LABORATORIO 4
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Realiza un conversor de Mb a Kb-->

<?php
// Pedir al usuario que ingrese el valor en Mb
echo "Ingrese el valor en Mb: ";
$mb = 1000;

// Convertir Mb a Kb
$kb = $mb * 1024;

// Mostrar el resultado
echo $mb . " Mb equivalen a " . $kb . " Kb.\n";
?>