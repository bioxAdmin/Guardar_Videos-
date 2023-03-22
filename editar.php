<!DOCTYPE html>
<html>
<head>
	<title>Editar video</title>
</head>
<body>
	<h1>Editar video</h1>

	<?php
	// Conexión a la base de datos
	$conexion = mysqli_connect("localhost", "root", "", "multimedia");
	if (!$conexion) {
		die("Error de conexión: " . mysqli_connect_error());
	}

	// Obtener el ID del video a editar
	$id = $_GET['id'];

	// Obtener los datos del video de la base de datos
	$sql = "SELECT * FROM videos WHERE id = $id";
	$resultado = mysqli_query($conexion, $sql);
	$fila = mysqli_fetch_assoc($resultado);
	?>

	<form method="post" action="actualizar.php">
		<input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
		<label>Nombre:</label> <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"><br>
		<label>Descripción:</label> <textarea name="descripcion"><?php echo $fila['descripcion']; ?></textarea><br>
		<label>URL:</label> <input type="text" name="url" value="<?php echo $fila['url']; ?>"><br>
		<input type="submit" value="Actualizar">
	</form>

	<p><a href="index.php">Volver a la lista de videos</a></p>

	<?php
	// Cerrar la conexión a la base de datos
	mysqli_close($conexion);
	?>

</body>
</html>