<?php 
// Conexión a la base de datos 
$conexion = mysqli_connect("localhost", "root", "", "multimedia"); 
if (!$conexion) { die("Error de conexión: " . mysqli_connect_error()); } 
// Obtener el ID del video a eliminar 
$id = $_GET['id']; 
// Eliminar el video de la base de datos 
$sql = "DELETE FROM videos WHERE id = $id";
$resultado = mysqli_query($conexion, $sql);
// Verificar si se ha eliminado correctamente 
if ($resultado) { echo "El video ha sido eliminado correctamente"; 
} else { 
    echo "Ha ocurrido un error al eliminar el video: " . mysqli_error($conexion); 
    } // Cerrar la conexión a la base de datos 
    mysqli_close($conexion); ?>
