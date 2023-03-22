<!DOCTYPE html>
<html>
<head>
	<title>Lista de videos</title>
</head>
<body>
	<h1>Lista de videos</h1>

	<table>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>URL</th>
			<th>Acciones</th>
		</tr>
		<?php
		// Conexión a la base de datos
		$conexion = mysqli_connect("localhost", "root", "", "multimedia");
		if (!$conexion) {
			die("Error de conexión: " . mysqli_connect_error());
		}

		// Consulta de los videos en la base de datos
		$sql = "SELECT * FROM videos";
		$resultado = mysqli_query($conexion, $sql);

		// Mostrar los videos en una tabla
		while ($fila = mysqli_fetch_assoc($resultado)) {
			echo "<tr>";
			echo "<td>" . $fila['id'] . "</td>";
			echo "<td>" . $fila['nombre'] . "</td>";
			echo "<td>" . $fila['descripcion'] . "</td>";
			echo "<td><a href='" . $fila['url'] . "'>" . $fila['url'] . "</a></td>";
			echo "<td><a href='editar.php?id=" . $fila['id'] . "'>Editar</a> <a href='eliminar.php?id=" . $fila['id'] . "'>Eliminar</a></td>";
			echo "</tr>";
		}

		// Cerrar la conexión a la base de datos
		mysqli_close($conexion);
		?>
	</table>

	<p><a href="crear.php">Crear video</a></p>

</body>
</html>