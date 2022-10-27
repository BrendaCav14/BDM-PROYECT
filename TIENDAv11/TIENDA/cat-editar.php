<?php

$data = file_get_contents("php://input");
require("./BACKEND/Connection.php");

$query=$pdo->prepare("SELECT nombre_Cat,descripcion, FK_vendedor FROM Categoria WHERE nombre_Cat = :id");
$query->bindParam(":usu",$data);
$query->execute();
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);
if($resultado){
   
echo json_encode($resultado);
// print_r($resultado);
}
?>