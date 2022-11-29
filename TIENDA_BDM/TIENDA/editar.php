<?php

$data = file_get_contents("php://input");
require("./BACKEND/Connection.php");

$query=$pdo->prepare("CALL SP_Usuario('T',:usu,null,null,null,null,null,null,null,null,null,null,null,null);
");
$query->bindParam(":usu",$data);
$query->execute();
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);
if($resultado){
   
echo json_encode($resultado);
// print_r($resultado);
}
?>