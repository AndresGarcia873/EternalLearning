<?php

    if(isset($_POST['buscador']) && strlen($_POST['filtro']) >= 1) {
        $texto_buscador = trim($_POST['filtro']);
        $consulta = "SELECT * FROM libros WHERE titulo LIKE '%$texto_buscador%'";
    }else {
        $consulta = "SELECT * FROM libros";
    }
    $resultado = mysqli_query($con, $consulta);
    if ($resultado) {
        while($row = $resultado->fetch_array()) {
            $id = $row['id_libro'];
            $titulo = $row['titulo'];
            $escritor = $row['escritor'];
            $imagen = $row['imagen'];
            $editorial = $row['editorial'];
            $sinopsis = $row['sinopsis'];
            ?>  
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-5">                  
                <div class="card mb-5 box h-100 d-flex" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo $imagen; ?>" class="img-fluid rounded-start" title="<?php echo $titulo; ?>" alt="<?php echo $titulo; ?>">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $id.". ".$titulo; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $escritor; ?></h6>
                                <p class="card-text"><?php echo $sinopsis; ?></p>
                                <p class="card-text mt-auto"><small class="text-muted"><?php echo $editorial; ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }

?>