<?php
// // Conexión a la base de datos
// // include 'conexion.php';

// // // Obtener la ID del formulario
// // $id = $_GET['id_requerimiento'];

// // // Consulta SQL para obtener la información según la ID
// // $sql = "SELECT * FROM requerimiento WHERE id_requerimiento = $id";
// // $result = $conn->query($sql);

// // if ($result->num_rows > 0) {
// //     $row = $result->fetch_assoc();
// //     $id = $row["id_requerimiento"];
// //     $rut = $row["rut"];
// //     $nombres = $row["nombres"];
// //     $apellidos = $row["apellidos"];
// //     $correo = $row["correo"];
// //     $oficina = $row["oficina"];
// //     $asunto = $row["asunto"];
// //     $mensaje = $row["mensaje"];


// //     // ... Continuar con el resto de los campos que necesites

// //     // Cerrar la conexión a la base de datos
// //     $conn->close();
// // }
include 'conexion.php';

if (isset($_GET['id_requerimiento'])) {
    // Obtener la ID del formulario
    $id = $_GET['id_requerimiento'];

    // Consulta SQL para obtener la información según la ID
    $sql = "SELECT * FROM requerimiento WHERE id_requerimiento = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row["id_requerimiento"];
        $rut = $row["rut"];
        $nombres = $row["nombres"];
        $apellidos = $row["apellidos"];
        $correo = $row["correo"];
        $oficina = $row["oficina"];
        $asunto = $row["asunto"];
        $mensaje = $row["mensaje"];

        // ... Continuar con el resto de los campos que necesites

        // Cerrar la conexión a la base de datos
        $conn->close();
    } else {
        // No se encontraron registros con la ID proporcionada
    }
} else {
    // No se proporcionó la ID del formulario
}
?>

 // <!DOCTYPE html>
<html>
<head>
    <title>correo</title>
</head>
<body>
    <form action="guardar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="campo1">RUT:</label>
        <input type="text" name="campo1" value="<?php echo $rut; ?>"><br>
        <label for="campo1">Nombres:</label>
        <input type="text" name="campo1" value="<?php echo $nombres; ?>"><br>

        <label for="campo2">Apellidos:</label>
        <input type="text" name="campo2" value="<?php echo $apellidos; ?>"><br>

        <label for="campo2">Correo:</label>
        <input type="text" name="campo2" value="<?php echo $correo; ?>"><br>

        <label for="campo2">oficina:</label>
        <input type="text" name="campo2" value="<?php echo $oficina; ?>"><br>

        <label for="campo2">Asunto:</label>
        <input type="text" name="campo2" value="<?php echo $asunto; ?>"><br>

        <label for="campo2">Mensaje:</label>
        <input type="text" name="campo2" value="<?php echo $mensaje; ?>"><br>

        
        

        <input type="submit" value="Guardar">
    </form>
</body>
</html> -->
