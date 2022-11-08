<?php

$data = file_get_contents("php://input");
require("./BACKEND/Connection.php");

// $consulta="CALL SP_Categoria('A',null,null,'$data');";

// $resultado = mysqli_query($con,$consulta);

$query=$pdo->prepare("CALL SP_Categoria('A',null,null,:id);");
$query->bindParam(":id",$data);
$query->execute();
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);
if($resultado){
   
echo json_encode($resultado);
// print_r($resultado);
}
?>