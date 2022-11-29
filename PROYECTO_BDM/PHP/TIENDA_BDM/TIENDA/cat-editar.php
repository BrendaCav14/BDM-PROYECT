<?php


require("./BACKEND/Connection.php");


$id = file_get_contents("php://input");

$lista = $pdo->prepare("CALL SP_Categoria('X', :id,null,null,null);");
$lista->bindParam(":id", $id);
$lista->execute();
$resultado = $lista->fetch(PDO::FETCH_ASSOC);

echo json_encode($resultado);

?>