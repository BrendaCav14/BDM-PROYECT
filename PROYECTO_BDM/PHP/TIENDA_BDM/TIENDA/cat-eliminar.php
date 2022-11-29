<?php

$data = file_get_contents("php://input");
require("./BACKEND/Connection.php");

$query = $pdo->prepare("CALL SP_Categoria('D',:id,null, null, null);");

// $query = $pdo->prepare("DELETE Categoria FROM WHERE nombre_Cat = :id");

$query->bindParam(":id",$data);
$query->execute();
echo "ok";

?>