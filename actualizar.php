<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "multimedia");
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }
// Obtener los datos del formulario 
$id = $_POST['id']; $nombre = $_POST['nombre']; $descripcion = $_POST['descripcion']; $url = $_POST['url'];

// Actualizar los datos en la base de datos 
$sql = "UPDATE videos SET nombre = '$nombre', descripcion = '$descripcion', url = '$url' WHERE id = $id"; $resultado = mysqli_query($conexion, $sql);

// Verificar si se ha actualizado correctamente 
if ($resultado) { echo "El video ha sido actualizado correctamente"; } else { echo "Ha ocurrido un error al actualizar el video: " . mysqli_error($conexion); }

// Cerrar la conexión a la base de datos 
mysqli_close($conexion); ?>