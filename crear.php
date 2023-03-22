<!DOCTYPE html>
<html>
<head>
	<title>Crear video</title>
</head>
<body>
	<h1>Crear video</h1>

	<form method="post" action="guardar.php">
		<label>Nombre:</label> <input type="text" name="nombre"><br>
		<label>Descripción:</label> <textarea name="descripcion"></textarea><br>
		<label>URL:</label> <input type="text" name="url"><br>
		<input type="submit" value="Guardar">
	</form>

	<p><a href="index.php">Volver a la lista de videos</a></p>

</body>
</html>