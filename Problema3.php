<!--        LABORATORIO 4
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Escribe un programa que utilice las variables $x y $y. Asígnales los valores 144 y 999 respectivamente. 
A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división y la multiplicación.-->

<?php
	$x = 144;
	$y = 999;
	
	echo "El valor de x es: " . $x . "<br>";
	echo "El valor de y es: " . $y . "<br>";
	echo "La suma de x + y es: " . ($x + $y) . "<br>";
	echo "La resta de x - y es: " . ($x - $y) . "<br>";
	echo "La multiplicación de x * y es: " . ($x * $y) . "<br>";
	echo "La división de x / y es: " . ($x / $y) . "<br>";
?>