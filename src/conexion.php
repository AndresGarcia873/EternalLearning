<?php

function conectar() {
    $user = "root";
    $pass = "root";
    $server = "mysql:3306";
    $db = "eternal_learning_db";
    $con = mysqli_connect($server, $user, $pass, $db) or die ("Error al conectar a la base de datos. ".mysqli_connect_error());
    $con->set_charset("utf8");

    return $con;
}

?>