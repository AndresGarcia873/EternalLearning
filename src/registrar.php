<?php
    include("conexion.php");
    $con = conectar();

    if (isset($_POST['registro'])) {
        if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['correo']) >= 1 
            && strlen($_POST['contrasena']) >= 1 && strlen($_POST['repetir_contrasena']) >= 1 && strlen($_POST['pregunta']) >= 1) {                
                $nombre = mb_strtoupper(trim($_POST['nombre']));
                $apellido = mb_strtoupper(trim($_POST['apellido']));
                $correo = trim($_POST['correo']);
                $contrasena = trim($_POST['contrasena']);
                $repetir_contrasena = trim($_POST['repetir_contrasena']);
                $pregunta = trim($_POST['pregunta']);
                $modificado = date("Y-m-d");
                
                if ($contrasena === $repetir_contrasena) {
                    $consulta = "INSERT INTO login(nombres, apellidos, correo, contrasena, preguntas_id_pregunta, modificado) values ('$nombre', '$apellido', '$correo', '$contrasena', '$pregunta', '$modificado')";
                    $resultado = mysqli_query($con, $consulta);
                    if ($resultado) {
                        ?>
                            <div class="alert alert-success" role="alert">
                                Usuario registrado correctamente!
                            </div>
                        <?php
                    } else {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                No se pudo registrar usuario!
                            </div>
                        <?php
                    }
                } else {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            Las contraseñas no coinciden!
                        </div>
                    <?php
                }
        } else {
            ?>
                <div class="alert alert-danger" role="alert">
                    Todos los campos son obligatorios!
                </div>
            <?php
        }
    }
?>