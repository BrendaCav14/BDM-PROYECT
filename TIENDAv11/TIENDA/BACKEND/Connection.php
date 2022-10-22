<?php


$servidor = "mysql:dbname=tienda;host=localhost";
$user = "root";
$pass = "";

// Create connection
try{
    $pdo = new PDO($servidor, $user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch(PDOException $e){
    echo "conexion fallida" .$e->getMessage();
}

?>
