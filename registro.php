<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Registro Usuarios</title>
</head>
<body>
    <?php include 'nav.php';?>
    <div class="container">
    <form action="register.php" method="POST">
    <div class="row">
        <div class="col-md-6">
            <label for="nombres">Nombres</label>
            <input type="text" name="nombres" id="nombres" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control" required>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <label for="rut">Rut</label>
            <input type="text" name="rut" id="rut" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="pasaporte">Pasaporte (opcional)</label>
            <input type="text" name="pasaporte" id="pasaporte" class="form-control" >
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <label for="fNacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fNacimiento" id="fNacimiento" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="sexo">Sexo</label>
            <select name="sexo" id="sexo" class="form-control" required>
                <option selected disabled>seleccione asunto</option>
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
               
            </select>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <label for="civil">Estado Civil</label>
            <input type="number" name="civil" id="civil" class="form-control" min= required>
        </div>
        <div class="col-md-6">
            <label for="ocupacion">Ocupación</label>
            <input type="number" name="ocupacion" id="ocupacion" class="form-control" required>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <label for="nacionalidad">Nacionalidad</label>
            <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="calleNombre">Calle y Nombre</label>
            <input type="text" name="calleNombre" id="calleNombre" class="form-control" required>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <label for="numCasa">Número de Casa</label>
            <input type="text" name="numCasa" id="numCasa" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="block">Block</label>
            <input type="text" name="block" id="block" class="form-control" >
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <label for="depto">Departamento</label>
            <input type="text" name="depto" id="depto" class="form-control" >
        </div>
        <div class="col-md-6">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" required>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <label for="poblacion">Población</label>
            <input type="text" name="poblacion" id="poblacion" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="uVecinal">Unidad Vecinal</label>
            <input type="text" name="uVecinal" id="uVecinal" class="form-control" required>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <label for="comuna">Comuna</label>
            <input type="text" name="comuna" id="comuna" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="fijo">Teléfono Fijo</label>
            <input type="text" name="fijo" id="fijo" class="form-control" >
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <label for="celular">Teléfono Celular</label>
            <input type="text" name="celular" id="celular" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="email">correo</label>
            <input type="email" name="email" id="email" class="form-control"  required>
        </div>
    </div>
    <div class="col-md-6">
            <label for="actualizacion">fecha de actualizacion</label>
            <input type="text" name="actualizacion" id="actualizacion" class="form-control"  >
        </div>
    </div>
    <div class="col-md-6">
            <label for="migratoria">Situación migratoria</label>
            <input type="text" name="migratoria" id="migratoria" class="form-control"  >
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="fechaIngresoPais">Fecha de Ingreso al País</label>
            <input type="date" name="fechaIngresoPais" id="fechaIngresoPais" class="form-control" >
        </div>
        <div class="col-md-6">
            <label for="discapacidad">Discapacidad</label>
            <input type="text" name="discapacidad" id="discapacidad" class="form-control" >
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <label for="credencialDiscapacidad">Credencial de Discapacidad</label>
            <input type="text" name="credencialDiscapacidad" id="credencialDiscapacidad" class="form-control" >
        </div>
        <!-- Resto de los campos -->
    </div>
    
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    </div>
</body>
</html>