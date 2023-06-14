<?php
include 'conexion.php';
$dato = $_GET['dato'];

$conn->set_charset("utf8mb4");

$dato = mysqli_real_escape_string($conn, $dato); // Escapar y codificar el valor de búsqueda

$query = "SELECT Nombres, Apellidos, Rut, Email FROM usuarios WHERE Rut = '$dato'";
$result = $conn->query($query);

if ($result === false) {
    die("Error al ejecutar la consulta: " . $conn->error);
}

// Obtén los datos del resultado
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nombres = $row['Nombres'];
    $apellidos = $row['Apellidos'];
    $rut = $row['Rut'];
    $correo = $row['Email'];
}
$querySelect = "SELECT id_oficina, nombre FROM oficinas";
$resultSelect = mysqli_query($conn, $querySelect);

if (!$resultSelect) {
    die("Error al ejecutar la consulta del select: " . mysqli_error($conn));
}
// Obtén el dato desde la URL
    // include 'conexion.php';
    // $dato = $_GET['dato'];

    // $conn->set_charset("utf8");


    // $query = "SELECT Nombres,Apellidos,Rut,Email FROM usuarios WHERE Rut = $dato";
    // $result = $conn->query($query);

    // if ($result === false) {
    //     die("Error al ejecutar la consulta: " . $conn->error);
    // }

    // // Obtén los datos del resultado
    // $row = $result->fetch_assoc();
    // $nombres = $row['Nombres'];
    // $apellidos = $row['Apellidos'];
    // $rut = $row['Rut'];
    // $correo = $row['Email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Centro del Ciudadano</title>
</head>
<body>
<?php
include 'nav.php';
?>

    <div class="container">
    <form action="correo.php" method="post" class="row g-4 mt-3">
                <div class="col-6">
                <img src="imagenes-iconos/rut.svg" alt="rut">
                 <label for="rut" class="form-label">Rut</label>
                    <input class="form-control" type="text" name="rut" id="rut" placeholder="Ingrese Rut" value="<?php echo $rut; ?>" required>
                    </div>
                    <div class="col-6">
                    <img src="imagenes-iconos/usuario.svg" alt="usuario1" >
                    <label for="nombres" class="form-label">Nombres</label>
                     <input class="form-control" type="text" name="nombres" id="nombres" placeholder="Ingrese Primer Nombre" value="<?php echo $nombres; ?>" required>
                 </div>
                    
                    <div class="col-6">
                     <img src="imagenes-iconos/usuario.svg" alt="usuario3" >
                   <label for="apellidos" class="form-label">Apellidos</label>
                     <input class="form-control" type="text" name="apellidos" id="apellidos" placeholder="Ingrese Primer Apellido" value="<?php echo $apellidos; ?>" required>
                 </div>
                
                 <div class="col-6">
                 <img src="imagenes-iconos/correo.svg" alt="correo">
                 <label for="correo" class="form-label">Correo</label>
                    <input class="form-control" type="mail" name="correo" id="correo" placeholder="Ingrese Correo" value="<?php echo $correo; ?>" required>
                 </div>
                <div class="col-6">
                 <label for="oficina">Seleccione Oficina</label>
                 <select name="oficina" id="oficina" class="form-control" required>
                <option selected disabled>seleccione oficina</option>
                <option value="Oficina de protección de Derechos de Niños, Niñas y Adolescentes ">Oficina de protección de Derechos de Niños, Niñas y Adolescentes </option>
                <option value="SENDA Previene en la Comunidad">SENDA Previene en la Comunidad</option>
                <option value="Centro de Atención y Prevención de Violencias">Centro de Atención y Prevención de Violencias </option>
                <option value="Oficina de Discapacidad">Oficina de Discapacidad</option>
                <option value="Plan Comunal de Seguridad Pública">Plan Comunal de Seguridad Pública</option>
                <option value="Programa 24 horas">Programa 24 horas</option>
                <option value="Oficina Municipal de Juventudes ">Oficina Municipal de Juventudes </option>
                <option value="Oficina Municipal de Vivienda  ">Oficina Municipal de Vivienda  </option>
                <option value="Gestión Territorial ">Gestión Territorial </option>
                <option value=" Programa Mujeres Jefas de Hogar"> Programa Mujeres Jefas de Hogar</option>
                <option value="Unidad de Bienestar Familiar de BanAmor">Unidad de Bienestar Familiar de BanAmor</option>
                <option value="Oficina Social Municipal">Oficina Social Municipal</option>
                <option value="Registro Social de hogares">Registro Social de hogares</option>
                <option value="Obras Comunitarias y Sociales">Obras Comunitarias y Sociales</option>
                <option value="Unidad Desarrollo Económico Local">Unidad Desarrollo Económico Local</option>
                <option value="Organismo Técnico de Capacitación ">Organismo Técnico de Capacitación </option>
                <option value="Programa de Apoyo a la Integración Social de Personas en Situación De Calle ">Programa de Apoyo a la Integración Social de Personas en Situación De Calle </option>
                <option value="Programa de Atención Integral al Adulto Mayor ">Programa de Atención Integral al Adulto Mayor </option>
                <option value="Oficina Derechos Ciudadanos  ">Oficina Derechos Ciudadanos  </option>
                <option value="Ventanilla Única de Subsidios">Ventanilla Única de Subsidios</option>
                <option value="Programa de 4 a 7">Programa de 4 a 7</option>
                <option value="Dirección ">Dirección </option>
                <option value="Oficina Comunal de Chile Crece Contigo">Oficina Comunal de Chile Crece Contigo</option>
                <option value="Casa del Deporte">Casa del Deporte</option>
                <option value="Adulto Mayor">Adulto Mayor</option>
                <option value="Oficina de Turismo">Oficina de Turismo</option>
                <option value="Granja Terapéutica Nahuen">Granja Terapéutica Nahuen</option>
                <option value="Familia Seguridades y Oportunidades">Familia Seguridades y Oportunidades</option>
                <option value="Autoconsumo para la Producción Familias">Autoconsumo para la Producción Familias</option>
                <option value="Centro de Atención para Hijos e Hijas de Madres Temporeras ">Centro de Atención para Hijos e Hijas de Madres Temporeras </option>
                <option value="Habitabilidad">Habitabilidad</option>
                <option value="Abriendo Caminos Convocatoria 2016.">Abriendo Caminos Convocatoria 2016.</option>
                <option value="Programa Oportunidad para la Vida.">Programa Oportunidad para la Vida.</option>
                <option value="Programa de Recuperación de Barrios 'Quiero Mi Barrio'. Sector Cerro Mayaca Bajo">Programa de Recuperación de Barrios "Quiero Mi Barrio". Sector Cerro Mayaca Bajo</option>
                <option value="Programa de Desarrollo Agricola Local Quillota">Programa de Desarrollo Agricola Local Quillota</option>
                <option value="Abriendo Caminos arrastre 2015">Abriendo Caminos arrastre 2015</option>
                <option value="Articulacion de redes locales y sociocomunitarias">Articulacion de redes locales y sociocomunitarias</option>
                <option value="Plan de Capacitación para cuidadoras/es de pacientes dependientes severo a moderado">Plan de Capacitación para cuidadoras/es de pacientes dependientes severo a moderado</option>
                <option value="Programa de Recuperación de Barrios ">Programa de Recuperación de Barrios </option>
                <option value="Delegación San Pedro">Delegación San Pedro</option>
                <option value="Oficina Municipal Para personas en situación de Calle">Oficina Municipal Para personas en situación de Calle</option>
                <option value="Ruta Calle Social ">Ruta Calle Social </option>
                <option value="Desarrollo Rural">Desarrollo Rural</option>
                <option value="Estrategia de Desarrollo Local Inclusivo">Estrategia de Desarrollo Local Inclusivo</option>
                <option value="Oficina de Gestión de Riesgo de Desastres">Oficina de Gestión de Riesgo de Desastres</option>
                <option value="Comunicacion y Prensa">Comunicacion y Prensa</option>
                <option value="Alcaldía">Alcaldía</option>
                <option value="CASA ENCUENTRO CULTURAL Y COMUNITARIO ACONCAGUA SUR ">CASA ENCUENTRO CULTURAL Y COMUNITARIO ACONCAGUA SUR </option>
                <option value="Acompañamientos Vínculos">Acompañamientos Vínculos</option>
                <option value="Centro Cultural Leopoldo Silva Reynoard ">Centro Cultural Leopoldo Silva Reynoard </option>
                <option value="Kimche Infantíl">Kimche Infantíl</option>
                <option value="Oficina de Migración">Oficina de Migración</option>
                <option value="Vínculos Acompañamiento 2017">Vínculos Acompañamiento 2017</option>
                <option value="Dispositivo Barrial Antumapu Rios de Chile">Dispositivo Barrial Antumapu Rios de Chile</option>
                <option value="Unidad de Familias">Unidad de Familias</option>
                <option value="Plan Comunal de Promoción de Salud">Plan Comunal de Promoción de Salud</option>
                <option value="Casa de Encuentro Cultural Comunitario">Casa de Encuentro Cultural Comunitario</option>
                <option value="Anonima (Cualquier Oficina)">Anonima (Cualquier Oficina)</option>
                <option value="Condominio de Viviendas Tuteladas del Adulto Mayor">Condominio de Viviendas Tuteladas del Adulto Mayor</option>
                <option value="Ruta Calle">Ruta Calle</option>
                <option value="Prensa Dideco">Prensa Dideco</option>
                <option value="Oficina de Diversidades">Oficina de Diversidades</option>
                <option value="Fundación BanAmor">Fundación BanAmor</option>
                <option value="Residencia Adulto Mayor San Pedro">Residencia Adulto Mayor San Pedro</option>
                <option value="Pueblos Originarios">Pueblos Originarios</option>
                <option value="Unidad de Inclusión Social">Unidad de Inclusión Social</option>
                <option value="Oficina Social DIDECO">Oficina Social DIDECO</option>
                <option value="Oficina de Atención Ciudadana">Oficina de Atención Ciudadana</option>
                <option value="Delegación San Pedro">Delegación San Pedro</option>
                <option value="Casa de Encuentro Cultural Comunitario Antumapu">Casa de Encuentro Cultural Comunitario Antumapu</option>
                <option value="Oficina comunal de mujeres y equidad de género">Oficina comunal de mujeres y equidad de género</option>
                <option value="Gabinete Municipal">Gabinete Municipal</option>
 





                
                
            </select>
             
                

          
        </div>
        <div class="col-6">
            <label for="asunto">Seleccione requerimiento</label>
        <select name="asunto" id="asunto" class="form-control" required>
                <option selected disabled>seleccione asunto</option>
                <option value="Felicitaciones">Felicitaciones</option>
                <option value="Consulta">Consulta</option>
                <option value="Reclamo">Reclamo</option>
                
            </select>
        </div>
        <div class="col-12">
            <img src="imagenes-iconos/archive.svg" alt="archivo">
            <label for="mensajes">mensajes</label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control" placeholder="ingrese su reclamo o consulta o felicitaciones" maxlength="1000" required></textarea>
        </div>
        <div class="d-grid gap-2">
            
            <input type="submit" value=" registrar" name="enviar" class="btn btn-success  boton">
        </div>
    </form>
    <?php
    //include 'correo.php';
    ?>
    </div>
</body>
</html>