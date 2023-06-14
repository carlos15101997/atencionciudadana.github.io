<?php
// Obtén el valor buscado del formulario
$datoBuscado = $_POST['buscar'];

// Realiza la lógica de búsqueda en tu base de datos
// Supongamos que tienes una tabla llamada "datos" con una columna "dato"
// Aquí un ejemplo utilizando MySQLi:
require_once 'conexion.php';

$query = "SELECT * FROM usuarios WHERE Rut = '$datoBuscado'";
$result = $conn->query($query);

if ($result === false) {
    die("Error al ejecutar la consulta: " . $conn->error);
}

// Verifica si se encontraron resultados
if ($result->num_rows > 0) {
  // Si se encontró el dato, redirige al formulario de edición con los datos cargados
  header("Location: consulta.php?dato=" . urlencode($datoBuscado));
} else {
  // Si no se encontró el dato, redirige al formulario de registro
  echo "<script>alert('El rut buscado no existe. Por favor, regístrese.');</script>";
//   header("Location: registro.php");
echo "<script>window.location.href = 'registro.php';</script>";
}
?>
