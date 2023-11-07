<?php
    include("conexion.php");
    $con = conectar();
?>
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
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body class="bg-white">
    <nav class="navbar   navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand text-warning fw-bold fs-3" href="#">Eternal Learning</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex w-50" method="POST">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="filtro">
                <button class="btn btn-outline-success" type="submit" name="buscador"><i class="bi bi-search"></i></button>
            </form>            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="inicio.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Qué hay de nuevo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="consulta_libros.php">Libros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pedidos anteriores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Acerca de nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mi cuenta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Salir</a>
              </li>
            </ul>
            
          </div>
        </div>
    </nav>
    <main class="flex-shrink-0">
        <h1 class="text-center">Libros</h1>
        <div class="container">    
            <div class="row justify-content-md-center">
                <?php
                    include("filtrar_libros.php");
                ?>
            </div>  
        </div>  
    </main>
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright:
          Andrés García
        </div>
        <!-- Copyright -->
      </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>