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
        <h1 class="text-center">Iniciar Sesión</h1>
        <hr>
        <form class="needs-validation" method="POST">
            <div class="form-group was-validated">
                <label class="form-label" for="correo">Correo:</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="icono-email"><i class="bi bi-envelope"></i></span>
                    <input class="form-control" type="email" aria-describedby="icono-email" placeholder="Introduzca Su Correo" name="correo" id="correo" required title="Correo">
                </div>
                <div class="invalid-feedback">
                    Por Favor Introduzca Su Correo
                </div>
            </div>

            <div class="form-group was-validated">
                <label class="form-label" for="contrasena">Contraseña:</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="icono-email"><i class="bi bi-lock"></i></span>
                    <input class="form-control" type="password" placeholder="Introduzca Su Contraseña" name="contrasena" id="contrasena" required title="Contraseña">
                </div>
                <div class="invalid-feedback">
                    Por Favor Introduzca Su Contraseña
                </div>
            </div>
            <div class="text-center">
                <a href="recuperar-contrasena.php" class="link-info fs-6 text-decoration-none">¿Olvido su contraseña?</a>
            </div>
            <div class="form-group text-center">
                <input class="form-check-input" type="checkbox" name="check" id="check">
                <label class="form-check-label" for="check">Recuerdame</label>
            </div>

            <input class="btn btn-success btn-lg w-100" name="inicio" type="submit" value="Iniciar Sesión">
            <a href="registro.php" class="btn btn-primary btn-lg w-100 mt-3">Registrarse</a>
        </form>
        <hr>
        <?php
            include("iniciar_sesion.php");
        ?>
    </div>
</body>
</html>