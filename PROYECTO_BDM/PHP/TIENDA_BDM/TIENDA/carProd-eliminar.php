<?php

$data = file_get_contents("php://input");
require("./BACKEND/Connection.php");

$query = $pdo->prepare("CALL SP_CarritoDet('D',:id,null,null,null,null,null,null,null);");

$query->bindParam(":id",$data);
$resultado = $query->execute();

if($resultado){
echo "ok";
}
?>