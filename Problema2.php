<!--        LABORATORIO 4
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

--  Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer íntegramente en HTML 
(igual que los ejercicios anteriores), ve intercalando código HTML y PHP para familiarizarte con este último.-->

<!DOCTYPE html>
<html>
<head>
	<title>Mi Horario de Clase</title>
	<style>
		table {
			border-collapse: collapse;
			margin: 10px;
		}
		th, td {
			padding: 5px;
			text-align: center;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<h1>Mi Horario de Clase</h1>
	<table>
		<tr>
			<th>Horas</th>
			<th>Lunes</th>
			<th>Martes</th>
			<th>Miércoles</th>
			<th>Jueves</th>
			<th>Viernes</th>
		</tr>
		<?php
			$horario = array(
				array("08:00 - 09:00", "TEW-500", "CAI-500", "TEL-500", "EMP-500", "SIL-500"),
				array("09:00 - 10:00", "TEW-500", "CAI-500", "TEL-500", "EMP-500", "SIL-500"),
				array("10:00 - 11:00", "TEW-500", "CAI-500", "TEL-500", "EMP-500", "SIL-500"),
				array("11:00 - 11:30", "D  E", "S    C", "A   N", " S   O", ""),
				array("11:30 - 13:00", "TEW-500", "CAI-500", "TEL-500", "TMG-500", "SIL-500"),
			);

			for ($i=0; $i < count($horario); $i++) { 
				echo "<tr>";
				for ($j=0; $j < count($horario[$i]); $j++) { 
					if ($j == 0) {
						echo "<td>" . $horario[$i][$j] . "</td>";
					} else {
						echo "<td>" . $horario[$i][$j] . "</td>";
					}
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>