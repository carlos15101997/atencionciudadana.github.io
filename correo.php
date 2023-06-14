<?php
if (isset($_POST['enviar'])) {
  if (!empty($_POST['rut']) && !empty($_POST['nombres']) && !empty($_POST['apellidos'])  && !empty($_POST['correo']) && !empty($_POST['oficina']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])) {
   $rut=$_POST['rut'];
   $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $correo=$_POST['correo'];
   $oficina=$_POST['oficina'];
   $asunto=$_POST['asunto'];
   $mensaje=$_POST['mensaje'];

   $header="From: carlos.ruiz@quillota.cl" . "\r\n";
   $header.="Reply-To: carlos.ruiz@quillota.cl" . "\r\n";
   $header.="X-Mailer: PHP/" . phpversion();
   $mail= mail($correo,$asunto,$mensaje,$header);

    if ($mail) {
        echo"<div class='alert alert-success' role='alert'>
        <h4>Se ha enviado un correo de su registro</h4>
</div>";
    }

    include 'conexion.php';
    if (empty($rut) || empty($nombres) || empty($apellidos) || empty($correo) || empty($oficina) || empty($asunto) || empty($mensaje)) {
        echo "Todos los campos son obligatorios. Por favor, completa el formulario.";
    } else {
        // Consulta preparada para realizar la inserción
        $sql = "INSERT INTO requerimiento (rut, nombres, apellidos, correo, oficina, asunto, mensaje) VALUES ('$rut', '$nombres', '$apellidos','$correo', '$oficina', '$asunto', '$mensaje')";
    
        try {
            $consulta = $conn->prepare($sql);
    
            // Asigna los valores a los parámetros de la consulta preparada
            // $consulta->bind_param("sssssssss", $rut, $nombre1, $nombre2, $apellido1, $apellido2, $correo, $oficina, $asunto, $mensaje);
    
            // Ejecuta la consulta
            $consulta->execute();
    
        } catch (Exception $e) {
            echo "Error al insertar en la tabla requerimiento: " . $e->getMessage();
        }
    }
  }
  header('Location:index.php');
}
?>

