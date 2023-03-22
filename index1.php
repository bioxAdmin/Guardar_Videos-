<!DOCTYPE html>
<html>
<head>
    <title>Lista de videos</title>
</head>
<body>
    <h1>Lista de videos</h1>

    <p><a href="crear.php">Crear video</a></p>

    <table border="1">
        <tr>
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

        // Obtener la lista de videos de la base de datos
        $sql = "SELECT * FROM videos";
        $resultado = mysqli_query($conexion, $sql);

        // Mostrar los videos en la tabla
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $fila['descripcion'] . "</td>";
            echo "<td>" . $fila['url'] . "</td>";
            echo "<td><a href='editar.php?id=" . $fila['id'] . "'>Editar</a> | <a href='eliminar.php?id=" . $fila['id'] . "'>Eliminar</a></td>";
            echo "</tr>";
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
        ?>
    </table>
    <style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		a {
			text-decoration: none;
			color: #4CAF50;
		}

		a:hover {
			color: #000000;
		}
	</style>
</body>
</html>