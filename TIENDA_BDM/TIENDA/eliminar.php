<?php


require("./BACKEND/Connection.php");

$id = file_get_contents("php://input");

$query = $pdo->prepare("CALL SP_Usuario('D', :usu,null,null,null,null,null,null,null,null,null,null,null,null,null,null);");

$query->bindParam(":usu",$id);
$query->execute();

echo "ok";


?>