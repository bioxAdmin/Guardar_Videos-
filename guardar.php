<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "multimedia");
if (!$conexion) {
	die("Error de conexión: " . mysqli_connect_error());
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$url = $_POST['url'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO videos (nombre, descripcion, url) VALUES ('$nombre', '$descripcion', '$url')";
$resultado = mysqli_query($conexion, $sql);

// Verificar si se ha insertado correctamente
if ($resultado) {
	echo "El video ha sido creado correctamente";
} else {
	echo "Ha ocurrido un error al crear el video: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>