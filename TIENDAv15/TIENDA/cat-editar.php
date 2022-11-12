<?php


require("./BACKEND/Connection.php");


$id = file_get_contents('php://input');

$lista = $pdo->prepare("SELECT nombre_Cat, descripcion, FK_vendedor FROM Categoria WHERE ID_Cat = :id");
$lista->bindParam(":id", $id);
$lista->execute();
$resultado = $lista->fetch();
if($resultado){
   
echo json_encode($resultado);
// print_r($resultado);
}
      
?>