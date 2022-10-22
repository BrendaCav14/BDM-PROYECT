<?php

$data = file_get_contents("php://input");
require("./BACKEND/Connection.php");

$query=$pdo->prepare("SELECT usuario,nombre,nombre2,ApPat,ApMat,email,contraseña FROM Usuarios WHERE usuario = :usu;");
$query->bindParam(":usu",$data);
$query->execute();
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);
if($resultado){
   
echo json_encode($resultado);
// print_r($resultado);
}
?>