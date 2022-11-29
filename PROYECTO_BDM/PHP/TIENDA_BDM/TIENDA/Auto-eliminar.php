<?php

$data = file_get_contents("php://input");

print_r($data);
require("./BACKEND/Connection.php");

$query = $pdo->prepare("CALL SP_AutoProd('D',:id,null,null);");

$query->bindParam(":id",$data);
$query->execute();
if($query){
echo "ok";
}
?>