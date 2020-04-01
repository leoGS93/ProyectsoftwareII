<?php
try {

    $pdo= new PDO("pgsql:dbname=Mibd;host=localhost","postgres","password");
    echo"Que bien la conexion es exitosa";
} catch (Exception $e) {
    echo"error";
}

?>