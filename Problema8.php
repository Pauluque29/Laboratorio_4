<!--        LABORATORIO 4
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base de la pirámide debe estar formada por 9 asteriscos.-->

<?php
	$base = 9;
	
	for ($i = 1; $i <= $base; $i += 2) {
		for ($j = $base - $i; $j > 0; $j -= 2) {
			echo "&nbsp;";
		}
		for ($j = 1; $j <= $i; $j++) {
			echo "*";
		}
		echo "<br>";
	}
?>