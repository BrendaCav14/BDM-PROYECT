<?php

$data = file_get_contents("php://input");
require("./BACKEND/Connection.php");

 $consulta="CALL SP_Categoria('X', :id, null, null);";

// $consulta="SELECT nombre_Cat, descripcion, FK_vendedor FROM Categoria  WHERE nombre_Cat = :id";


$query=$pdo->prepare($consulta);
$query->bindParam(":id",$data);
$query->execute();
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultado);



?>