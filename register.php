<?php

// Obtener los valores del formulario
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$rut = $_POST['rut'];
$pasaporte = $_POST['pasaporte'];
$fNacimiento = $_POST['fNacimiento'];
$sexo = $_POST['sexo'];
$civil = $_POST['civil'];
$ocupacion = $_POST['ocupacion'];
$nacionalidad = $_POST['nacionalidad'];
$calleNombre = $_POST['calleNombre'];
$numCasa = $_POST['numCasa'];
$block = $_POST['block'];
$depto = $_POST['depto'];
$direccion = $_POST['direccion'];
$poblacion = $_POST['poblacion'];
$uVecinal = $_POST['uVecinal'];
$comuna = $_POST['comuna'];
$fijo = $_POST['fijo'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$actualizacion = $_POST['actualizacion'];
$migratoria = $_POST['migratoria'];
$fechaIngresoPais = $_POST['fechaIngresoPais'];
$discapacidad = $_POST['discapacidad'];
$credencialDiscapacidad = $_POST['credencialDiscapacidad'];

// Realizar la conexión a la base de datos
include 'conexion.php';

// Preparar la consulta SQL
$sql = "INSERT INTO usuarios (Nombres,Apellidos,Rut,pasaporte,FNacimiento,Sexo,Civil,Ocupacion,Nacionalidad,Calle_Nombre,Num_Casa,Block,Depto,Direccion,Poblacion,UVecinal,Comuna,Fijo,Celular,Email,FechaActualizacion,situacion_Migratoria,fecha_IngresoPais,discapacidad,credencial_Discapacidad)
        VALUES ('$nombres', '$apellidos', '$rut', '$pasaporte', '$fNacimiento', '$sexo', '$civil', '$ocupacion', '$nacionalidad', '$calleNombre', '$numCasa', '$block', '$depto', '$direccion', '$poblacion', '$uVecinal', '$comuna', '$fijo', '$celular', '$email', '$actualizacion','$migratoria','$fechaIngresoPais', '$discapacidad', '$credencialDiscapacidad')";

// Ejecutar la consulta y verificar si fue exitosa
if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar los datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>





