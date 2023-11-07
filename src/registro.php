<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library of Eternal Learning</title>
    <!-- Bootstrap v5.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login">
        <a href="index.php" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-arrow-left fs-3"></i>
        </a>
        <h1 class="text-center">Registrarse</h1>
        <hr>
        <form class="needs-validation" method="POST">
            <div class="form-group was-validated">
                <label class="form-label" for="nombre">Nombre:</label>
                <input class="form-control icono-usuario" type="text" placeholder="Introduzca Su Nombre" name="nombre" id="nombre" required title="Nombre">
                <div class="invalid-feedback">
                    Por Favor Introduzca Su Nombre
                </div>
            </div>

            <div class="form-group was-validated">
                <label class="form-label" for="apellido">Apellido:</label>
                <input class="form-control icono-usuario" type="text" placeholder="Introduzca Su Apellido" name="apellido" id="apellido" required title="Apellido">
                <div class="invalid-feedback">
                    Por Favor Introduzca Su Apellido
                </div>
            </div>

            <div class="form-group was-validated">
                <label class="form-label" for="correo">Correo:</label>
                <input class="form-control icono-email" type="email" placeholder="Introduzca Su Correo" name="correo" id="correo" required title="Correo">
                <div class="invalid-feedback">
                    Por Favor Introduzca Su Correo
                </div>
            </div>

            <div class="form-group was-validated">
                <label class="form-label" for="contrasena">Contraseña:</label>
                <input class="form-control icono-contrasena" type="password" placeholder="Introduzca Su Contraseña" name="contrasena" id="contrasena" required title="Contraseña">
                <div class="invalid-feedback">
                    Por Favor Introduzca Su Contraseña
                </div>
            </div>
            
            <div class="form-group was-validated">
                <label class="form-label" for="repetir-contrasena">Repetir Contraseña:</label>
                <input class="form-control icono-contrasena" type="password" placeholder="Introduzca Su Contraseña" name="repetir_contrasena" id="repetir-contrasena" required title="Repetir Contraseña">
                <div class="invalid-feedback">
                    Por Favor Introduzca Su Contraseña
                </div>
            </div>

            <div class="form-group was-validated">
                <label class="form-label" for="pregunta">Pregunta de Seguridad:</label>
                <select class="form-select icono-contrasena" name="pregunta" id="pregunta" required title="Pregunta de Seguridad">
                    <option selected></option>
                    <option value="1">¿Cuál es el nombre de la ciudad donde naciste?</option>
                    <option value="2">¿Cuál era tu sobrenombre de la infancia?</option>
                    <option value="3">¿Cómo se llama la primera escuela a la que asististe?</option>
                    <option value="4">¿Cuál es tu color favorito?</option>
                </select>
                <div class="invalid-feedback">
                    Por Favor Seleccione Una Pregunta
                </div>
            </div>

            <input class="btn btn-primary btn-lg w-100 mt-3" name="registro" type="submit" value="Registrarse">
        </form>
        <hr>
        <?php
            include("registrar.php");
        ?>
    </div>
</body>
</html>