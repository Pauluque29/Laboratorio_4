<!--        LABORATORIO 4
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

--  Escribe un programa que muestre por pantalla 10 palabras en ingles junto a su correspondiente traducción al español. 
Las palabras deben estar distribuidas en dos columnas. en PHP con la etiqueta table-->

<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejemplo PHP</title>
</head>
<body>
<title>Palabras en Inglés y Español</title>
	<style>
		table {
			border-collapse: collapse;
			margin: 10px;
		}
		th, td {
			padding: 5px;
			text-align: left;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<h1>Palabras en Inglés y Español</h1>
	<table>
		<tr>
			<th>Inglés</th>
			<th>Español</th>
		</tr>
		<tr>
			<td>Apple</td>
			<td>Manzana</td>
		</tr>
		<tr>
			<td>Car</td>
			<td>Coche</td>
		</tr>
		<tr>
			<td>Dog</td>
			<td>Perro</td>
		</tr>
		<tr>
			<td>Book</td>
			<td>Libro</td>
		</tr>
		<tr>
			<td>Chair</td>
			<td>Silla</td>
		</tr>
		<tr>
			<td>Computer</td>
			<td>Ordenador</td>
		</tr>
		<tr>
			<td>House</td>
			<td>Casa</td>
		</tr>
		<tr>
			<td>Orange</td>
			<td>Naranja</td>
		</tr>
		<tr>
			<td>Shirt</td>
			<td>Camisa</td>
		</tr>
		<tr>
			<td>Table</td>
			<td>Mesa</td>
		</tr>
	</table>
</body>
</html>
