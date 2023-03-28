<!--        LABORATORIO 4
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Escribe un programa que calcule el volumen de un cono mediante la formula-->

<?php
// Pedir al usuario que ingrese los valores de r y h
echo "Ingrese el radio de la base del cono: ";
$r = 23;
echo "Ingrese la altura del cono: ";
$h = 45;

// Calcular el volumen
$pi = 3.14159;
$volumen = (1/3) * $pi * pow($r, 2) * $h;

// Mostrar el resultado
echo "El volumen del cono es: " . $volumen . "\n";
?>