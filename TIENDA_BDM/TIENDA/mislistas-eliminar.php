<?php


require("./BACKEND/Connection.php");

$id = file_get_contents("php://input");

$query = $pdo->prepare("CALL SP_Lista('D', :lista,null,null,null,null,null);");

$query->bindParam(":lista",$id);
$query->execute();

echo "ok";


?>